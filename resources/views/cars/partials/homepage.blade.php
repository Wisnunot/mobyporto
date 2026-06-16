<!-- Hero Section -->
<div class="relative bg-primary overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" alt="Premium Cars" class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-primary to-transparent mix-blend-multiply"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 md:py-48">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-tight mb-6 leading-tight">
                {{ __('ui.hero_title') }} <span class="text-accent">Moby</span>
            </h1>
            <p class="text-xl text-gray-300 mb-10 max-w-2xl leading-relaxed">
                {{ __('ui.hero_subtitle') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('cars.index') }}" class="inline-flex justify-center items-center px-8 py-4 border border-transparent text-lg font-bold rounded-lg text-primary bg-accent hover:bg-yellow-400 transition-colors shadow-lg hover:shadow-xl">
                    {{ __('ui.btn_browse') }}
                </a>
                <a href="#contact" class="inline-flex justify-center items-center px-8 py-4 border-2 border-white text-lg font-bold rounded-lg text-white hover:bg-white hover:text-primary transition-colors">
                    {{ __('ui.btn_contact') }}
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Quick Search (UI Only) -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-10 mb-20">
    <div class="bg-white rounded-2xl shadow-xl p-6 md:p-8 border border-gray-100">
        <form action="{{ route('cars.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-5 gap-6 items-end">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">{{ __('ui.brand') }}</label>
                <select name="brand" class="w-full bg-slate-50 border border-slate-200 text-gray-700 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent">
                    <option value="Any Brand" {{ request('brand') === 'Any Brand' ? 'selected' : '' }}>{{ __('ui.any_brand') }}</option>
                    <option value="Toyota" {{ request('brand') === 'Toyota' ? 'selected' : '' }}>Toyota</option>
                    <option value="Honda" {{ request('brand') === 'Honda' ? 'selected' : '' }}>Honda</option>
                    <option value="BMW" {{ request('brand') === 'BMW' ? 'selected' : '' }}>BMW</option>
                    <option value="Mercedes-Benz" {{ request('brand') === 'Mercedes-Benz' ? 'selected' : '' }}>Mercedes-Benz</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">{{ __('ui.price_range') }}</label>
                <select name="price_range" class="w-full bg-slate-50 border border-slate-200 text-gray-700 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent">
                    <option value="Any Price" {{ request('price_range') === 'Any Price' ? 'selected' : '' }}>{{ __('ui.any_price') }}</option>
                    <option value="Under Rp 200 Jt" {{ request('price_range') === 'Under Rp 200 Jt' ? 'selected' : '' }}>Under Rp 200 Jt</option>
                    <option value="Rp 200 Jt - Rp 500 Jt" {{ request('price_range') === 'Rp 200 Jt - Rp 500 Jt' ? 'selected' : '' }}>Rp 200 Jt - Rp 500 Jt</option>
                    <option value="Above Rp 500 Jt" {{ request('price_range') === 'Above Rp 500 Jt' ? 'selected' : '' }}>Above Rp 500 Jt</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">{{ __('ui.year') }}</label>
                <select name="year" class="w-full bg-slate-50 border border-slate-200 text-gray-700 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent">
                    <option value="Any Year" {{ request('year') === 'Any Year' ? 'selected' : '' }}>{{ __('ui.any_year') }}</option>
                    <option value="2020 & Newer" {{ request('year') === '2020 & Newer' ? 'selected' : '' }}>2020 & Newer</option>
                    <option value="2015 - 2019" {{ request('year') === '2015 - 2019' ? 'selected' : '' }}>2015 - 2019</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">{{ __('ui.transmission') }}</label>
                <select name="transmission" class="w-full bg-slate-50 border border-slate-200 text-gray-700 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent">
                    <option value="Any Type" {{ request('transmission') === 'Any Type' ? 'selected' : '' }}>{{ __('ui.any_type') }}</option>
                    <option value="Automatic" {{ request('transmission') === 'Automatic' ? 'selected' : '' }}>Automatic</option>
                    <option value="Manual" {{ request('transmission') === 'Manual' ? 'selected' : '' }}>Manual</option>
                </select>
            </div>
            <div>
                <button type="submit" class="w-full bg-secondary hover:bg-teal-700 text-white font-bold py-3 px-4 rounded-lg transition-colors flex justify-center items-center h-[50px]">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    {{ __('ui.search') }}
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Featured Cars -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="flex justify-between items-end mb-10">
        <div>
            <h2 class="text-sm font-bold tracking-widest text-secondary uppercase mb-2">{{ __('ui.exclusive_selection') }}</h2>
            <h3 class="text-3xl md:text-4xl font-extrabold text-primary">{{ __('ui.featured_cars') }}</h3>
        </div>
        <a href="{{ url('/cars') }}" class="hidden md:flex items-center text-primary font-semibold hover:text-secondary transition-colors group">
            {{ __('ui.view_all') }}
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
    </div>

    @if($cars->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($cars->take(6) as $car)
                <x-car-card :car="$car" />
            @endforeach
        </div>
        <div class="mt-10 text-center md:hidden">
            <a href="{{ url('/cars') }}" class="inline-flex items-center text-primary font-semibold hover:text-secondary transition-colors">
                {{ __('ui.view_all') }}
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    @else
        <div class="text-center py-20 bg-white rounded-2xl border border-gray-100 shadow-sm">
            <svg class="mx-auto h-12 w-12 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
            </svg>
            <h3 class="mt-4 text-lg font-bold text-gray-900">No cars available</h3>
            <p class="mt-2 text-gray-500">Check back later for our new inventory.</p>
        </div>
    @endif
</div>

<!-- Why Choose Us -->
<div class="bg-primary py-24 mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-sm font-bold tracking-widest text-accent uppercase mb-2">{{ __('ui.our_advantage') }}</h2>
            <h3 class="text-3xl md:text-4xl font-extrabold text-white">{{ __('ui.why_choose_us') }}</h3>
            <p class="mt-4 text-lg text-gray-400">{{ __('ui.why_desc') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-slate-800/50 border border-slate-700 p-8 rounded-2xl hover:-translate-y-2 transition-transform duration-300 group">
                <div class="w-14 h-14 bg-secondary/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary group-hover:text-white transition-colors text-secondary">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h4 class="text-xl font-bold text-white mb-3">{{ __('ui.certified_quality') }}</h4>
                <p class="text-gray-400 leading-relaxed">{{ __('ui.certified_desc') }}</p>
            </div>
            
            <div class="bg-slate-800/50 border border-slate-700 p-8 rounded-2xl hover:-translate-y-2 transition-transform duration-300 group">
                <div class="w-14 h-14 bg-secondary/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary group-hover:text-white transition-colors text-secondary">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h4 class="text-xl font-bold text-white mb-3">{{ __('ui.financing') }}</h4>
                <p class="text-gray-400 leading-relaxed">{{ __('ui.financing_desc') }}</p>
            </div>

            <div class="bg-slate-800/50 border border-slate-700 p-8 rounded-2xl hover:-translate-y-2 transition-transform duration-300 group">
                <div class="w-14 h-14 bg-secondary/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary group-hover:text-white transition-colors text-secondary">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h4 class="text-xl font-bold text-white mb-3">{{ __('ui.trusted_dealer') }}</h4>
                <p class="text-gray-400 leading-relaxed">{{ __('ui.trusted_desc') }}</p>
            </div>

            <div class="bg-slate-800/50 border border-slate-700 p-8 rounded-2xl hover:-translate-y-2 transition-transform duration-300 group">
                <div class="w-14 h-14 bg-secondary/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary group-hover:text-white transition-colors text-secondary">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h4 class="text-xl font-bold text-white mb-3">{{ __('ui.fast_process') }}</h4>
                <p class="text-gray-400 leading-relaxed">{{ __('ui.fast_desc') }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Statistics -->
<div class="bg-white py-16 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-gray-100">
            <div class="px-4">
                <div class="text-4xl md:text-5xl font-extrabold text-primary mb-2">500<span class="text-secondary">+</span></div>
                <div class="text-sm font-bold text-gray-500 uppercase tracking-wide">{{ __('ui.cars_sold') }}</div>
            </div>
            <div class="px-4">
                <div class="text-4xl md:text-5xl font-extrabold text-primary mb-2">99<span class="text-secondary">%</span></div>
                <div class="text-sm font-bold text-gray-500 uppercase tracking-wide">{{ __('ui.happy_customers') }}</div>
            </div>
            <div class="px-4">
                <div class="text-4xl md:text-5xl font-extrabold text-primary mb-2">15<span class="text-secondary">+</span></div>
                <div class="text-sm font-bold text-gray-500 uppercase tracking-wide">{{ __('ui.years_experience') }}</div>
            </div>
            <div class="px-4">
                <div class="text-4xl md:text-5xl font-extrabold text-primary mb-2">{{ method_exists($cars, 'total') ? $cars->total() : $cars->count() }}</div>
                <div class="text-sm font-bold text-gray-500 uppercase tracking-wide">{{ __('ui.available_inventory') }}</div>
            </div>
        </div>
    </div>
</div>

<!-- Customer Testimonial -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
    <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-extrabold text-primary">{{ __('ui.what_customers_say') }}</h2>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Testimonial 1 -->
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 relative">
            <svg class="absolute top-6 left-6 w-10 h-10 text-gray-200" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
            <div class="relative z-10 pt-8">
                <p class="text-gray-600 mb-6 font-medium italic">"Found my dream car here. The condition was exactly as described, and the financing process was incredibly smooth. Highly recommend Moby!"</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center font-bold text-xl">A</div>
                    <div class="ml-4">
                        <div class="font-bold text-primary">Andi Pratama</div>
                        <div class="text-sm text-gray-500">Bought a BMW 3 Series</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 relative">
            <svg class="absolute top-6 left-6 w-10 h-10 text-gray-200" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
            <div class="relative z-10 pt-8">
                <p class="text-gray-600 mb-6 font-medium italic">"The transparency and honesty from the team made all the difference. No hidden fees, no pushy sales tactics. Just great service."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-secondary text-white rounded-full flex items-center justify-center font-bold text-xl">S</div>
                    <div class="ml-4">
                        <div class="font-bold text-primary">Sarah Wijaya</div>
                        <div class="text-sm text-gray-500">Bought a Honda CR-V</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 relative">
            <svg class="absolute top-6 left-6 w-10 h-10 text-gray-200" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
            <div class="relative z-10 pt-8">
                <p class="text-gray-600 mb-6 font-medium italic">"I consigned my car with Moby and they handled everything perfectly. Sold it within two weeks at a great price. True professionals."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-accent text-white rounded-full flex items-center justify-center font-bold text-xl">B</div>
                    <div class="ml-4">
                        <div class="font-bold text-primary">Budi Santoso</div>
                        <div class="text-sm text-gray-500">Consignment Client</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div id="contact" class="bg-slate-100 py-20 border-t border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-5xl font-extrabold text-primary mb-6">{{ __('ui.ready_to_find') }}</h2>
        <p class="text-xl text-gray-600 mb-10">{{ __('ui.cta_desc') }}</p>
        
        @php
            $waNumber = env('WHATSAPP_NUMBER');
            $waMessage = urlencode("Halo Moby, saya ingin konsultasi mengenai pembelian mobil.");
        @endphp
        <a href="https://wa.me/{{ $waNumber }}?text={{ $waMessage }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center bg-[#25D366] hover:bg-[#1DA851] text-white font-bold text-lg md:text-xl py-4 px-10 rounded-xl transition-all duration-300 shadow-lg hover:shadow-2xl hover:-translate-y-1">
            <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            {{ __('ui.chat_agent') }}
        </a>
    </div>
</div>
