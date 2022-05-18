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
        $user2 = User::create([
            'name' => 'MK',
            'email' => 'MK@admin.com',
            'password' => 'password',
            'active'=> 1
        ]);
        $user3 = User::create([
            'name' => 'nelson',
            'email' => 'nelson@admin.com',
            'password' => 'password',
            'active'=> 1
        ]);
       
        $user->assignRole('administrator');
        $user1->assignRole('Manager');
        $user2->assignRole('Manager');
        $user3->assignRole('Manager');
        $user4->assignRole('Manager');
        $user4->assignRole('Enseignant');

    }
}
