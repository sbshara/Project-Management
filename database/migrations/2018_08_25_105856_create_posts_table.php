<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
			$table->longText('body');
			$table->unsignedInteger('user_id');
			$table->unsignedInteger('category_id');
            $table->timestamps();
			
        });
		
		DB::table('posts')->insert([
		            'body' 			=> str_random(10),
		            'user_id' 		=> 1,
					'category_id'	=> 1
		]);

		Schema::table('posts', function (Blueprint $table){
			$table->foreign('user_id')->references('id')->on('users')->change();
			$table->foreign('category_id')->references('id')->on('categories')->change();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
