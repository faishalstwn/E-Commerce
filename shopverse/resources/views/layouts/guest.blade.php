<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ShopVerse') }} - Masuk / Daftar</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-900 antialiased selection:bg-blue-600 selection:text-white">
        <!-- Main Fullscreen Container with Shopping Background Image -->
        <div class="min-h-screen flex flex-col justify-between bg-cover bg-center bg-no-repeat relative" style="background-image: url('{{ asset('images/shopping-bg.png') }}');">
            <!-- Dark/Soft Overlay over background image -->
            <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-[2px] z-0"></div>

            <!-- Top Header Navigation Bar (Matching UI Mockup) -->
            <header class="relative z-10 w-full bg-slate-950/60 backdrop-blur-md border-b border-white/10 text-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16">
                        <!-- Left Logo -->
                        <a href="/" class="flex items-center gap-2.5 font-bold text-xl tracking-tight text-white group">
                            <div class="w-9 h-9 rounded-xl bg-blue-600 flex items-center justify-center shadow-md shadow-blue-500/30 group-hover:scale-105 transition-transform duration-200">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                            <span class="font-extrabold text-2xl text-white tracking-tight">ShopVerse</span>
                        </a>

                        <!-- Middle Nav Links -->
                        <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-200">
                            <a href="/" class="hover:text-white transition-colors">Home</a>
                            <a href="/categories" class="hover:text-white transition-colors">Categories</a>
                            <a href="/products" class="hover:text-white transition-colors">Offers</a>
                        </nav>

                        <!-- Right Profile & Cart Actions -->
                        <div class="flex items-center gap-5 text-sm font-medium text-slate-200">
                            <a href="{{ route('login') }}" class="flex items-center gap-1.5 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>Profile</span>
                            </a>
                            <a href="/cart" class="flex items-center gap-1.5 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z" />
                                </svg>
                                <span>Cart</span>
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Centered Auth Card Container -->
            <main class="relative z-10 flex-grow flex items-center justify-center p-4 sm:p-6 lg:p-8">
                {{ $slot }}
            </main>

            <!-- Bottom Footer -->
            <footer class="relative z-10 text-center py-4 text-xs text-white/80 font-medium drop-shadow-md">
                &copy; {{ date('Y') }} ShopVerse. All rights reserved.
            </footer>
        </div>
    </body>
</html>



