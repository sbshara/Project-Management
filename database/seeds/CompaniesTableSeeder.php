<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('companies')->delete();
        
        \DB::table('companies')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'description' => 'Initialized Company Created by the application on setup',
                'id' => 1,
                'logo' => NULL,
                'name' => 'Shibie Company',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'description' => 'this is a second test company',
                'id' => 2,
                'logo' => NULL,
                'name' => 'Company test2',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
        ));
        
        
    }
}