<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
        public function run(): void
    {
        // Panggil BarangSeeder yang sudah kita modifikasi sebelumnya
        $this->call([
            BarangSeeder::class,
        ]);
    }

    
        // User::factory(10)->create();
        
        
            
            
        
    
}
