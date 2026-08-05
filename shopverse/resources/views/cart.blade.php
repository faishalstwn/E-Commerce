<x-layout title="ShopVerse - Halaman Keranjang">
    <div class="py-12 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-extrabold text-white tracking-tight sm:text-4xl mb-8">Keranjang Belanja</h1>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 space-y-4">
                    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6">
                        <div class="divide-y divide-slate-800">
                            @foreach ($cartItems as $item)
                                <div class="py-4 first:pt-0 last:pb-0 flex flex-col sm:flex-row items-center justify-between gap-4">
                                    <div class="flex items-center gap-4 w-full sm:w-auto">
                                        <div class="w-20 h-20 rounded-xl overflow-hidden bg-slate-950 flex-shrink-0 border border-slate-800">
                                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <h3 class="font-bold text-white text-base">{{ $item['name'] }}</h3>
                                            <div class="text-xs text-indigo-400 mt-1">Rp {{ number_format($item['price'], 0, ',', '.') }} / unit</div>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between sm:justify-end gap-6 w-full sm:w-auto">
                                        <div class="flex items-center gap-2 bg-slate-950 border border-slate-800 rounded-lg p-1">
                                            <button class="w-7 h-7 rounded bg-slate-900 hover:bg-slate-800 text-slate-300 flex items-center justify-center font-bold text-sm transition-colors">-</button>
                                            <span class="w-8 text-center text-sm font-semibold text-white">{{ $item['quantity'] }}</span>
                                            <button class="w-7 h-7 rounded bg-slate-900 hover:bg-slate-800 text-slate-300 flex items-center justify-center font-bold text-sm transition-colors">+</button>
                                        </div>

                                        <div class="text-right">
                                            <div class="text-xs text-slate-500">Subtotal</div>
                                            <div class="text-base font-extrabold text-white">
                                                Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}
                                            </div>
                                        </div>

                                        <button class="p-2 text-slate-500 hover:text-rose-400 transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-2">
                        <a href="/products" class="inline-flex items-center gap-2 text-sm font-semibold text-indigo-400 hover:text-indigo-300 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            <span>Lanjut Belanja</span>
                        </a>
                    </div>
                </div>

                <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 h-fit space-y-6">
                    <h2 class="text-xl font-bold text-white tracking-tight border-b border-slate-800 pb-4">Ringkasan Pesanan</h2>

                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between text-slate-400">
                            <span>Subtotal Produk</span>
                            <span class="text-white font-medium">Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between text-slate-400">
                            <span>Estimasi PPN (11%)</span>
                            <span class="text-white font-medium">Rp {{ number_format($tax, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between text-slate-400">
                            <span>Ongkos Kirim</span>
                            <span class="text-white font-medium">Rp {{ number_format($shipping, 0, ',', '.') }}</span>
                        </div>
                        <div class="border-t border-slate-800 pt-3 flex justify-between text-base font-bold">
                            <span class="text-white">Total Bayar</span>
                            <span class="text-indigo-400 text-xl font-extrabold">Rp {{ number_format($total, 0, ',', '.') }}</span>
                        </div>
                    </div>

                    <button class="w-full py-3.5 px-4 bg-indigo-600 hover:bg-indigo-500 text-white font-bold rounded-xl shadow-lg shadow-indigo-600/30 transition-all flex items-center justify-center gap-2">
                        <span>Lanjut ke Pembayaran</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>

                    <div class="flex items-center justify-center gap-2 text-xs text-slate-500 pt-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <span>Transaksi 100% Aman & Terenkripsi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
