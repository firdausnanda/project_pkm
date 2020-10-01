<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
          'user_id' => 1,
          'major_id' => 1,
          'nim' => '123123',
          'nama' => 'Student',
        ]);
    }
}
