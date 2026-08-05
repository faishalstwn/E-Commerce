<footer class="bg-slate-950 border-t border-slate-800 text-slate-400 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="space-y-4 md:col-span-1">
                <div class="flex items-center gap-2 font-bold text-xl text-white">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-indigo-500 to-pink-500 flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                    <span>ShopVerse</span>
                </div>
                <p class="text-sm text-slate-400 leading-relaxed">
                    Platform e-commerce modern dengan pengalaman belanja terbaik, aman, dan terpercaya.
                </p>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-slate-200 uppercase tracking-wider mb-4">Navigasi Utama</h3>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="/" class="hover:text-indigo-400 transition-colors">Halaman Utama</a></li>
                    <li><a href="/products" class="hover:text-indigo-400 transition-colors">Daftar Produk</a></li>
                    <li><a href="/cart" class="hover:text-indigo-400 transition-colors">Halaman Keranjang</a></li>
                </ul>
            </div>

=            <div>
                <h3 class="text-sm font-semibold text-slate-200 uppercase tracking-wider mb-4">Kategori Popular</h3>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="/products" class="hover:text-indigo-400 transition-colors">Elektronik & Gadget</a></li>
                    <li><a href="/products" class="hover:text-indigo-400 transition-colors">Fashion & Pakaian</a></li>
                    <li><a href="/products" class="hover:text-indigo-400 transition-colors">Aksesoris Premium</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-slate-200 uppercase tracking-wider mb-4">Informasi</h3>
                <p class="text-sm text-slate-400 mb-3">Dapatkan promo menarik dan diskon eksklusif setiap minggu.</p>
                <div class="flex gap-2">
                    <input type="email" placeholder="Email Anda..." class="w-full px-3 py-2 bg-slate-900 border border-slate-800 rounded-lg text-sm text-white placeholder-slate-500 focus:outline-none focus:border-indigo-500">
                    <button class="px-4 py-2 bg-indigo-600 hover:bg-indigo-500 text-white rounded-lg text-sm font-medium transition-colors">
                        Kirim
                    </button>
                </div>
            </div>
        </div>

        <div class="border-t border-slate-900 mt-10 pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>&copy; {{ date('Y') }} ShopVerse E-Commerce. All rights reserved.</p>
            <div class="flex gap-4">
                <a href="#" class="hover:text-slate-400">Privasi</a>
                <a href="#" class="hover:text-slate-400">Syarat & Ketentuan</a>
                <a href="#" class="hover:text-slate-400">Bantuan</a>
            </div>
        </div>
    </div>
</footer>
