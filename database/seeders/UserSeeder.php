<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'testadmin@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('testadmin'),
        ]);
        $user->assignRole('admin');
    }

}
