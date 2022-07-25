<?php

namespace Database\Seeders;

use App\Models\Rak;
use Illuminate\Database\Seeder;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // rak kategori none
        Rak::create([
            'rak' => 0,
            'baris' => 0,
            'kategori_id' => 1,
            'slug' => 0
        ]);

        // rak kategori art, music & photography
        for ($i = 1; $i <= 4; $i++) {
            Rak::create([
                'rak' => 1,
                'baris' => $i,
                'kategori_id' => 2,
                'slug' => 1 . '-' . $i
            ]);
        }

        // rak kategori biographies & memoirs
        for ($i = 1; $i <= 4; $i++) {
            Rak::create([
                'rak' => 2,
                'baris' => $i,
                'kategori_id' => 3,
                'slug' => 2 . '-' . $i
            ]);
        }

        // rak kategori comics & graphic novels
        for ($i = 1; $i <= 4; $i++) {
            Rak::create([
                'rak' => 3,
                'baris' => $i,
                'kategori_id' => 4,
                'slug' => 3 . '-' . $i
            ]);
        }

        // rak kategori computers & technology
        for ($i = 1; $i <= 4; $i++) {
            Rak::create([
                'rak' => 4,
                'baris' => $i,
                'kategori_id' => 5,
                'slug' => 4 . '-' . $i
            ]);
        }
    }
}
