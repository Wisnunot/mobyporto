<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Car::create([
            'title' => '2022 Honda Civic RS',
            'brand' => 'Honda',
            'year' => 2022,
            'price' => 450000000,
            'mileage' => 15000,
            'transmission' => 'Automatic',
            'description' => 'A beautifully maintained Honda Civic RS. Perfect for city driving and highway cruising.',
            'image' => 'https://images.unsplash.com/photo-1606152421802-db97b9c7a11b?q=80&w=800&auto=format&fit=crop',
            'is_consignment' => false,
            'status' => 'available',
        ]);

        \App\Models\Car::create([
            'title' => '2020 Toyota Fortuner VRZ',
            'brand' => 'Toyota',
            'year' => 2020,
            'price' => 520000000,
            'mileage' => 45000,
            'transmission' => 'Automatic',
            'description' => 'Powerful SUV ready for any terrain. Well maintained by previous owner.',
            'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=800&auto=format&fit=crop',
            'is_consignment' => true,
            'status' => 'available',
        ]);
        
        \App\Models\Car::create([
            'title' => '2019 BMW 320i Sport',
            'brand' => 'BMW',
            'year' => 2019,
            'price' => 700000000,
            'mileage' => 30000,
            'transmission' => 'Automatic',
            'description' => 'Experience the ultimate driving machine. This 3 series is in pristine condition.',
            'image' => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?q=80&w=800&auto=format&fit=crop',
            'is_consignment' => false,
            'status' => 'available',
        ]);
    }
}
