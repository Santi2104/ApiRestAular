<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')
            ->constrained()
            ->onDelete('cascade')
            ->OnUpdate('cascade');
            $table->foreignId('classroom_id')
            ->constrained()
            ->onDelete('cascade')
            ->OnUpdate('cascade');
            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade')
            ->OnUpdate('cascade');
            $table->foreignId('class_type_id')
            ->constrained()
            ->onDelete('cascade')
            ->OnUpdate('cascade');
            $table->string('day')->nullable();
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->string('group')->nullable();//En el caso de que el horario tenga alguna comision
            $table->string('description')->nullable();
            $table->string('message')->nullable();//Por si hay algun mensaje especial. Estoy probando
            $table->boolean('status')->default(1);//Si el horario es visible o no
            $table->boolean('duplicate')->default(0);//0 no acepta duplicados - 1 horario acepta duplicado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academic_schedules');
    }
}
