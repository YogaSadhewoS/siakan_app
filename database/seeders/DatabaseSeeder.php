<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'yoga sadhewo',
            'email' => 'yogaganteng@gmail.com',
            'password' => bcrypt('Y0gag@nteng15'),
        ]);

        Tipe::create([
            'nama' => 'Site Plan'
        ]);

        Tipe::create([
            'nama' => 'Blueprint'
        ]);

        Tipe::create([
            'nama' => 'Denah'
        ]);

        Tipe::create([
            'nama' => 'Sketsa Desain'
        ]);

        Tipe::create([
            'nama' => 'Pamflet/leaflet'
        ]);

        Tipe::create([
            'nama' => 'Drawing'
        ]);

        Tipe::create([
            'nama' => 'Gambar Rekayasa'
        ]);

        Tipe::create([
            'nama' => 'Peta Dasar'
        ]);
        
        Tipe::create([
            'nama' => 'Peta Tematik'
        ]);

        Tipe::create([
            'nama' => 'Peta Topografi'
        ]);
    }


}
