<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hargas')->insert([
            [
                'kode' => 'HL01',
                'nama' => 'Paket Biasa',
                'harga' => 303000.00,
                'deskripsi' => "Jarigan Pelan, Hujan Ilang Sinyal",
            ],
            [
                'kode' => 'HL02',
                'nama' => 'Paket Sedang',
                'harga' => 505000.00,
                'deskripsi' => "Jarigan Sedang, Ga akan ilang - ilangan",
            ],
            [
                'kode' => 'HL03',
                'nama' => 'Paket Cepat',
                'harga' => 707000.00,
                'deskripsi' => "Jarigan Cepat, Berani lawan Xspace",
            ]
        ]);
    }
}
