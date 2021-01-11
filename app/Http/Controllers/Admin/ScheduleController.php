<?php

namespace App\Http\Controllers\Admin;

use App\AcademicSchedule;
use App\Classroom;
use App\ClassType;
use App\Course;
use App\Http\Controllers\Controller;
use App\Period;
use App\Schedule;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
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
        
        $periodos = Period::all();
        $materias = Course::where('career_id', 5)->get();
        $aulas = Classroom::all();
        $tipoClases = ClassType::all();

        return view('layouts.pages.admin.schedule.index', compact('periodos', 'materias', 'aulas', 'tipoClases'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //$fecha  = Carbon::createFromFormat('Y-m-d H' , $inicio);
       // $tz = 'Europe/Madrid';
       $diainicial = (int)$request->day;
       
       $q = Period::find($request->period_id);
       $q2 = $q->end->format('Y-m-d');
       if ($diainicial > 0) {
         $q1 = $q->start->addDays($diainicial)->format('Y-m-d');
         
       }else{
            $q1 = $q->start->format('Y-m-d');
       }

       //esta es bb
        $fechaini = Carbon::create("$q1" . " $request->start1");
       // dd($fechaini);
        //$fechaini->toDateTimeString();
       // dd($fechaini);
       $fechafin = Carbon::create("$q2" . " $request->end1");
       $fechafin2 = Carbon::create("$q1" . " $request->end1");

        //$fechafin->toDateTimeString();
        $periodoinicial = CarbonPeriod::create($fechaini,'7 days' ,$fechafin);
        $periodoinicial->toArray();
        //return $periodoinicial;
       $periodofinal = CarbonPeriod::create($fechafin2,'7 days' ,$fechafin);
       $b= $periodofinal->toArray();

       $academic = AcademicSchedule::create([
        'course_id' => $request->course_id,
        'classroom_id' => $request->classroom_id,
        'class_type_id' => $request->class_type_id,
        'day' => $arregloDias[$diainicial],
        'start' => $request->start1,
        'end' => $request->end1
       ]);

       foreach($periodoinicial as $key => $a){
           $c = Schedule::create([
               'period_id' => $request->period_id,
               'start' => $a,
               'end' => $b[$key],
               'color' => $request->color
           ]);

           $c->academicSchedule()->attach($academic);

       };
       
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $academico = AcademicSchedule::find($id);
        $a = $academico->schedule;

        return view('layouts.pages.admin.schedule.show' , compact('a'));
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

    public function exactas(){

        $datos = DB::table('academic_schedules')
                    ->join('courses','course_id', '=', 'courses.id')
                    ->join('careers','career_id', '=', 'careers.id')
                    ->join('departments','department_id', '=', 'departments.id')
                    ->select('courses.title', 'careers.name' ,'academic_schedules.*')
                    ->where('departments.id', 1)
                    ->latest()
                    ->limit(4)
                    ->get();

        //$ttl = now()->addMinutes(10);
        $horarios = Cache::tags('horarios')->rememberForever('horarios.all', function () {
            return  DB::table('academic_schedules')
            ->join('courses','course_id', '=', 'courses.id')
            ->join('careers','career_id', '=', 'careers.id')
            ->join('departments','department_id', '=', 'departments.id')
            ->join('classrooms', 'classroom_id', '=', 'classrooms.id')
            ->join('class_types', 'class_type_id', '=', 'class_types.id')
            ->select('courses.title', 'classrooms.name as aula' ,'class_types.name as tipo_clase', 'careers.name', 'academic_schedules.day', 'academic_schedules.start','academic_schedules.end', 'academic_schedules.status' , 'academic_schedules.id')
            ->where('departments.id', 1)
            ->get();
        });
                    
        return view('layouts.pages.admin.schedule.index-exactas', compact('datos', 'horarios'));
    }
}
