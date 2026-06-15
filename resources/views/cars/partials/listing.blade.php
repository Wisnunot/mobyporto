<div class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16">
        <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight text-primary mb-4">
            Available Inventory
        </h1>
        <p class="text-lg text-gray-500 max-w-2xl">
            Browse our curated selection of premium vehicles. Every car in our showroom has been thoroughly inspected.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="flex flex-col lg:flex-row gap-8">
        
        <!-- Sidebar Filters (UI Only) -->
        <div class="w-full lg:w-1/4">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 sticky top-28">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-bold text-primary">Filters</h3>
                    <button class="text-sm font-semibold text-secondary hover:text-teal-700">Reset All</button>
                </div>
                
                <div class="space-y-6">
                    <!-- Brand Filter -->
                    <div>
                        <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">Brand</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">Toyota</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">Honda</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">BMW</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">Mercedes-Benz</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-100 pt-6">
                        <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">Price Range</h4>
                        <div class="grid grid-cols-2 gap-2">
                            <input type="number" placeholder="Min" class="w-full text-sm rounded-lg border-gray-200 focus:ring-secondary focus:border-secondary">
                            <input type="number" placeholder="Max" class="w-full text-sm rounded-lg border-gray-200 focus:ring-secondary focus:border-secondary">
                        </div>
                    </div>

                    <div class="border-t border-gray-100 pt-6">
                        <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">Year</h4>
                        <select class="w-full text-sm rounded-lg border-gray-200 focus:ring-secondary focus:border-secondary">
                            <option>All Years</option>
                            <option>2023 - 2024</option>
                            <option>2020 - 2022</option>
                            <option>2015 - 2019</option>
                            <option>Older than 2015</option>
                        </select>
                    </div>

                    <div class="border-t border-gray-100 pt-6">
                        <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">Transmission</h4>
                        <div class="flex gap-2">
                            <button class="flex-1 py-2 text-sm font-medium border border-secondary bg-secondary/10 text-secondary rounded-lg">Auto</button>
                            <button class="flex-1 py-2 text-sm font-medium border border-gray-200 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors">Manual</button>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-100 pt-6">
                        <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">Status</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" checked class="rounded border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">Available</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">Consignment</span>
                            </label>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button class="w-full bg-primary hover:bg-slate-800 text-white font-bold py-3 px-4 rounded-xl transition-colors">
                            Apply Filters
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-full lg:w-3/4">
            <!-- Top Bar -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 mb-8 flex flex-col sm:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-2">
                    <span class="font-bold text-primary">{{ $cars->count() }}</span>
                    <span class="text-gray-500">vehicles found</span>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                    <div class="relative">
                        <input type="text" placeholder="Search models..." class="w-full sm:w-64 pl-10 pr-4 py-2 border border-gray-200 rounded-lg text-sm focus:ring-secondary focus:border-secondary">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <select class="py-2 pl-4 pr-8 border border-gray-200 rounded-lg text-sm font-medium focus:ring-secondary focus:border-secondary bg-gray-50">
                        <option>Newest Arrivals</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Mileage: Low to High</option>
                        <option>Year: Newest</option>
                    </select>
                </div>
            </div>

            <!-- Car Grid -->
            @if($cars->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    @foreach($cars as $car)
                        <x-car-card :car="$car" />
                    @endforeach
                </div>
                
                <!-- Pagination (UI Only) -->
                <div class="mt-12 flex justify-center">
                    <nav class="flex items-center gap-1">
                        <button class="p-2 rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50 disabled:opacity-50" disabled>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </button>
                        <button class="w-10 h-10 rounded-lg bg-primary text-white font-bold flex items-center justify-center">1</button>
                        <button class="w-10 h-10 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium flex items-center justify-center transition-colors">2</button>
                        <button class="w-10 h-10 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium flex items-center justify-center transition-colors">3</button>
                        <span class="px-2 text-gray-400">...</span>
                        <button class="w-10 h-10 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 font-medium flex items-center justify-center transition-colors">8</button>
                        <button class="p-2 rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </nav>
                </div>
            @else
                <div class="text-center py-24 bg-white rounded-2xl border border-gray-100 shadow-sm">
                    <svg class="mx-auto h-16 w-16 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                    </svg>
                    <h3 class="mt-4 text-xl font-bold text-gray-900">No matches found</h3>
                    <p class="mt-2 text-gray-500">Try adjusting your filters or search terms.</p>
                    <button class="mt-6 text-secondary font-bold hover:text-teal-700">Clear all filters</button>
                </div>
            @endif
        </div>
    </div>
</div>
