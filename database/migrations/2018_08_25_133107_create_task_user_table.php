<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTaskUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_user', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('task_id');
			$table->unsignedInteger('user_id');
            $table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('task_id')->references('id')->on('tasks');
        });
		
		DB::table('task_user')->insert([
			'task_id' 	=> 1,
			'user_id'		=> 1
		]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_user');
    }
}
