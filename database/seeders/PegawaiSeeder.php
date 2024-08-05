<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'nama' => 'Akbar Setiawan',
            'nip' => '123456789',
            'jenis_kelamin' => 'L',
            'email' => 'akbarcindo@gmail.com',
            'password' => bcrypt('12345'),
            'divisi_id' => 1,
            'bidang_id' => 1,
        ]);
        Pegawai::create([
            'nama' => 'Bayu Gaming',
            'nip' => '987654321',
            'jenis_kelamin' => 'L',
            'email' => 'bayu@gmail.com',
            'password' => bcrypt('12345'),
            'divisi_id' => 2,
            'bidang_id' => 2,
        ]);
    }
}
