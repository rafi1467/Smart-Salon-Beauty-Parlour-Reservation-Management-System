<x-guest-layout>
    <div class="mb-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-2">Create Account</h2>
        <p class="text-gray-500">Join our community today</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Full Name')" class="text-gray-700 font-semibold" />
            <x-text-input id="name" class="block mt-2 w-full rounded-lg border-gray-200 focus:border-purple-500 focus:ring-purple-500 transition-colors" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your full name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" class="text-gray-700 font-semibold" />
            <x-text-input id="email" class="block mt-2 w-full rounded-lg border-gray-200 focus:border-purple-500 focus:ring-purple-500 transition-colors" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="name@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div>
            <x-input-label for="phone" :value="__('Phone Number')" class="text-gray-700 font-semibold" />
            <x-text-input id="phone" class="block mt-2 w-full rounded-lg border-gray-200 focus:border-purple-500 focus:ring-purple-500 transition-colors" type="text" name="phone" :value="old('phone')" autocomplete="tel" placeholder="+880..." />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-semibold" />

            <x-text-input id="password" class="block mt-2 w-full rounded-lg border-gray-200 focus:border-purple-500 focus:ring-purple-500 transition-colors"
                            type="password"
                            name="password"
                            required autocomplete="new-password"
                            placeholder="At least 8 characters" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700 font-semibold" />

            <x-text-input id="password_confirmation" class="block mt-2 w-full rounded-lg border-gray-200 focus:border-purple-500 focus:ring-purple-500 transition-colors"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Repeat password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transform transition hover:-translate-y-0.5 duration-200">
                {{ __('Register') }}
            </button>
        </div>
        
        <div class="text-center mt-6">
            <p class="text-sm text-gray-600">
                Already have an account? 
                <a href="{{ route('login') }}" class="font-bold text-purple-600 hover:text-purple-800 transition">
                    Sign in here
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>