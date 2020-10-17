<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;

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
          "name" => "Student",
          "email" => "student@simpkm.com",
          "role" => "student",
          "password" => "123456"
        ],
        [
          "name" => 'Teacher',
          "email" => "teacher@simpkm.com",
          "role" => "teacher",
          "password" => "123456"
        ],
        [
          "name" => "Admin",
          "email" => "admin@simpkm.com",
          "role" => "admin",
          "password" => "123456"
        ],
        [
          "name" => "Aan Admin",
          "email" => "firdausnanda46@gmail.com",
          "role" => "admin",
          "password" => "123456"
        ],
        [
          "name" => "Aan Student",
          "email" => "firdausnanda45@gmail.com",
          "role" => "student",
          "password" => "123456"
        ],
      );

      foreach ($users as $user) {
        User::create([
          'email' => $user['email'],
          'email_verified_at' => Carbon::now(),
          'role' => $user['role'],
          'password' => Hash::make($user['password']),
          ]
        );
      }

    }
}
