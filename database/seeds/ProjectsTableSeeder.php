<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'active' => 1,
                'company_id' => 1,
                'created_at' => NULL,
                'description' => 'This is a sample project that gets created at the time of application setup',
                'id' => 1,
                'name' => 'Shiblie Project 1',
                'progress' => 30,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
        ));
        
        
    }
}