@extends('layouts.app')

@section('content')
<div class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-primary mb-4">
            Find Your Next Car
        </h1>
        <p class="text-lg text-gray-500 max-w-2xl mx-auto">
            Browse our curated selection of premium vehicles. Every car in our showroom has been thoroughly inspected for quality and reliability.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="flex flex-col md:flex-row justify-between items-center mb-8">
        <h2 class="text-2xl font-bold text-primary">Available Inventory <span class="text-gray-400 font-normal ml-2">({{ $cars->count() }})</span></h2>
        
        <div class="mt-4 md:mt-0 flex space-x-2">
            <!-- Placeholder for filters if needed later -->
            <button class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-50 transition">
                Filter
            </button>
            <button class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-50 transition">
                Sort By
            </button>
        </div>
    </div>

    @if($cars->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($cars as $car)
                <x-car-card :car="$car" />
            @endforeach
        </div>
    @else
        <div class="text-center py-20 bg-white rounded-lg border border-gray-100">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900">No cars available</h3>
            <p class="mt-1 text-sm text-gray-500">Check back later for new inventory.</p>
        </div>
    @endif
</div>
@endsection
