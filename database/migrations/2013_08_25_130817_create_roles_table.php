<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->longText('description')->nullable();
            $table->timestamps();
        });
		
		DB::table('roles')->insert([
			'id'			 	=> 9, 
			'name' 				=> 'Super Admin',
			'description' 		=> 'Controls the full application',
		]);
		DB::table('roles')->insert([
			'id'			 	=> 1, 
			'name' 				=> 'New User',
			'description' 		=> 'Registered users have no access rights until given to them by the admin',
		]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
