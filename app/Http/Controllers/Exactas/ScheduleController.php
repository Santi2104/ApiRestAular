<?php

namespace App\Http\Controllers\Exactas;

use App\AcademicSchedule;
use App\Career;
use App\Classroom;
use App\ClassType;
use App\Http\Controllers\Controller;
use App\Period;
use App\Schedule;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = DB::table('academic_schedules')
            ->join('courses', 'course_id', '=', 'courses.id')
            ->join('careers', 'career_id', '=', 'careers.id')
            ->join('departments', 'department_id', '=', 'departments.id')
            ->join('classrooms', 'classroom_id', '=', 'classrooms.id')
            ->join('class_types', 'class_type_id', '=', 'class_types.id')
            ->select('courses.title', 'classrooms.name as aula', 'class_types.name as tipo_clase', 'careers.name', 'academic_schedules.day', 'academic_schedules.start', 'academic_schedules.end', 'academic_schedules.status', 'academic_schedules.id')
            ->where('departments.id', 1)
            ->get();

        return view('layouts.pages.bedel-exactas.schedule.index', compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodos = Period::all('id', 'display_name');
        $aulas = Classroom::where('building_id', 3)->get(['id', 'name']);
        $tipoClases = ClassType::all('id', 'name');
        $carreras = Career::where('department_id', 1)->get(['id', 'name']);

        return view('layouts.pages.bedel-exactas.schedule.create', compact('periodos', 'aulas', 'tipoClases', 'carreras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arregloDias = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
        //Convierto a entero el valor de dia que viene desde el form
        $diainicial = (int)$request->day;
        //Asigno la variable periodo al periodo seleccionado en el form (1C, 2C, Anual)
        $periodo = Period::find($request->period_id);
        //Guardo el fin del periodo academico para tenerlo de referencia
        $q2 = $periodo->end->format('Y-m-d');
        //Verifico si desde el form me viene un lunes u otro dia
        if ($diainicial > 0) {
            $q1 = $periodo->start->addDays($diainicial)->format('Y-m-d');
        } else {
            $q1 = $periodo->start->format('Y-m-d');
        }
        //Junto las fechas tratadas arriba junto a las horas que vienen desde el form
        $fechaini = Carbon::create("$q1" . " $request->start1");
        $fechafin = Carbon::create("$q2" . " $request->end1");
        $fechafin2 = Carbon::create("$q1" . " $request->end1");

        //Creo los horarios que se guardan en el campo start en schedules
        $periodoinicial = CarbonPeriod::create($fechaini, '7 days', $fechafin);
        $periodoinicial->toArray();
        //Creo los horarios que se guardan en el campo end en schedules
        $periodofinal = CarbonPeriod::create($fechafin2, '7 days', $fechafin);
        $b = $periodofinal->toArray();
        //Guardar todo y salvar
        $academic = AcademicSchedule::create([
            'course_id' => $request->course_id,
            'classroom_id' => $request->classroom_id,
            'class_type_id' => $request->class_type_id,
            'day' => $arregloDias[$diainicial],
            'start' => $request->start1,
            'end' => $request->end1,
            'user_id' => Auth::user()->id
        ]);

        foreach ($periodoinicial as $key => $a) {
            $c = Schedule::create([
                'period_id' => $request->period_id,
                'start' => $a,
                'end' => $b[$key],
                'color' => $request->color
            ]);

            $c->academicSchedule()->attach($academic);
        };

        return redirect()->route('exactas.schedule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('layouts.pages.bedel-exactas.schedule.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
