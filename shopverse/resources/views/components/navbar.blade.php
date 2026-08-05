<nav class="bg-slate-900/90 backdrop-blur-md border-b border-slate-800 sticky top-0 z-50 text-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center gap-3">
                <a href="/" class="flex items-center gap-2 font-bold text-xl tracking-tight text-white group">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center shadow-lg shadow-indigo-500/30 group-hover:scale-105 transition-transform duration-200">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                    <span class="bg-gradient-to-r from-white via-slate-200 to-slate-400 bg-clip-text text-transparent">ShopVerse</span>
                </a>
            </div>

            <div class="hidden md:flex items-center gap-1">
                <a href="/" 
                   class="px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-150 {{ request()->is('/') ? 'bg-indigo-600/20 text-indigo-400 border border-indigo-500/30' : 'text-slate-300 hover:text-white hover:bg-slate-800/60' }}">
                    Halaman Utama
                </a>
                <a href="/products" 
                   class="px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-150 {{ request()->is('products*') ? 'bg-indigo-600/20 text-indigo-400 border border-indigo-500/30' : 'text-slate-300 hover:text-white hover:bg-slate-800/60' }}">
                    Daftar Produk
                </a>
                <a href="/cart" 
                   class="px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-150 {{ request()->is('cart') ? 'bg-indigo-600/20 text-indigo-400 border border-indigo-500/30' : 'text-slate-300 hover:text-white hover:bg-slate-800/60' }}">
                    Halaman Keranjang
                </a>
            </div>

            <div class="flex items-center gap-3">
                <a href="/cart" class="relative p-2 rounded-lg text-slate-300 hover:text-white hover:bg-slate-800 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z" />
                    </svg>
                    <span class="absolute -top-1 -right-1 w-5 h-5 bg-gradient-to-r from-pink-500 to-rose-500 text-white font-bold text-xs rounded-full flex items-center justify-center shadow-md">
                        3
                    </span>
                </a>
            </div>
        </div>
    </div>
</nav>
