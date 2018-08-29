<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'description' => 'WKFR4ibqbmOyq57n6eo3lV',
                'id' => 1,
                'name' => 'gmFqmJkPoz',
                'updated_at' => NULL,
                'user_id' => 1,
            ),
        ));
        
        
    }
}