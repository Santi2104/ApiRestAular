<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')
            ->constrained()
            ->onDelete('cascade')
            ->OnUpdate('cascade');
            $table->string('code')->unique();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('period')->nullable();
            $table->string('year')->nullable()->comment('Indica el año de la materia en plan de estudio');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
