<div class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16">
        <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight text-primary mb-4">
            {{ __('ui.available_inventory_title') }}
        </h1>
        <p class="text-lg text-gray-500 max-w-2xl">
            {{ __('ui.inventory_desc') }}
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <form action="{{ route('cars.index') }}" method="GET" class="flex flex-col lg:flex-row gap-8">
        
        <!-- Sidebar Filters -->
        <div class="w-full lg:w-1/4">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 sticky top-28">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-bold text-primary">{{ __('ui.filters') }}</h3>
                    <a href="{{ route('cars.index') }}" class="text-sm font-semibold text-secondary hover:text-teal-700">{{ __('ui.reset_all') }}</a>
                </div>
                
                <div class="space-y-6">
                    <!-- Brand Filter -->
                    <div>
                        <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">{{ __('ui.brand') }}</h4>
                        <div class="space-y-2">
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="brand" value="" {{ !request('brand') || request('brand') === 'Any Brand' ? 'checked' : '' }} class="rounded-full border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">{{ __('ui.all_brands') }}</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="brand" value="Toyota" {{ request('brand') === 'Toyota' ? 'checked' : '' }} class="rounded-full border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">Toyota</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="brand" value="Honda" {{ request('brand') === 'Honda' ? 'checked' : '' }} class="rounded-full border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">Honda</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="brand" value="BMW" {{ request('brand') === 'BMW' ? 'checked' : '' }} class="rounded-full border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">BMW</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="brand" value="Mercedes-Benz" {{ request('brand') === 'Mercedes-Benz' ? 'checked' : '' }} class="rounded-full border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">Mercedes-Benz</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="brand" value="Mitsubishi" {{ request('brand') === 'Mitsubishi' ? 'checked' : '' }} class="rounded-full border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">Mitsubishi</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="brand" value="Suzuki" {{ request('brand') === 'Suzuki' ? 'checked' : '' }} class="rounded-full border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">Suzuki</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="brand" value="Daihatsu" {{ request('brand') === 'Daihatsu' ? 'checked' : '' }} class="rounded-full border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">Daihatsu</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-100 pt-6">
                        <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">{{ __('ui.price_range_rp') }}</h4>
                        <div class="grid grid-cols-2 gap-2">
                            <input type="number" name="min_price" value="{{ request('min_price') }}" placeholder="Min" class="w-full text-sm rounded-lg border-gray-200 focus:ring-secondary focus:border-secondary p-2 border">
                            <input type="number" name="max_price" value="{{ request('max_price') }}" placeholder="Max" class="w-full text-sm rounded-lg border-gray-200 focus:ring-secondary focus:border-secondary p-2 border">
                        </div>
                    </div>

                    <div class="border-t border-gray-100 pt-6">
                        <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">{{ __('ui.year') }}</h4>
                        <select name="year" class="w-full text-sm rounded-lg border-gray-200 focus:ring-secondary focus:border-secondary p-2 border">
                            <option value="Any Year" {{ request('year') === 'Any Year' ? 'selected' : '' }}>{{ __('ui.any_year') }}</option>
                            <option value="2020 & Newer" {{ request('year') === '2020 & Newer' ? 'selected' : '' }}>2020 & Newer</option>
                            <option value="2015 - 2019" {{ request('year') === '2015 - 2019' ? 'selected' : '' }}>2015 - 2019</option>
                            <option value="Older than 2015" {{ request('year') === 'Older than 2015' ? 'selected' : '' }}>Older than 2015</option>
                        </select>
                    </div>

                    <div class="border-t border-gray-100 pt-6">
                        <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">{{ __('ui.transmission') }}</h4>
                        <select name="transmission" class="w-full text-sm rounded-lg border-gray-200 focus:ring-secondary focus:border-secondary p-2 border">
                            <option value="Any Type" {{ request('transmission') === 'Any Type' ? 'selected' : '' }}>{{ __('ui.any_type') }}</option>
                            <option value="Automatic" {{ request('transmission') === 'Automatic' || request('transmission') === 'Auto' ? 'selected' : '' }}>Automatic</option>
                            <option value="Manual" {{ request('transmission') === 'Manual' ? 'selected' : '' }}>Manual</option>
                        </select>
                    </div>
                    
                    <div class="border-t border-gray-100 pt-6">
                        <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">{{ __('ui.status') }}</h4>
                        <div class="space-y-2">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" name="status_available" value="1" {{ request('status_available') ? 'checked' : '' }} class="rounded border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">{{ __('ui.status_available') }}</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" name="status_consignment" value="1" {{ request('status_consignment') ? 'checked' : '' }} class="rounded border-gray-300 text-secondary focus:ring-secondary w-4 h-4">
                                <span class="ml-3 text-sm text-gray-600">{{ __('ui.status_consignment') }}</span>
                            </label>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full bg-primary hover:bg-slate-800 text-white font-bold py-3 px-4 rounded-xl transition-colors">
                            {{ __('ui.apply_filters') }}
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
                    <span class="font-bold text-primary">{{ $cars->total() }}</span>
                    <span class="text-gray-500">{{ __('ui.vehicles_found') }}</span>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                    <div class="relative flex-grow sm:flex-grow-0">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="{{ __('ui.search_models') }}" class="w-full sm:w-64 pl-10 pr-4 py-2 border border-gray-200 rounded-lg text-sm focus:ring-secondary focus:border-secondary">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <button type="submit" class="hidden">{{ __('ui.search') }}</button>
                    </div>
                    <select name="sort" onchange="this.form.submit()" class="py-2 pl-4 pr-8 border border-gray-200 rounded-lg text-sm font-medium focus:ring-secondary focus:border-secondary bg-gray-50">
                        <option value="newest" {{ request('sort') === 'newest' ? 'selected' : '' }}>{{ __('ui.sort_newest') }}</option>
                        <option value="price_asc" {{ request('sort') === 'price_asc' ? 'selected' : '' }}>{{ __('ui.sort_price_asc') }}</option>
                        <option value="price_desc" {{ request('sort') === 'price_desc' ? 'selected' : '' }}>{{ __('ui.sort_price_desc') }}</option>
                        <option value="mileage_asc" {{ request('sort') === 'mileage_asc' ? 'selected' : '' }}>{{ __('ui.sort_mileage_asc') }}</option>
                        <option value="year_desc" {{ request('sort') === 'year_desc' ? 'selected' : '' }}>{{ __('ui.sort_year_desc') }}</option>
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
                
                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    {{ $cars->withQueryString()->links() }}
                </div>
            @else
                <div class="text-center py-24 bg-white rounded-2xl border border-gray-100 shadow-sm">
                    <svg class="mx-auto h-16 w-16 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                    </svg>
                    <h3 class="mt-4 text-xl font-bold text-gray-900">{{ __('ui.no_matches') }}</h3>
                    <p class="mt-2 text-gray-500">{{ __('ui.try_adjusting') }}</p>
                    <a href="{{ route('cars.index') }}" class="inline-block mt-6 text-secondary font-bold hover:text-teal-700">{{ __('ui.clear_filters') }}</a>
                </div>
            @endif
        </div>
    </form>
</div>
