<?php

namespace Database\Seeders;

use App\Models\Penerbit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penerbit = ['None', 'Elex Media Komputindo', 'Kompas Penerbit Buku', 'Gramedia Pustaka Utama'];

        foreach ($penerbit as $value) {
            Penerbit::create([
                'nama' => $value,
                'slug' => Str::slug($value)
            ]);
        }
    }
}
