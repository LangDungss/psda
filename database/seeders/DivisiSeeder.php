<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Divisi::create([
            'nama_divisi' => 'Kepala Dinas',
            'bidang_id' => 1
        ]);
        Divisi::create([
            'nama_divisi' => 'Sekretaris',
            'bidang_id' => 2
        ]);
    }
}
