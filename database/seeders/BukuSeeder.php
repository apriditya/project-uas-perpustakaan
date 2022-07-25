<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'judul' => 'Street Photography dengan Ponsel',
            'slug' => Str::slug('Street Photography dengan Ponsel'),
            'sampul' => 'buku/art-1.jpg',
            'penulis' => 'Paul Zacharia',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Instagram untuk Fotografi Digital dan Bisnis Kreatif',
            'slug' => Str::slug('Instagram untuk Fotografi Digital dan Bisnis Kreatif'),
            'sampul' => 'buku/art-2.jpg',
            'penulis' => 'Jubilee Enterprise',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Food Photography Made Easy',
            'slug' => Str::slug('Food Photography Made Easy'),
            'sampul' => 'buku/art-3.jpg',
            'penulis' => 'Empat Rana',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Chairul Tanjung-Si Anak Singkong',
            'slug' => Str::slug('Chairul Tanjung-Si Anak Singkong'),
            'sampul' => 'buku/biography-1.jpg',
            'penulis' => 'Tjahja Gunawan Diredja',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 6,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Andy Noya - Kisah Hidupku',
            'slug' => Str::slug('Andy Noya - Kisah Hidupku'),
            'sampul' => 'buku/biography-2.jpg',
            'penulis' => 'Robert Adhi Ksp',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Passion of My Life Ciputra (SC)',
            'slug' => Str::slug('Passion of My Life Ciputra (SC)'),
            'sampul' => 'buku/biography-3.jpg',
            'penulis' => 'Alberthiene Endah',
            'penerbit_id' => 4,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Smurf - Wisata Para Smurf',
            'slug' => Str::slug('Smurf - Wisata Para Smurf'),
            'sampul' => 'buku/comic-1.jpg',
            'penulis' => 'Peyo',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 10,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Si Juki Seri Jalan-Jalan: Petualangan di Korea',
            'slug' => Str::slug('Si Juki Seri Jalan-Jalan: Petualangan di Korea'),
            'sampul' => 'buku/comic-2.jpg',
            'penulis' => 'Faza Meonk',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 11,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Bang Lambe Vol.1: Orderan Pertama',
            'slug' => Str::slug('Bang Lambe Vol.1: Orderan Pertama'),
            'sampul' => 'buku/comic-3.jpg',
            'penulis' => 'Alan & Din',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Semua Bisa Menjadi Programmer JavaScript & Node.js',
            'slug' => Str::slug('Semua Bisa Menjadi Programmer JavaScript & Node.js'),
            'sampul' => 'buku/computers-1.jpg',
            'penulis' => 'Ir. Yuniar Supardi',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 14,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'Mudah Menguasai Framework Laravel',
            'slug' => Str::slug('Mudah Menguasai Framework Laravel'),
            'sampul' => 'buku/computers-2.jpg',
            'penulis' => 'Yudho Yudhanto dan Helmi Adi Prasetyo',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 15,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => '5 Pemrograman Dasar Desain Website',
            'slug' => Str::slug('5 Pemrograman Dasar Desain Website'),
            'sampul' => 'buku/computers-3.jpg',
            'penulis' => 'Jubilee Enterprise',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 16,
            'stok' => 10
        ]);
    }
}
