<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
$id = 1;

for ($p=1; $p<=10; $p++) {
    for ($i=1; $i<=3; $i++) {
        $data[] = [
            'detail_id'=>$id,
            'penjualan_id'=>$p,
            'barang_id'=>rand(1,15),
            'harga'=>rand(20000,40000),
            'jumlah'=>rand(1,5),
        ];
        $id++;
    }
}

DB::table('t_penjualan_detail')->insert($data);
    }
}
