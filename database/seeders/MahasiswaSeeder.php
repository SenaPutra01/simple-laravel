<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'nama' => 'Sena Putra',
            'matakuliah' => 'Menonton Hentai'
        ]);
    }
}
