<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $majors = [
          ['degree' => 'D3', 'name' => 'Keperawatan'],
          ['degree' => 'D3', 'name' => 'Kebidanan'],
          ['degree' => 'D3', 'name' => 'Akupunktur'],
          ['degree' => 'D3', 'name' => 'Farmasi'],
          ['degree' => 'D3', 'name' => 'Rekam Medis dan Informasi Kesehatan'],
          ['degree' => 'D4', 'name' => 'Kebidanan'],
          ['degree' => 'Profesi', 'name' => 'Bidan'],
          ['degree' => 'S1', 'name' => 'Informatika'],
          ['degree' => 'S1', 'name' => 'Farmasi'],
          ['degree' => 'S1', 'name' => 'Fisioterapi']
        ];
        
        DB::table('majors')->insert($majors);
    }
}
