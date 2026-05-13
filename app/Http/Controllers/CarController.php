<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = \App\Models\Car::all();
        return view('cars.index', compact('cars'));
    }

    public function show($id)
    {
        $car = \App\Models\Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }
}
