<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin Library',
            'email' => 'admin@library.test',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now()
        ]);

        $user->assignRole('admin');
    }
}
