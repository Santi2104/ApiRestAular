<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicScheduleUnionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_schedule_union', function (Blueprint $table) {
            $table->id();
            $table->foreignId('academic_schedule_id')
            ->constrained()
            ->onDelete('cascade')
            ->OnUpdate('cascade');
            $table->foreignId('schedule_id')
            ->constrained()
            ->onDelete('cascade')
            ->OnUpdate('cascade');
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
        Schema::dropIfExists('academic_schedule_union');
    }
}
