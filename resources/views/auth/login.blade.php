<x-guest-layout>
    <!-- Session Status -->
    @if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
    @endif
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div style="width: 80%; margin: 0 auto">
            <div style="display: flex; justify-content: center;">
                <a href="/">
                    <img src="{{ asset('images/logoarpus.png') }}" alt="Logo Arpus" style="width: 60px; height: 70px;">
                </a>
            </div>
            <h1
            style="font-weight: 600; font-size: 21px; line-height: 32px; text-align: center; letter-spacing: 0.05em; margin-bottom: 5%; color: #B5B6B1;">
            Sistem Informasi Arsip <br> Kearsitekturan dan Kartografi</h1>
            
            <!-- Email Address -->
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4" style="width: 80%; margin: 0 auto; margin-top: 3%">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        {{--  <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>  --}}

        <div class="mt-4 flex items-center justify-center">
            <x-primary-button style="background-color: #009D27; width: 80%; border-radius: 24px;">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
        <div class="flex items-center justify-center mt-1 text-sm">
            <p>
                Belum punya akun? <a style="color: #008AD7;" href="{{ route('register') }}">
                    Daftar Akun
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
