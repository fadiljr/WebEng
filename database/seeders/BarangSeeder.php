<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            'nama' => "Terigu",
            'harga' => 20000,
            'tipe' => 1,
            'keterangan' => "Barang dasar mie"
        ]);

        DB::table('barang')->insert([
            'nama' => "MSG",
            'harga' => 15000,
            'tipe' => 1,
            'keterangan' => "Barang dasar mie"
        ]);

        DB::table('barang')->insert([
            'nama' => "Bawang Merah",
            'harga' => 5000,
            'tipe' => 1,
            'keterangan' => "Barang dasar mie"
        ]);

        DB::table('barang')->insert([
            'nama' => "Bawang Putih",
            'harga' => 5000,
            'tipe' => 1,
            'keterangan' => "Barang dasar mie"
        ]);

        DB::table('barang')->insert([
            'nama' => "Mie Goreng",
            'harga' => 5000,
            'tipe' => 2,
            'keterangan' => "Mie goreng instant"
        ]);

        DB::table('barang')->insert([
            'nama' => "Mie Kuah",
            'harga' => 5000,
            'tipe' => 2,
            'keterangan' => "Mie kuah instant"
        ]);

        DB::table('barang')->insert([
            'nama' => "Mie premium",
            'harga' => 20000,
            'tipe' => 2,
            'keterangan' => "Mie goreng premium instant"
        ]);

        DB::table('barang')->insert([
            'nama' => "Mia Rasa Ayam Bawang",
            'harga' => 5000,
            'tipe' => 2,
            'keterangan' => "Mie kuah rasa ayam bawang instant"
        ]);
    }
}
