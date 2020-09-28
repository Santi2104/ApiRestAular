<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
        if (auth()->user()->role->name == 'admin') {
    
            return 'admin';
    
        }elseif(auth()->user()->role->name == 'bedelAplicadas'){
    
            return 'bedel-aplicadas/dashboard';
    
        }elseif(auth()->user()->role->name == 'bedelExactas'){
    
            return 'bedel-exactas/dashboard';
    
        }elseif(auth()->user()->role->name == 'bedelSalud'){
    
            return 'bedel-salud/dashboard';
    
        }elseif(auth()->user()->role->name == 'bedelSociales'){
    
            return 'bedel-sociales/dashboard';
    
        }elseif(auth()->user()->role->name == 'bedelHumanidades'){
    
            return 'bedel-humanidades/dashboard';
        }
    
    }
}
