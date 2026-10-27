<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $totalRecords = 100000;
        $chunkSize = 5000; // Memproses 5.000 data per satu kali insert agar cepat

        for ($i = 0; $i < $totalRecords; $i += $chunkSize) {
            $barangs = [];
            
            // Loop untuk membuat 5.000 data dummy per batch di memory
            for ($j = 0; $j < $chunkSize; $j++) {
                $barangs[] = [
                    'nama_barang' => fake()->word() . ' ' . fake()->company(),
                    'harga'       => fake()->numberBetween(10000, 5000000), // Harga acak antara 10rb - 5jt
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ];
            }

            // Langsung bulk insert ke database dalam satu query tunggal
            \Illuminate\Support\Facades\DB::table('barangs')->insert($barangs);
        }
    }

    
    

    
    
    
}


    