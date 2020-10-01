<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
          'id' => 2,
          'major_id' => 1,
          'nama' => 'Teacher',
          'jk' => 'Laki-laki',
          'nidn' => '1234567',
          'tempat_lahir' => 'Malang',
          'tgl_lahir' => '2020-01-01',
        ]);
    }
}
