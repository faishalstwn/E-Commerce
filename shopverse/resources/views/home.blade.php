<x-layout title="ShopVerse - Halaman Utama">
    <!-- Hero Section -->
    <section class="relative overflow-hidden pt-12 pb-20 md:pt-20 md:pb-32 bg-gradient-to-b from-slate-900 to-slate-950">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-indigo-900/30 via-slate-900/0 to-slate-950/0 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto space-y-6">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-xs font-semibold uppercase tracking-wider">
                    <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span>
                    Koleksi Terbaru 2026 Ready
                </div>

                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight">
                    Temukan Produk Impian Anda dengan <span class="bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">Kualitas Terbaik</span>
                </h1>

                <!-- Subtitle -->
                <p class="text-lg text-slate-400 leading-relaxed">
                    ShopVerse menghadirkan ragam pilihan produk berkualitas premium, garansi resmi, dan pengiriman super cepat ke seluruh Indonesia.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                    <a href="/products" class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-semibold text-sm transition-all duration-200 shadow-lg shadow-indigo-600/30 hover:shadow-indigo-500/50 flex items-center justify-center gap-2">
                        <span>Jelajahi Produk</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="/cart" class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-slate-200 border border-slate-800 font-semibold text-sm transition-all duration-200 flex items-center justify-center gap-2">
                        <span>Lihat Keranjang</span>
                    </a>
                </div>
            </div>

            <!-- Stats Bar -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto mt-16 p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 backdrop-blur-md">
                <div class="text-center">
                    <div class="text-2xl font-bold text-white">10K+</div>
                    <div class="text-xs text-slate-400 mt-1">Pelanggan Puas</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-white">500+</div>
                    <div class="text-xs text-slate-400 mt-1">Produk Pilihan</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-white">4.9 / 5</div>
                    <div class="text-xs text-slate-400 mt-1">Rating Toko</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-white">24/7</div>
                    <div class="text-xs text-slate-400 mt-1">Layanan Bantuan</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="py-16 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-10">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-white tracking-tight">Produk Unggulan</h2>
                    <p class="text-slate-400 text-sm mt-1">Pilihan terpopuler paling banyak diminati minggu ini.</p>
                </div>
                <a href="/products" class="hidden sm:flex items-center gap-1 text-sm font-semibold text-indigo-400 hover:text-indigo-300 transition-colors">
                    Lihat Semua Produk
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Product Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($featuredProducts as $product)
                    <div class="bg-slate-900 border border-slate-800/80 rounded-2xl overflow-hidden hover:border-slate-700 transition-all duration-300 group flex flex-col">
                        <!-- Image Container -->
                        <div class="relative aspect-square overflow-hidden bg-slate-950">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            @if ($product['is_new'])
                                <span class="absolute top-3 left-3 bg-indigo-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider shadow">Baru</span>
                            @endif
                        </div>

                        <!-- Card Details -->
                        <div class="p-5 flex-grow flex flex-col justify-between space-y-4">
                            <div>
                                <span class="text-xs text-indigo-400 font-medium">{{ $product['category'] }}</span>
                                <h3 class="text-base font-semibold text-white mt-1 group-hover:text-indigo-400 transition-colors line-clamp-1">
                                    {{ $product['name'] }}
                                </h3>
                                <div class="flex items-center gap-1 mt-2 text-amber-400 text-xs font-semibold">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <span>{{ $product['rating'] }}</span>
                                </div>
                            </div>

                            <div class="pt-2 border-t border-slate-800 flex items-center justify-between">
                                <span class="text-lg font-bold text-white">Rp {{ number_format($product['price'], 0, ',', '.') }}</span>
                                <a href="/cart" class="p-2 rounded-lg bg-indigo-600/20 text-indigo-400 hover:bg-indigo-600 hover:text-white transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
