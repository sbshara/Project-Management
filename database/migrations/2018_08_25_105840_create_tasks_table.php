<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateTasksTable extends Migration
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
			$table->text('name');
			$table->longText('description')->nullable();
			$table->unsignedInteger('duration')->nullable();
			$table->unsignedInteger('project_id');
			$table->unsignedInteger('user_id');
			$table->unsignedInteger('status_id');
            $table->timestamps();
        });
		
		DB::table('tasks')->insert([
		            'name' 			=> str_random(10),
		            'description' 	=> str_random(22),
					'duration'		=> 10,
					'project_id'	=> 1,
					'user_id'		=> 1,
					'status_id'		=> 1
		]);
					
		Schema::table('tasks', function (Blueprint $table) {
			$table->foreign('project_id')->references('id')->on('projects')->change();
			$table->foreign('user_id')->references('id')->on('users')->change();
			$table->foreign('status_id')->references('id')->on('status')->change();
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
