@extends('layouts.app')

@section('content')
<div class="bg-white border-b border-gray-200 py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex text-sm text-gray-500 font-medium">
            <a href="{{ route('cars.index') }}" class="hover:text-primary transition-colors">Showroom</a>
            <span class="mx-2">/</span>
            <span class="text-gray-900">{{ $car->brand }}</span>
            <span class="mx-2">/</span>
            <span class="text-gray-900 truncate">{{ $car->title }}</span>
        </nav>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        <!-- Image Section -->
        <div class="lg:col-span-8">
            <div class="bg-gray-100 rounded-xl overflow-hidden relative aspect-w-16 aspect-h-9 md:aspect-h-10">
                @if($car->image)
                    <img src="{{ $car->image }}" alt="{{ $car->title }}" class="object-cover w-full h-full">
                @else
                    <div class="w-full h-full flex items-center justify-center text-gray-400">No Image Available</div>
                @endif
                
                @if($car->is_consignment)
                    <div class="absolute top-4 left-4">
                        <span class="bg-primary/90 text-white text-sm font-bold px-4 py-1.5 rounded-full uppercase tracking-wider backdrop-blur-sm">
                            Consignment
                        </span>
                    </div>
                @endif
            </div>
            
            <div class="mt-12">
                <h3 class="text-2xl font-bold text-primary mb-6">Description</h3>
                <div class="prose prose-lg text-gray-600 max-w-none">
                    <p>{{ $car->description }}</p>
                </div>
            </div>
        </div>
        
        <!-- Details & CTA Section -->
        <div class="lg:col-span-4">
            <div class="sticky top-28 bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                <h1 class="text-3xl font-extrabold text-primary tracking-tight mb-2">{{ $car->title }}</h1>
                <p class="text-gray-500 text-lg mb-6">{{ $car->brand }} &bull; {{ $car->year }}</p>
                
                <div class="text-4xl font-extrabold text-primary tracking-tight mb-8">
                    <span class="text-2xl text-gray-400 font-semibold mr-1">Rp</span>{{ number_format($car->price, 0, ',', '.') }}
                </div>
                
                <div class="space-y-4 mb-8">
                    <div class="flex justify-between py-3 border-b border-gray-100">
                        <span class="text-gray-500">Year</span>
                        <span class="font-semibold text-primary">{{ $car->year }}</span>
                    </div>
                    <div class="flex justify-between py-3 border-b border-gray-100">
                        <span class="text-gray-500">Mileage</span>
                        <span class="font-semibold text-primary">{{ number_format($car->mileage, 0, ',', '.') }} km</span>
                    </div>
                    <div class="flex justify-between py-3 border-b border-gray-100">
                        <span class="text-gray-500">Transmission</span>
                        <span class="font-semibold text-primary">{{ $car->transmission }}</span>
                    </div>
                    <div class="flex justify-between py-3 border-b border-gray-100">
                        <span class="text-gray-500">Status</span>
                        <span class="font-semibold text-secondary capitalize">{{ $car->status }}</span>
                    </div>
                </div>
                
                @php
                    $waNumber = env('WHATSAPP_NUMBER');
                    $waMessage = urlencode("Halo Moby, saya tertarik dengan mobil " . $car->title . " (" . $car->year . "). Boleh minta info lebih lanjut?");
                @endphp
                
                <a href="https://wa.me/{{ $waNumber }}?text={{ $waMessage }}" target="_blank" rel="noopener noreferrer" class="w-full flex items-center justify-center bg-[#25D366] hover:bg-[#1DA851] text-white font-bold text-lg py-4 px-8 rounded-lg transition-colors shadow-sm hover:shadow-md">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Chat with Agent
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
