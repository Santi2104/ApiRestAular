<?php

use Illuminate\Database\Seeder;
use App\ClassRoomType;

class ClassRoomTypeSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new ClassRoomType;
        $c->name = 'Aula';
        $c->save();

        $c = new ClassRoomType;
        $c->name = 'Anfiteatro';
        $c->save();

        $c = new ClassRoomType;
        $c->name = 'Laboratorio';
        $c->save();
    }
}
