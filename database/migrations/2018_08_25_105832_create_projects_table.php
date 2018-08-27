<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
			$table->text('name');
			$table->longText('description')->nullable();
			$table->boolean('active')->default(true);
			$table->integer('progress')->min(0)->max(100);
			$table->unsignedInteger('company_id');
			$table->unsignedInteger('user_id');
            $table->timestamps();
        });
		
		DB::table('projects')->insert([
		            'name' 			=> str_random(10),
		            'description' 	=> str_random(22),
					'active'		=> 1,
					'progress' 		=> 1,
					'company_id'	=> 1,
					'user_id'		=> 1
		]);
					
		Schema::table('projects', function(Blueprint $table){
			$table->foreign('company_id')->references('id')->on('companies');
			$table->foreign('user_id')->references('id')->on('users');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
