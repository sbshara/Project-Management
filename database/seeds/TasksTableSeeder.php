<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tasks')->delete();
        
        \DB::table('tasks')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'description' => 'P12QFYd9g9cMJ0rqBZV9za',
                'duration' => 10,
                'id' => 1,
                'name' => 'mMuSfjvYOE',
                'project_id' => 1,
                'status_id' => 1,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
        ));
        
        
    }
}