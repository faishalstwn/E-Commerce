<x-guest-layout>
    <div class="w-full sm:max-w-md bg-white rounded-3xl shadow-2xl p-8 sm:p-10 border border-slate-100/90 mx-auto relative z-10">
        <!-- Top Logo & Tagline -->
        <div class="flex justify-center">
            <a href="/">
                <x-application-logo />
            </a>
        </div>

        <!-- Heading & Subtitle -->
        <div class="mt-6 mb-6 text-center">
            <h2 class="text-2xl font-black text-slate-900 tracking-tight">Create your Account</h2>
            <p class="text-sm text-slate-500 mt-1 font-medium">Join ShopVerse to enjoy seamless shopping.</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Full Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                       placeholder="Your full name"
                       class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-500/20 text-sm font-medium transition-all" />
                <x-input-error :messages="$errors->get('name')" class="mt-1 text-rose-600 text-xs font-semibold" />
            </div>

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Email Address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                       placeholder="name@email.com"
                       class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-500/20 text-sm font-medium transition-all" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-rose-600 text-xs font-semibold" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                       placeholder="Create password"
                       class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-500/20 text-sm font-medium transition-all" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-rose-600 text-xs font-semibold" />
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                       placeholder="Repeat password"
                       class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 placeholder-slate-400 focus:bg-white focus:border-blue-600 focus:ring-2 focus:ring-blue-500/20 text-sm font-medium transition-all" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-rose-600 text-xs font-semibold" />
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full py-3.5 bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-bold rounded-full shadow-lg shadow-blue-600/30 text-sm transition-all duration-200 cursor-pointer">
                    Create Account
                </button>
            </div>
        </form>

        <!-- Login Link -->
        <div class="mt-6 text-center text-xs text-slate-600 font-medium">
            Already have an account?
            <a href="{{ route('login') }}" class="font-bold text-blue-600 hover:text-blue-800 hover:underline ms-1">
                Log In
            </a>
        </div>
    </div>
</x-guest-layout>
