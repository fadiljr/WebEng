<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gudang')->insert([
            'nama' => "Perkasa",
            'alamat' => 'Kebangsaan Timur A10 no 21-27'
        ]);
        DB::table('gudang')->insert([
            'nama' => "Jaya",
            'alamat' => 'Keturunan Orang J45 no 209'
        ]);
        DB::table('gudang')->insert([
            'nama' => "Muat",
            'alamat' => 'Luar Kaum D1 no 33'
        ]);
    }
}
