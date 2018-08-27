<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
			$table->longText('body')->notNull();
			$table->unsignedInteger('user_id');
			$table->string('url', 255)->nullable();
			$table->string('commentable_type')->notNull();
			$table->unsignedInteger('commentable_id')->notNull();
            $table->timestamps();
			
        });
		
		DB::table('comments')->insert([
		            'body' 				=> str_random(10),
		            'user_id' 			=> 1,
					'commentable_type' 	=> 'posts',
					'commentable_id' 	=> 1, 
		]);
		
		Schema::table('comments', function (Blueprint $table){
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
        Schema::dropIfExists('comments');
    }
}
