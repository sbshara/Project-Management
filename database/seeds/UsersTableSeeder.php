<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2018-08-26 10:54:55',
                'email' => 'shb182@hotmail.com',
                'id' => 1,
                'name' => 'Shiblie Bshara',
                'password' => '$2y$10$vO6fGhI2ilxCwO7hhcNx.eM6kQGVLyKgWxzrnJeyu60yI8/4m5g7C',
                'remember_token' => 'jFRcrfWw2RCHAOnBv7nktPNce2b5WWOuRlEmuKZcvOWhfUu4zeB8Ze8QCNUb',
                'role_id' => 1,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}