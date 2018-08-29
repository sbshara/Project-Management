<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'body' => 'ZLT4Kiy4ws',
                'category_id' => 1,
                'created_at' => NULL,
                'id' => 1,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
        ));
        
        
    }
}