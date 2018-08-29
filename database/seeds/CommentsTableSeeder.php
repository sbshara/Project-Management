<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'body' => '2BTuSX9teB',
                'commentable_id' => 1,
                'commentable_type' => 'posts',
                'created_at' => NULL,
                'id' => 1,
                'updated_at' => NULL,
                'url' => NULL,
                'user_id' => 1,
            ),
        ));
        
        
    }
}