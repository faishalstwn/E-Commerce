<x-layout title="ShopVerse - Daftar Produk">
    <div class="py-12 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="space-y-4 mb-10 text-center md:text-left">
                <h1 class="text-3xl font-extrabold text-white tracking-tight sm:text-4xl">Katalog Produk</h1>
                <p class="text-slate-400 text-base max-w-2xl">
                    Jelajahi seluruh koleksi produk e-commerce terlengkap dengan jaminan harga dan kualitas terbaik.
                </p>
            </div>

            <!-- Filter & Search Bar -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-4 mb-8 bg-slate-900/60 p-4 rounded-xl border border-slate-800">
                <!-- Search Input -->
                <div class="relative w-full md:w-80">
                    <input type="text" placeholder="Cari nama produk..." class="w-full pl-10 pr-4 py-2.5 bg-slate-950 border border-slate-800 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-indigo-500">
                    <svg class="w-4 h-4 text-slate-500 absolute left-3.5 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                <!-- Category Filters -->
                <div class="flex flex-wrap items-center gap-2 w-full md:w-auto">
                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg text-xs font-semibold">Semua</button>
                    <button class="px-4 py-2 bg-slate-950 hover:bg-slate-800 text-slate-400 border border-slate-800 rounded-lg text-xs font-semibold transition-colors">Audio</button>
                    <button class="px-4 py-2 bg-slate-950 hover:bg-slate-800 text-slate-400 border border-slate-800 rounded-lg text-xs font-semibold transition-colors">Wearable</button>
                    <button class="px-4 py-2 bg-slate-950 hover:bg-slate-800 text-slate-400 border border-slate-800 rounded-lg text-xs font-semibold transition-colors">Computer</button>
                    <button class="px-4 py-2 bg-slate-950 hover:bg-slate-800 text-slate-400 border border-slate-800 rounded-lg text-xs font-semibold transition-colors">Fashion</button>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($products as $product)
                    <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition-all duration-300 flex flex-col group">
                        <!-- Product Image -->
                        <div class="aspect-video overflow-hidden bg-slate-950 relative">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            <span class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-md px-2.5 py-1 rounded-md border border-slate-700 text-xs font-semibold text-indigo-400">
                                {{ $product['category'] }}
                            </span>
                        </div>

                        <!-- Details -->
                        <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                            <div>
                                <div class="flex items-center justify-between text-xs text-slate-400 mb-1">
                                    <div class="flex items-center gap-1 text-amber-400 font-semibold">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span>{{ $product['rating'] }}</span>
                                    </div>
                                    <span>({{ $product['reviews_count'] }} ulasan)</span>
                                </div>

                                <h3 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors">
                                    {{ $product['name'] }}
                                </h3>
                                <p class="text-sm text-slate-400 mt-2 line-clamp-2">
                                    {{ $product['description'] }}
                                </p>
                            </div>

                            <div class="pt-4 border-t border-slate-800 flex items-center justify-between">
                                <div>
                                    <div class="text-xs text-slate-400">Harga</div>
                                    <div class="text-xl font-extrabold text-white">Rp {{ number_format($product['price'], 0, ',', '.') }}</div>
                                </div>
                                <a href="/cart" class="px-4 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-semibold text-xs transition-colors shadow-md shadow-indigo-600/20 flex items-center gap-1.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z" />
                                    </svg>
                                    <span>+ Keranjang</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
