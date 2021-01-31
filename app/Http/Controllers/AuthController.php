<?php

namespace App\Http\Controllers;

use App\Mail\EmailReset as MailEmailReset;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\SignupActivate;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Contracts\Encryption\DecryptException;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|string|email|unique:users',
            'password'  => 'required|string|confirmed',
        ]);
        $user = new User([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => bcrypt($request->password),
            'activation_token'  => Str::random(60),
            'role_id'           => 8
        ]);
        $user->save();
        $user->notify(new SignupActivate($user));

        return response()->json(['message' => 'Usuario creado existosamente!'], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'       => 'required|string|email',
            'password'    => 'required|string',
            'remember_me' => 'boolean',
        ]);
        $credentials = request(['email', 'password']);
        $credentials['active'] = 1;
        $credentials['deleted_at'] = null;

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Los datos no concuerdan con nuestros registros'], 401);
        }
        $user = $request->user();
        $tokenResult = $user->createToken('Token Acceso Personal');
        $token = $tokenResult->token;
        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type'   => 'Bearer',
            'expires_at'   => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(['message' =>
        'Successfully logged out']);
    }

    public function user(Request $request)
    {
        // return response()->json($request->user());
        return response()->json(['user' => $request->user()]);
    }

    public function signupActivate($token)
    {
        $user = User::where('activation_token', $token)->first();
        if (!$user) {
            return response()->json(['message' => 'El token de activación es inválido'], 404);
        }
        $user->active = true;
        $user->activation_token = '';
        $user->save();
        return $user;
    }

    public function checkEmail(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email',
            'new_email' => 'required|string|email'
        ]);

        $flag = User::where('email', $request['new_email'])->first();

        if ($flag) {
            return response()->json(["message" => "El email ya se encuentra en uso"]);
        }

        $mailCifrado = Crypt::encrypt($request['email']);
        Mail::to($request['new_email'])->send(new MailEmailReset($mailCifrado));
        $user = User::where('email', $request['email'])->first();
        $user->email_backup = $request['new_email'];
        $user->save();

        return response()->json(["user" => $user]);
    }

    public function resetEmail($token)
    {

        try {
            $decrypted = Crypt::decrypt($token);
        } catch (DecryptException $e) {
            return response()->json([
                "message" => "El token es incorrecto, intente reenviar de nuevo el email de confirmacion.",
                "error" => $e->getMessage()
            ]);
        }
        $user = User::where('email', $decrypted)->first();

        if (!$user) {
            return response()->json(["message" => "El token de este email esta caducado"]);
        }

        $userTokens = $user->tokens;

        foreach ($userTokens as $token) {
            $token->revoke();
        }

        $user->email = $user->email_backup;
        $user->email_backup = null;
        $user->email_verified_at = Carbon::now();
        $user->save();

        return response()->json(["message" => "El Email fue modificado de manera satisfactoria, Inicia sesion con tu nuevo Email"]);
    }

    public function setName(Request $request, $id){

        $request->validate([
            'new_name' => 'required|string',
        ]);

        $user = User::find($id);
        $user->name = $request['new_name'];
        $user->save();

        return response()->json(["message" => "Su nombre fue editado correctamente"]);

    }
}
