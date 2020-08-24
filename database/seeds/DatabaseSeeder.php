<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
         DB::table('users')->insert([
               'nim'=>'User',
               'email'=>'user@itsolutionstuff.com',
                'role'=>'Mahasiswa',
               'password'=> bcrypt('123456'),
            ]);
    }
}
