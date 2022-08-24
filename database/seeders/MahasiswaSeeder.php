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
        $mahasiswa = [
            [
                'nama' => 'Sena Putra',
                'matkul' => 'Pemrograman Web Lanjutan'
            ],
            [
                'nama' => 'John Christoper',
                'matkul' => 'Pemrograman Web Lanjutan'
            ],
            [
                'nama' => 'Andi Sujiwo',
                'matkul' => 'Pemrograman Web Lanjutan'
            ],
            [
                'nama' => 'Salam Alaik',
                'matkul' => 'Pemrograman Web Lanjutan'
            ],
            [
                'nama' => 'Salman Alfarizi',
                'matkul' => 'Pemrograman Web Lanjutan'
            ]
        ];

        \DB::table('mahasiswa')->insert($mahasiswa);
    }
}
