<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@email.com',
                'password' => 'password',
                'role' => 'admin',
            ],
            [
                'name' => 'sergio',
                'email' => 'sergio@gmail.com',
                'password' => '1234',
                'role' => 'standard',
            ]
        ];
        foreach ($users as $user) {
            # code...
            $createUser = User::create([
                "name" => $user["name"],
                "email" => $user["email"],
                "password" => Hash::make($user["password"]),
            ]);

            $createUser->assignRole($user["role"], );
        }
    }
}