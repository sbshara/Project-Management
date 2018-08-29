<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('status')->delete();
        
        \DB::table('status')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'description' => '1Ya9LcHAXangGbBabsU8Is',
                'id' => 1,
                'name' => '3lXKS4qqmr',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}