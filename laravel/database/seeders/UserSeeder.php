<?php

namespace Database\Seeders;

use App\Models\User;
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
        $manager = User::create([
            'name'      => 'manager',
            'email'     =>'manager@test.com',
            'password'  => bcrypt('password')
        ]);
        $manager->assignRole('manager');

        $supervisor = User::create([
            'name'      => 'supervisor',
            'email'     =>'supervisor@test.com',
            'password'  => bcrypt('password')
        ]);
        $supervisor->assignRole('supervisor');

        $staff = User::create([
            'name'      => 'staff',
            'email'     =>'staff@test.com',
            'password'  => bcrypt('password')
        ]);
        $staff->assignRole('staff');
    }
}
