<x-layout title="ShopVerse - Tambah Produk">
    <div class="py-12 bg-slate-950">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Header Section -->
            <div class="mb-8 flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-extrabold text-white tracking-tight">Tambah Produk Baru</h1>
                    <p class="text-slate-400 text-sm mt-1">Lengkapi formulir di bawah ini untuk menambahkan produk ke e-commerce.</p>
                </div>
                <a href="{{ route('products.index') }}" class="px-4 py-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 text-sm font-semibold transition-colors">
                    &larr; Kembali
                </a>
            </div>

            <!-- Form Card -->
            <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 sm:p-8 shadow-xl">
                <form action="{{ route('products.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Nama Produk -->
                        <div class="md:col-span-2">
                            <label for="name" class="block text-sm font-medium text-slate-300 mb-2">Nama Produk <span class="text-rose-500">*</span></label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Contoh: Wireless Noise-Canceling Headphones" required
                                class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-sm transition-all @error('name') border-rose-500 @enderror">
                            @error('name')
                                <p class="mt-2 text-xs text-rose-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Kategori Produk -->
                        <div>
                            <label for="category_id" class="block text-sm font-medium text-slate-300 mb-2">Kategori <span class="text-rose-500">*</span></label>
                            <select name="category_id" id="category_id" required
                                class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-sm transition-all @error('category_id') border-rose-500 @enderror">
                                <option value="" disabled selected>-- Pilih Kategori --</option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="mt-2 text-xs text-rose-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Harga Produk -->
                        <div>
                            <label for="price" class="block text-sm font-medium text-slate-300 mb-2">Harga (Rp) <span class="text-rose-500">*</span></label>
                            <input type="number" name="price" id="price" value="{{ old('price') }}" placeholder="1499000" min="0" step="1" required
                                class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-sm transition-all @error('price') border-rose-500 @enderror">
                            @error('price')
                                <p class="mt-2 text-xs text-rose-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Stok Produk -->
                        <div>
                            <label for="stock" class="block text-sm font-medium text-slate-300 mb-2">Stok <span class="text-rose-500">*</span></label>
                            <input type="number" name="stock" id="stock" value="{{ old('stock', 10) }}" placeholder="10" min="0" step="1" required
                                class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-sm transition-all @error('stock') border-rose-500 @enderror">
                            @error('stock')
                                <p class="mt-2 text-xs text-rose-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- URL Gambar Produk -->
                        <div>
                            <label for="image" class="block text-sm font-medium text-slate-300 mb-2">URL Gambar Produk</label>
                            <input type="url" name="image" id="image" value="{{ old('image') }}" placeholder="https://images.unsplash.com/..."
                                class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-sm transition-all @error('image') border-rose-500 @enderror">
                            @error('image')
                                <p class="mt-2 text-xs text-rose-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Deskripsi Produk -->
                        <div class="md:col-span-2">
                            <label for="description" class="block text-sm font-medium text-slate-300 mb-2">Deskripsi Produk</label>
                            <textarea name="description" id="description" rows="4" placeholder="Tuliskan spesifikasi dan penjelasan lengkap mengenai produk..."
                                class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 text-sm transition-all @error('description') border-rose-500 @enderror">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="mt-2 text-xs text-rose-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-800">
                        <a href="{{ route('products.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold text-sm transition-colors">
                            Batal
                        </a>
                        <button type="submit" class="px-6 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-semibold text-sm transition-all shadow-lg shadow-indigo-600/30">
                            Simpan Produk
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-layout>
