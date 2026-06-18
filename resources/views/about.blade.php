@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-primary py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm font-bold tracking-widest text-secondary uppercase mb-3">{{ __('ui.about_label') }}</p>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight mb-6">
            About <span class="text-accent">Moby</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-400 max-w-2xl mx-auto leading-relaxed">
            {{ __('ui.about_hero_subtitle') }}
        </p>
    </div>
</div>

<!-- Main Content Grid -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

        <!-- Text Column -->
        <div>
            <p class="text-sm font-bold tracking-widest text-secondary uppercase mb-3">{{ __('ui.about_our_story') }}</p>
            <h2 class="text-3xl md:text-4xl font-extrabold text-primary mb-6 leading-tight">
                {{ __('ui.about_story_title') }}
            </h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-6">
                {{ __('ui.about_story_p1') }}
            </p>
            <p class="text-lg text-gray-600 leading-relaxed mb-6">
                {{ __('ui.about_story_p2') }}
            </p>
            <p class="text-lg text-gray-600 leading-relaxed">
                {{ __('ui.about_story_p3') }}
            </p>
        </div>

        <!-- Visual Column -->
        <div>
            <!-- Slot gambar: Nanti bisa diisi dengan foto mobil bernuansa street photography atau aset digital art yang estetik -->
            <div class="w-full h-80 bg-slate-200 rounded-2xl shadow-xl overflow-hidden relative">
                <img
                    src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1283&q=80"
                    alt="Mobyporto Showroom"
                    class="w-full h-full object-cover"
                >
            </div>
        </div>
    </div>
</div>

<!-- Core Values Section -->
<div class="bg-slate-100 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
        <div class="text-center mb-12">
            <p class="text-sm font-bold tracking-widest text-secondary uppercase mb-3">{{ __('ui.about_our_values') }}</p>
            <h2 class="text-3xl md:text-4xl font-extrabold text-primary">{{ __('ui.about_values_title') }}</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Value 1: Trusted Quality -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-14 h-14 bg-secondary/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary group-hover:text-white transition-colors text-secondary">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3">{{ __('ui.about_value_1_title') }}</h3>
                <p class="text-gray-500 leading-relaxed">{{ __('ui.about_value_1_desc') }}</p>
            </div>

            <!-- Value 2: Transparent Pricing -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-14 h-14 bg-secondary/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary group-hover:text-white transition-colors text-secondary">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3">{{ __('ui.about_value_2_title') }}</h3>
                <p class="text-gray-500 leading-relaxed">{{ __('ui.about_value_2_desc') }}</p>
            </div>

            <!-- Value 3: Expert Support -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:-translate-y-1 transition-transform duration-300 group">
                <div class="w-14 h-14 bg-secondary/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary group-hover:text-white transition-colors text-secondary">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3">{{ __('ui.about_value_3_title') }}</h3>
                <p class="text-gray-500 leading-relaxed">{{ __('ui.about_value_3_desc') }}</p>
            </div>
        </div>
    </div>
</div>

<!-- CTA Banner -->
<div class="bg-primary py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl md:text-3xl font-extrabold text-white mb-4">{{ __('ui.about_cta_title') }}</h2>
        <p class="text-lg text-gray-400 mb-8">{{ __('ui.about_cta_desc') }}</p>
        <a href="{{ route('cars.index') }}" class="inline-flex items-center px-8 py-4 text-lg font-bold rounded-lg text-primary bg-accent hover:bg-yellow-400 transition-colors shadow-lg hover:shadow-xl">
            {{ __('ui.btn_browse') }}
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </a>
    </div>
</div>
@endsection
