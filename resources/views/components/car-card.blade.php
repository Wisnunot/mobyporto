@props(['car'])

<a href="{{ route('cars.show', $car->id) }}" class="group block bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100">
    <div class="relative aspect-w-4 aspect-h-3 overflow-hidden bg-gray-200">
        @if($car->image)
            <img src="{{ $car->image }}" alt="{{ $car->title }}" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500">
        @else
            <div class="w-full h-full flex items-center justify-center text-gray-400">No Image</div>
        @endif
        
        @if($car->is_consignment)
            <div class="absolute top-4 left-4">
                <span class="bg-primary/90 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider backdrop-blur-sm">
                    Consignment
                </span>
            </div>
        @endif
    </div>
    
    <div class="p-5 flex flex-col h-full">
        <h3 class="text-xl font-bold text-primary mb-1 truncate group-hover:text-secondary transition-colors">{{ $car->title }}</h3>
        
        <div class="text-2xl font-extrabold text-primary mb-4 tracking-tight">
            Rp {{ number_format($car->price, 0, ',', '.') }}
        </div>
        
        <div class="grid grid-cols-2 gap-y-3 gap-x-2 text-sm text-gray-600 mb-6">
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <span class="font-work-sans">{{ $car->year }}</span>
            </div>
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                <span class="font-work-sans">{{ $car->transmission }}</span>
            </div>
            <div class="flex items-center col-span-2">
                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                <span class="font-work-sans">{{ number_format($car->mileage, 0, ',', '.') }} km</span>
            </div>
        </div>
        
        <div class="mt-auto pt-4 border-t border-gray-100 flex items-center justify-between">
            <span class="text-sm font-semibold text-secondary flex items-center">
                View Details
                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </span>
        </div>
    </div>
</a>
