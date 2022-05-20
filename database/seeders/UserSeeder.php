<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'Admin',
            'email' => 'mahamat@gmail.com',
            'password' => 'password',
            'active'=> 1,
            'etablissement_id' => 1,
        ]);
        $user1 = User::create([
            'name' => 'Admin',
            'email' => 'koue@ad.com',
            'password' => 'password',
            'active'=> 1,
            'etablissement_id' => 2,
        ]);



        $user->assignRole('administrator');
        $user1->assignRole('Manager');
       

    }
}
