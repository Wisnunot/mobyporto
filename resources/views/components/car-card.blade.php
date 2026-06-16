@props(['car'])

<a href="{{ route('cars.show', $car->id) }}" class="group flex flex-col bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1">
    <div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
        @if($car->image)
            <img src="{{ $car->image }}" alt="{{ $car->title }}" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-700 ease-out">
        @else
            <div class="w-full h-full flex items-center justify-center text-gray-400 bg-gray-50">
                <svg class="w-12 h-12 opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
        @endif
        
        @if($car->is_consignment)
            <div class="absolute top-4 left-4">
                <span class="bg-primary/95 text-white text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-widest shadow-sm backdrop-blur-sm">
                    {{ __('ui.consignment') }}
                </span>
            </div>
        @endif
    </div>
    
    <div class="p-6 flex flex-col flex-grow">
        <div class="flex justify-between items-start mb-2">
            <h3 class="text-lg font-bold text-primary leading-tight group-hover:text-secondary transition-colors line-clamp-2 pr-4">{{ $car->title }}</h3>
            <div class="bg-slate-50 border border-slate-100 rounded-md px-2 py-1 text-xs font-semibold text-slate-500 whitespace-nowrap">
                {{ $car->year }}
            </div>
        </div>
        
        <div class="text-2xl font-extrabold text-primary mb-6 tracking-tight mt-auto pt-2">
            <span class="text-sm font-semibold text-slate-400 mr-1">Rp</span>{{ number_format($car->price, 0, ',', '.') }}
        </div>
        
        <div class="grid grid-cols-2 gap-y-3 gap-x-4 text-sm text-slate-600 mb-6 font-medium">
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                <span class="font-work-sans">{{ $car->transmission }}</span>
            </div>
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                <span class="font-work-sans">{{ number_format($car->mileage, 0, ',', '.') }} km</span>
            </div>
        </div>
        
        <div class="pt-4 border-t border-slate-100 flex items-center justify-between mt-auto group-hover:border-slate-200 transition-colors">
            <span class="text-sm font-semibold text-secondary flex items-center">
                {{ __('ui.view_details') }}
                <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </span>
            <span class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center group-hover:bg-secondary/10 transition-colors">
                <svg class="w-4 h-4 text-slate-400 group-hover:text-secondary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </span>
        </div>
    </div>
</a>
