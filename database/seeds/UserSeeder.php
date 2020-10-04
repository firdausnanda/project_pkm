<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = array(
        [
          "email" => "student@simpkm.com",
          "role" => "student",
          "password" => "123456"
        ],
        [
          "email" => "teacher@simpkm.com",
          "role" => "teacher",
          "password" => "123456"
        ],
        [
          "email" => "admin@simpkm.com",
          "role" => "admin",
          "password" => "123456"
        ],
        [
          "email" => "firdausnanda46@gmail.com",
          "role" => "admin",
          "password" => "123456"
        ],
        [
          "email" => "firdausnanda45@gmail.com",
          "role" => "student",
          "password" => "123456"
        ],
      );

      foreach ($users as $user) {
        User::create([
          'email' => $user['email'],
          'role' => $user['role'],
          'password' => Hash::make($user['password']),
          ]
        );
      }

    }
}
