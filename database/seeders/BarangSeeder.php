<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $id = 1;
        
        for ($s = 1; $s <= 3; $s++) {
            for ($i = 1; $i <= 5; $i++) {
                $data[] = [
                    'barang_id' => $id,
                    'kategori_id' => rand(1,5),
                    'barang_kode' => 'BRG'.str_pad($id,3,'0',STR_PAD_LEFT),
                    'barang_nama' => 'Barang '.$id,
                    'harga_beli' => rand(10000,20000),
                    'harga_jual' => rand(20000,40000),
                ];
                $id++;
            }
        }
        
        DB::table('m_barang')->insert($data);
    }
}
