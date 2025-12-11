<x-guest-layout>
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-2">Welcome Back</h2>
        <p class="text-gray-500">Sign in to access your account</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" class="text-gray-700 font-semibold" />
            <x-text-input id="email" class="block mt-2 w-full rounded-lg border-gray-200 focus:border-purple-500 focus:ring-purple-500 transition-colors" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="name@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-semibold" />

            <x-text-input id="password" class="block mt-2 w-full rounded-lg border-gray-200 focus:border-purple-500 focus:ring-purple-500 transition-colors"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="••••••••" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center group cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-purple-600 shadow-sm focus:ring-purple-500 cursor-pointer" name="remember">
                <span class="ms-2 text-sm text-gray-600 group-hover:text-gray-900 transition">{{ __('Remember me') }}</span>
            </label>
            
            @if (Route::has('password.request'))
                <a class="text-sm text-purple-600 hover:text-purple-800 font-medium transition" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
        </div>

        <div>
            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transform transition hover:-translate-y-0.5 duration-200">
                {{ __('Sign In') }}
            </button>
        </div>
        
        <div class="text-center mt-6">
            <p class="text-sm text-gray-600">
                Don't have an account? 
                <a href="{{ route('register') }}" class="font-bold text-purple-600 hover:text-purple-800 transition">
                    Create one now
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>