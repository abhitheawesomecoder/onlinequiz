<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_classes', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->string('student_name');
            $table->string('school_name');
            $table->string('mobile_num');
            $table->string('adhaar_card_num');
            $table->string('student_email');
            $table->string('class_teacher');
            $table->string('division');
            $table->string('fav_subject');
            $table->string('schooler_ship');
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
        Schema::dropIfExists('student_classes');
    }
}
