<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('class_name');
            $table->string('school_name');
            $table->string('adhaar_card_num');
            $table->string('class_teacher');
            $table->string('division');
            $table->string('fav_subject');
            $table->string('schooler_ship');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->string('class_name');
            $table->string('school_name');
            $table->string('adhaar_card_num')->nullable();
            $table->string('class_teacher');
            $table->string('division');
            $table->string('fav_subject');
            $table->string('schooler_ship');
        });
    }
}
