<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('t_category');
            $table->integer('t_assigned_user');
            $table->integer('t_assigned_user_dept');
            $table->string('t_priority');
            $table->string('t_description');
            $table->string('t_creator');
            $table->string('t_creation_date');
            $table->string('t_due_date');
            $table->string('t_status');
            $table->string('t_comments')->nullable($value=true);
            $table->string('t_user_group');
            $table->string('t_visibility');
            $table->string('t_attachment')->nullable($value=true);
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
        Schema::dropIfExists('tasks');
    }
}
