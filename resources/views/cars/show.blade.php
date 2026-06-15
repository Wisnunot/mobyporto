@extends('layouts.app')

@section('content')
<!-- Breadcrumbs -->
<div class="bg-white border-b border-gray-200 py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex text-sm font-medium text-gray-500">
            <a href="{{ route('cars.index') }}" class="hover:text-primary transition-colors">Showroom</a>
            <span class="mx-2 text-gray-300">/</span>
            <span class="hover:text-primary transition-colors cursor-pointer">{{ $car->brand }}</span>
            <span class="mx-2 text-gray-300">/</span>
            <span class="text-primary font-semibold truncate">{{ $car->title }}</span>
        </nav>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16">
    <!-- Main Header (Mobile optimized) -->
    <div class="lg:hidden mb-6">
        <h1 class="text-3xl font-extrabold text-primary tracking-tight mb-2">{{ $car->title }}</h1>
        <p class="text-gray-500 text-lg">{{ $car->brand }} &bull; {{ $car->year }}</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12">
        <!-- Left Column: Gallery & Details -->
        <div class="lg:col-span-8">
            <!-- Image Gallery -->
            <div class="mb-10">
                <div class="bg-gray-100 rounded-2xl overflow-hidden relative aspect-[16/10] mb-4 shadow-sm border border-gray-200">
                    @if($car->image)
                        <img src="{{ $car->image }}" alt="{{ $car->title }}" class="object-cover w-full h-full">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-gray-400 bg-gray-50">
                            <svg class="w-16 h-16 opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    @endif
                    
                    @if($car->is_consignment)
                        <div class="absolute top-4 left-4">
                            <span class="bg-primary/90 text-white text-xs font-bold px-4 py-2 rounded-full uppercase tracking-widest backdrop-blur-sm shadow-md">
                                Consignment
                            </span>
                        </div>
                    @endif
                </div>

                <!-- Thumbnail Gallery (Mocked for UX) -->
                @if($car->image)
                <div class="grid grid-cols-4 sm:grid-cols-5 gap-3 sm:gap-4">
                    <div class="aspect-[4/3] rounded-lg overflow-hidden border-2 border-secondary cursor-pointer opacity-100">
                        <img src="{{ $car->image }}" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-[4/3] rounded-lg overflow-hidden border-2 border-transparent cursor-pointer opacity-60 hover:opacity-100 transition-opacity">
                        <img src="{{ $car->image }}" class="w-full h-full object-cover grayscale">
                    </div>
                    <div class="aspect-[4/3] rounded-lg overflow-hidden border-2 border-transparent cursor-pointer opacity-60 hover:opacity-100 transition-opacity">
                        <img src="{{ $car->image }}" class="w-full h-full object-cover grayscale">
                    </div>
                    <div class="aspect-[4/3] rounded-lg overflow-hidden border-2 border-transparent cursor-pointer opacity-60 hover:opacity-100 transition-opacity">
                        <img src="{{ $car->image }}" class="w-full h-full object-cover grayscale">
                    </div>
                    <div class="aspect-[4/3] rounded-lg overflow-hidden border-2 border-transparent cursor-pointer opacity-60 hover:opacity-100 transition-opacity hidden sm:block relative">
                        <img src="{{ $car->image }}" class="w-full h-full object-cover grayscale">
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                            <span class="text-white font-bold">+5</span>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            
            <!-- Specifications Grid -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 mb-10">
                <h3 class="text-2xl font-bold text-primary mb-6">Specifications</h3>
                
                <div class="grid grid-cols-2 md:grid-cols-3 gap-y-8 gap-x-6">
                    <div>
                        <div class="text-sm text-gray-500 mb-1">Brand</div>
                        <div class="font-semibold text-primary text-lg">{{ $car->brand }}</div>
                    </div>
                    <div>
                        <div class="text-sm text-gray-500 mb-1">Model</div>
                        <div class="font-semibold text-primary text-lg">{{ $car->title }}</div>
                    </div>
                    <div>
                        <div class="text-sm text-gray-500 mb-1">Year</div>
                        <div class="font-semibold text-primary text-lg">{{ $car->year }}</div>
                    </div>
                    <div>
                        <div class="text-sm text-gray-500 mb-1">Mileage</div>
                        <div class="font-semibold text-primary text-lg">{{ number_format($car->mileage, 0, ',', '.') }} km</div>
                    </div>
                    <div>
                        <div class="text-sm text-gray-500 mb-1">Transmission</div>
                        <div class="font-semibold text-primary text-lg">{{ $car->transmission }}</div>
                    </div>
                    <div>
                        <div class="text-sm text-gray-500 mb-1">Fuel Type</div>
                        <div class="font-semibold text-primary text-lg">Petrol</div>
                    </div>
                    <div>
                        <div class="text-sm text-gray-500 mb-1">Color</div>
                        <div class="font-semibold text-primary text-lg">Black Metallic</div>
                    </div>
                    <div>
                        <div class="text-sm text-gray-500 mb-1">Status</div>
                        <div class="font-semibold text-secondary text-lg capitalize">{{ $car->status }}</div>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <h3 class="text-2xl font-bold text-primary mb-6">Description</h3>
                <div class="prose prose-lg text-gray-600 max-w-none leading-relaxed">
                    <p>{{ $car->description }}</p>
                </div>
            </div>
        </div>
        
        <!-- Right Column: Sticky Pricing & CTA -->
        <div class="lg:col-span-4">
            <div class="sticky top-28 bg-white rounded-2xl shadow-xl border border-gray-100 p-8">
                <div class="hidden lg:block mb-8 pb-8 border-b border-gray-100">
                    <h1 class="text-3xl font-extrabold text-primary tracking-tight mb-2 leading-tight">{{ $car->title }}</h1>
                    <p class="text-gray-500 text-lg">{{ $car->brand }} &bull; {{ $car->year }}</p>
                </div>
                
                <div class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-2">Price</div>
                <div class="text-4xl md:text-5xl font-extrabold text-primary tracking-tight mb-8">
                    <span class="text-2xl text-gray-400 font-semibold mr-1 relative top-[-8px]">Rp</span>{{ number_format($car->price, 0, ',', '.') }}
                </div>
                
                <!-- Features List -->
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-secondary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        150-Point Inspection Passed
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-secondary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Complete Documents
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 text-secondary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        1 Year Warranty Available
                    </li>
                </ul>
                
                @php
                    $waNumber = env('WHATSAPP_NUMBER');
                    $waMessage = urlencode("Halo Moby, saya tertarik dengan mobil " . $car->title . " (" . $car->year . "). Boleh minta info lebih lanjut?");
                @endphp
                
                <a href="https://wa.me/{{ $waNumber }}?text={{ $waMessage }}" target="_blank" rel="noopener noreferrer" class="w-full flex items-center justify-center bg-[#25D366] hover:bg-[#1DA851] text-white font-bold text-lg py-4 px-8 rounded-xl transition-all shadow-lg hover:shadow-xl hover:-translate-y-1 mb-4">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Chat with Agent
                </a>
                
                <button class="w-full py-4 border-2 border-primary text-primary font-bold text-lg rounded-xl hover:bg-slate-50 transition-colors">
                    Schedule Test Drive
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Related Cars Section -->
@php
    // Inline query to fetch related cars without modifying the controller
    $relatedCars = \App\Models\Car::where('id', '!=', $car->id)->inRandomOrder()->take(3)->get();
@endphp

@if($relatedCars->count() > 0)
<div class="bg-slate-50 py-16 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-10">
            <div>
                <h3 class="text-3xl font-extrabold text-primary">Similar Vehicles</h3>
                <p class="text-gray-500 mt-2">You might also be interested in these cars.</p>
            </div>
            <a href="{{ url('/cars') }}" class="hidden md:flex items-center text-primary font-semibold hover:text-secondary transition-colors group">
                View All
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedCars as $relatedCar)
                <x-car-card :car="$relatedCar" />
            @endforeach
        </div>
    </div>
</div>
@endif

@endsection
