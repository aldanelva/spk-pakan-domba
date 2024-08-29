<?php

namespace Database\Seeders;

use App\Models\Pakan;
use Illuminate\Database\Seeder;

class PakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pakans = [
            [
                'kode_alternatif' => 'A1',
                'jenis_pakan' => 'Daun Jagung',
                'serat' => 27.83,
                'lemak' => 4.85,
                'abu' => 9.29,
                'protein' => 13.73,
                'harga' => "Sangat Murah",
                'jarak' => "Jauh",
                'ketersediaan' => "Cukup",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_alternatif' => 'A2',
                'jenis_pakan' => 'Bekatul',
                'serat' => 16.3,
                'lemak' => 14.4,
                'abu' => 12.4,
                'protein' => 10,
                'harga' => "Cukup",
                'jarak' => "Dekat",
                'ketersediaan' => "Sangat Banyak",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_alternatif' => 'A3',
                'jenis_pakan' => 'Singkong',
                'serat' => 3.7,
                'lemak' => 0.8,
                'abu' => 2.8,
                'protein' => 2.6,
                'harga' => "Cukup",
                'jarak' => "Sangat Dekat",
                'ketersediaan' => "Cukup",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_alternatif' => 'A4',
                'jenis_pakan' => 'Daun Singkong',
                'serat' => 17.7,
                'lemak' => 6.8,
                'abu' => 7.4,
                'protein' => 24.9,
                'harga' => "Murah",
                'jarak' => "Sangat Dekat",
                'ketersediaan' => "Cukup",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_alternatif' => 'A5',
                'jenis_pakan' => 'Batang Singkong',
                'serat' => 28.8,
                'lemak' => 6.2,
                'abu' => 0.51,
                'protein' => 16.6,
                'harga' => "Sangat Murah",
                'jarak' => "Sangat Dekat",
                'ketersediaan' => "Cukup",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_alternatif' => 'A6',
                'jenis_pakan' => 'Jerami Kedelai',
                'serat' => 24.8,
                'lemak' => 5.3,
                'abu' => 8.1,
                'protein' => 14.3,
                'harga' => "Sangat Murah",
                'jarak' => "Jauh",
                'ketersediaan' => "Sedikit",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_alternatif' => 'A7',
                'jenis_pakan' => 'Tongkol Jagung',
                'serat' => 24.5,
                'lemak' => 0.8,
                'abu' => 1.6,
                'protein' => 2.5,
                'harga' => "Murah",
                'jarak' => "Jauh",
                'ketersediaan' => "Cukup",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_alternatif' => 'A8',
                'jenis_pakan' => 'Odot',
                'serat' => 34.94,
                'lemak' => 2.57,
                'abu' => 14.45,
                'protein' => 11.68,
                'harga' => "Mahal",
                'jarak' => "Sangat Dekat",
                'ketersediaan' => "Banyak",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_alternatif' => 'A9',
                'jenis_pakan' => 'Tetes Tebu',
                'serat' => 3.1,
                'lemak' => 0.09,
                'abu' => 11.9,
                'protein' => 3.1,
                'harga' => "Mahal",
                'jarak' => "Cukup",
                'ketersediaan' => "Cukup",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_alternatif' => 'A10',
                'jenis_pakan' => 'Ampas Tahu',
                'serat' => 22.2,
                'lemak' => 9.9,
                'abu' => 5.1,
                'protein' => 30.3,
                'harga' => "Cukup",
                'jarak' => "Cukup",
                'ketersediaan' => "Sedikit",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_alternatif' => 'A11',
                'jenis_pakan' => 'Campuran A',
                'serat' => 82.2,
                'lemak' => 16.4,
                'abu' => 17.6,
                'protein' => 17.2,
                'harga' => "Mahal",
                'jarak' => "Cukup",
                'ketersediaan' => "Banyak",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_alternatif' => 'A12',
                'jenis_pakan' => 'Campuran B',
                'serat' => 23.2,
                'lemak' => 2,
                'abu' => 10,
                'protein' => 32.2,
                'harga' => "Sangat Mahal",
                'jarak' => "Dekat",
                'ketersediaan' => "Cukup",
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($pakans as $pakan) {
            Pakan::create($pakan);
        }
    }
}
