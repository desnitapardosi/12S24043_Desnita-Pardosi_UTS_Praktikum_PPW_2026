<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $kategoris = collect([
            ['KTG-S&C', 'Server & Cloud'],
            ['KTG-IOT', 'Internet of Things'],
            ['KTG-M&D', 'Multimedia & Drone'],
        ])->map(fn ($k) => Kategori::create([
            'kode_kategori' => $k[0],
            'nama_kategori' => $k[1],
        ]));

        // 3 kategori, dan minimal 6 data perangkat laboratorium
        perangkat laboratorium::factory(6)->recycle($categories)->create();
    }
}