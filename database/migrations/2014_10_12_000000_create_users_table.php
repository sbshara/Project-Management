<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('role_id')->default(1);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
		DB::table('users')->insert([
		            'name' => 'Shiblie Bshara',
		            'email' => 'shb182@hotmail.com',
		            'password' => '$2y$10$vO6fGhI2ilxCwO7hhcNx.eM6kQGVLyKgWxzrnJeyu60yI8/4m5g7C',
					'created_at' => now()
		]);
		Schema::table('users', function (Blueprint $table){
			$table->foreign('role_id')->references('id')->on('roles');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
