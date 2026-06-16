<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moby Personal Car Showroom</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Work+Sans:wght@600&display=swap" rel="stylesheet">
    <style>
        .font-work-sans {
            font-family: 'Work Sans', sans-serif;
        }
    </style>
</head>
<body class="antialiased flex flex-col min-h-screen bg-slate-50 text-slate-900">
    <header class="bg-primary text-white sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex items-center">
                    <a href="{{ route('cars.index') }}" class="flex-shrink-0 font-bold text-2xl tracking-tighter">
                        MOBY
                    </a>
                </div>
                <nav class="hidden md:block">
                    <ul class="flex space-x-8 text-sm font-semibold items-center">
                        <li><a href="{{ route('cars.index') }}" class="hover:text-accent transition-colors py-2">{{ __('ui.showroom') }}</a></li>
                        <li><a href="#" class="hover:text-accent transition-colors py-2">{{ __('ui.about') }}</a></li>
                        <li><a href="#" class="hover:text-accent transition-colors py-2">{{ __('ui.contact') }}</a></li>
                        
                        <!-- Language Toggle -->
                        <li class="pl-4 border-l border-slate-600">
                            @if(app()->getLocale() == 'id')
                                <a href="{{ route('lang.switch', 'en') }}" class="flex items-center text-slate-300 hover:text-white transition-colors py-2">
                                    EN
                                </a>
                            @else
                                <a href="{{ route('lang.switch', 'id') }}" class="flex items-center text-slate-300 hover:text-white transition-colors py-2">
                                    ID
                                </a>
                            @endif
                        </li>
                    </ul>
                </nav>
                <div class="md:hidden">
                    <button class="text-white hover:text-accent p-2">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-primary text-white mt-20 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="font-bold text-xl mb-4">MOBY</h3>
                <p class="text-gray-400 text-sm">Automotive Excellence.<br>Your trusted personal car showroom.</p>
            </div>
            <div>
                <h4 class="font-bold mb-4">Links</h4>
                <ul class="text-gray-400 text-sm space-y-2">
                    <li><a href="{{ route('cars.index') }}" class="hover:text-white transition-colors">Showroom</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Financing</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Contact</h4>
                <p class="text-gray-400 text-sm">Email: hello@moby.com</p>
                <p class="text-gray-400 text-sm mt-2">WhatsApp: +{{ env('WHATSAPP_NUMBER') }}</p>
            </div>
        </div>
    </footer>
</body>
</html>
