<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $query = Car::query();

        // 1. Filter by Brand
        $query->when($request->brand && $request->brand !== 'Any Brand' && $request->brand !== 'All Brands', function ($q) use ($request) {
            $q->where('brand', $request->brand);
        });

        // 2. Filter by Price Range
        $query->when($request->price_range && $request->price_range !== 'Any Price', function ($q) use ($request) {
            if ($request->price_range === 'Under Rp 200 Jt') {
                $q->where('price', '<', 200000000);
            } elseif ($request->price_range === 'Rp 200 Jt - Rp 500 Jt') {
                $q->whereBetween('price', [200000000, 500000000]);
            } elseif ($request->price_range === 'Above Rp 500 Jt') {
                $q->where('price', '>', 500000000);
            }
        });

        // Custom min/max price from sidebar
        $query->when($request->min_price, function ($q) use ($request) {
            $q->where('price', '>=', $request->min_price);
        });
        $query->when($request->max_price, function ($q) use ($request) {
            $q->where('price', '<=', $request->max_price);
        });

        // 3. Filter by Year
        $query->when($request->year && $request->year !== 'Any Year' && $request->year !== 'All Years', function ($q) use ($request) {
            if ($request->year === '2020 & Newer' || $request->year === '2023 - 2024' || $request->year === '2020 - 2022') {
                $minYear = ($request->year === '2023 - 2024') ? 2023 : 2020;
                $q->where('year', '>=', $minYear);
            } elseif ($request->year === '2015 - 2019') {
                $q->whereBetween('year', [2015, 2019]);
            } elseif ($request->year === 'Older than 2015') {
                $q->where('year', '<', 2015);
            }
        });

        // 4. Filter by Transmission
        $query->when($request->transmission && $request->transmission !== 'Any Type', function ($q) use ($request) {
            $val = $request->transmission === 'Auto' ? 'Automatic' : $request->transmission;
            $q->where('transmission', $val);
        });

        // 5. Filter by Status
        $query->when($request->has('status_available') || $request->has('status_consignment'), function ($q) use ($request) {
            $q->where(function ($subQ) use ($request) {
                if ($request->has('status_available')) {
                    $subQ->orWhere('status', 'available');
                }
                if ($request->has('status_consignment')) {
                    $subQ->orWhere('is_consignment', true);
                }
            });
        });

        // 6. Search input
        $query->when($request->search, function ($q) use ($request) {
            $q->where(function ($subQ) use ($request) {
                $subQ->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('brand', 'like', '%' . $request->search . '%');
            });
        });

        // 7. Sorting
        $sort = $request->input('sort', 'newest');
        if ($sort === 'price_asc') {
            $query->orderBy('price', 'asc');
        } elseif ($sort === 'price_desc') {
            $query->orderBy('price', 'desc');
        } elseif ($sort === 'mileage_asc') {
            $query->orderBy('mileage', 'asc');
        } elseif ($sort === 'year_desc') {
            $query->orderBy('year', 'desc');
        } else {
            $query->orderBy('created_at', 'desc'); // default newest
        }

        // 8. Pagination
        $cars = $query->paginate(9)->withQueryString();

        // Dynamic data for views
        $brands = Car::select('brand')->distinct()->orderBy('brand')->pluck('brand');
        $totalInventory = Car::where('status', 'available')->count();

        return view('cars.index', compact('cars', 'brands', 'totalInventory'));
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);

        // Related cars: same brand, excluding current car
        $relatedCars = Car::where('brand', $car->brand)
            ->where('id', '!=', $car->id)
            ->inRandomOrder()
            ->take(3)
            ->get();

        // If not enough same-brand cars, fill with random others
        if ($relatedCars->count() < 3) {
            $existingIds = $relatedCars->pluck('id')->push($car->id);
            $moreCars = Car::whereNotIn('id', $existingIds)
                ->inRandomOrder()
                ->take(3 - $relatedCars->count())
                ->get();
            $relatedCars = $relatedCars->merge($moreCars);
        }

        return view('cars.show', compact('car', 'relatedCars'));
    }
}
