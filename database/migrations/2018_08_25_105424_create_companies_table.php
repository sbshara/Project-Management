<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->longText('description')->nullable();
			$table->string('logo')->nullable();
			$table->unsignedInteger('user_id');
            $table->timestamps();
        });
		
		DB::table('companies')->insert([
		            'name' => 'Shibie Company',
		            'description' => 'Initialized Company Created by the application on setup',
					'user_id'	=> 1
		]);
		Schema::table('companies', function (Blueprint $table){
			$table->foreign('user_id')->references('id')->on('users')->change();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
