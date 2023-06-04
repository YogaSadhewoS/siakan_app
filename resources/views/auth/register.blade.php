<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Logo -->
        <div style="display: flex; justify-content: center; width: 80%; margin: 0 auto; margin-bottom: 5%">
            <a href="/">
                <img src="{{ asset('images/logoarpus.png') }}" alt="Logo Arpus" style="width: 60px; height: 70px;">
            </a>
        </div>

        <!-- Name -->
        <div style="width: 80%; margin: 0 auto">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4" style="width: 80%; margin: 0 auto; margin-top: 3%">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4" style="width: 80%; margin: 0 auto; margin-top: 3%">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4" style="width: 80%; margin: 0 auto; margin-top: 3%">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-primary-button style="background-color: #009D27; width: 80%; border-radius: 24px;">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        <div class="flex items-center justify-center mt-1 text-sm">
            <p>
                Sudah punya akun?
                <a
                    href="{{ route('login') }}" style="color: #008AD7;">
                    {{ __('Klik disini') }}
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
