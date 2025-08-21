<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run()
    {
        Blog::create([
            'judul' => 'Peresmian Perpustakaan Baru',
            'penulis' => 'Admin Sekolah',
            'isi' => 'Sekolah kami baru saja meresmikan gedung perpustakaan baru dengan koleksi lebih dari 2000 buku.',
            'tanggal' => '2025-08-20'
        ]);

        Blog::create([
            'judul' => 'Juara Lomba Sains Tingkat Kota',
            'penulis' => 'Wakil Kepala Sekolah',
            'isi' => 'Selamat kepada tim sains sekolah yang berhasil meraih juara pertama dalam lomba tingkat kota.',
            'tanggal' => '2025-08-18'
        ]);
    }
}
