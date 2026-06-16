<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run()
    {
        // Bersihkan tabel sebelum seeding untuk mencegah duplikasi (opsional)
        // Car::truncate(); 

        $cars = [
            // Kategori: Harga Under Rp 200 Jt
            [
                'title' => 'Toyota Agya GR Sport',
                'brand' => 'Toyota',
                'price' => 165000000,
                'year' => 2022, 
                'transmission' => 'Automatic',
                'image' => 'https://images.unsplash.com/photo-1606152421802-db97b9c7a11b?q=80&w=800&auto=format&fit=crop',
                'mileage' => 12000,
                'description' => 'Compact and sporty, perfect for daily commuting.',
                'is_consignment' => false,
                'status' => 'available',
            ],
            [
                'title' => 'Honda Brio Satya',
                'brand' => 'Honda',
                'price' => 140000000,
                'year' => 2018, 
                'transmission' => 'Manual',
                'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=800&auto=format&fit=crop',
                'mileage' => 45000,
                'description' => 'Fuel efficient and reliable city car.',
                'is_consignment' => false,
                'status' => 'available',
            ],
            [
                'title' => 'Daihatsu Xenia',
                'brand' => 'Daihatsu',
                'price' => 180000000,
                'year' => 2014, 
                'transmission' => 'Manual',
                'image' => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?q=80&w=800&auto=format&fit=crop',
                'mileage' => 90000,
                'description' => 'Spacious family car with 3-row seating.',
                'is_consignment' => true,
                'status' => 'available',
            ],

            // Kategori: Harga Rp 200 Jt - Rp 500 Jt
            [
                'title' => 'Honda HR-V SE',
                'brand' => 'Honda',
                'price' => 380000000,
                'year' => 2021, 
                'transmission' => 'Automatic',
                'image' => 'https://images.unsplash.com/photo-1606152421802-db97b9c7a11b?q=80&w=800&auto=format&fit=crop',
                'mileage' => 20000,
                'description' => 'Stylish compact SUV loaded with features.',
                'is_consignment' => false,
                'status' => 'available',
            ],
            [
                'title' => 'Toyota Innova Reborn',
                'brand' => 'Toyota',
                'price' => 320000000,
                'year' => 2017, 
                'transmission' => 'Automatic',
                'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=800&auto=format&fit=crop',
                'mileage' => 85000,
                'description' => 'Legendary comfort and durability.',
                'is_consignment' => false,
                'status' => 'available',
            ],
            [
                'title' => 'Mitsubishi Xpander Cross',
                'brand' => 'Mitsubishi',
                'price' => 295000000,
                'year' => 2020, 
                'transmission' => 'Manual',
                'image' => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?q=80&w=800&auto=format&fit=crop',
                'mileage' => 40000,
                'description' => 'Aggressive styling with MPV practicality.',
                'is_consignment' => true,
                'status' => 'available',
            ],
            [
                'title' => 'Suzuki Jimny',
                'brand' => 'Suzuki',
                'price' => 450000000,
                'year' => 2023, 
                'transmission' => 'Automatic',
                'image' => 'https://images.unsplash.com/photo-1606152421802-db97b9c7a11b?q=80&w=800&auto=format&fit=crop',
                'mileage' => 5000,
                'description' => 'Iconic 4x4 ready for off-road adventures.',
                'is_consignment' => false,
                'status' => 'available',
            ],

            // Kategori: Harga Above Rp 500 Jt
            [
                'title' => 'Toyota Fortuner VRZ',
                'brand' => 'Toyota',
                'price' => 580000000,
                'year' => 2021, 
                'transmission' => 'Automatic',
                'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=800&auto=format&fit=crop',
                'mileage' => 35000,
                'description' => 'Powerful diesel SUV with commanding presence.',
                'is_consignment' => false,
                'status' => 'available',
            ],
            [
                'title' => 'BMW 320i M Sport',
                'brand' => 'BMW',
                'price' => 950000000,
                'year' => 2022, 
                'transmission' => 'Automatic',
                'image' => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?q=80&w=800&auto=format&fit=crop',
                'mileage' => 10000,
                'description' => 'The ultimate driving machine.',
                'is_consignment' => true,
                'status' => 'available',
            ],
            [
                'title' => 'Mitsubishi Pajero Sport',
                'brand' => 'Mitsubishi',
                'price' => 520000000,
                'year' => 2018, 
                'transmission' => 'Automatic',
                'image' => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?q=80&w=800&auto=format&fit=crop',
                'mileage' => 70000,
                'description' => 'Tough and premium SUV.',
                'is_consignment' => false,
                'status' => 'available',
            ],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
