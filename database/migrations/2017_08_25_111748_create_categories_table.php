<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
			$table->text('name', 255);
			$table->longText('description');
			$table->unsignedInteger('user_id');
            $table->timestamps();

        });
		
		DB::table('categories')->insert([
		            'name' => str_random(10),
		            'description' => str_random(22),
		            'user_id' => 1
		]);
		Schema::table('categories', function (Blueprint $table) {
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
        Schema::dropIfExists('categories');
    }
}
