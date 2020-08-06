<?php

use Illuminate\Database\Seeder;
use App\Building;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $edificio = new Building;
        $edificio->name = "modulo 1";
        $edificio->display_name = "Modulo 1";
        $edificio->save();

        $edificio = new Building;
        $edificio->name = "modulo 2";
        $edificio->display_name = "Modulo 2";
        $edificio->save();

        $edificio = new Building;
        $edificio->name = "modulo 3";
        $edificio->display_name = "Modulo 3";
        $edificio->save();

        $edificio = new Building;
        $edificio->name = "modulo 4";
        $edificio->display_name = "Modulo 4";
        $edificio->save();

        $edificio = new Building;
        $edificio->name = "modulo 5";
        $edificio->display_name = "Modulo 5";
        $edificio->save();

        $edificio = new Building;
        $edificio->name = "cipra";
        $edificio->display_name = "CIPRA";
        $edificio->save();

        $edificio = new Building;
        $edificio->name = "ceniit";
        $edificio->display_name = "CENIIT";
        $edificio->save();
    }
}
