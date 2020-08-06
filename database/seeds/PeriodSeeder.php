<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Period;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $horaini = Carbon::createMidnightDate(2020, 3, 9);
        $horafin = Carbon::createMidnightDate(2020, 6, 19);

        $periodo = new Period;
        $periodo->name = '1C';
        $periodo->display_name = 'Primer Cuatrimestre';
        $periodo->start = $horaini;
        $periodo->end = $horafin;
        $periodo->save();

        $horaini = Carbon::createMidnightDate(2020, 8, 3);
        $horafin = Carbon::createMidnightDate(2020, 11, 14);

        $periodo = new Period;
        $periodo->name = '2C';
        $periodo->display_name = 'Segundo Cuatrimestre';
        $periodo->start = $horaini;
        $periodo->end = $horafin;
        $periodo->save();
    }
}
