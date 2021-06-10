<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Coor_id');
            $table->foreignId('programme_id');
            $table->foreignId('semester_id');
            $table->foreignId('group_id');
            $table->foreignId('course_id');
            $table->string('lecture_hour');
            $table->string('tutorial_hour');
            $table->string('lab_hour');
            $table->string('student_number')->nullable();
            $table->string('lecturer_name')->nullable();
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
        Schema::dropIfExists('my_requests');
    }
}
