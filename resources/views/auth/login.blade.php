<x-guest-layout>
    <div class="flex justify-center mt-6">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="block h-28 w-auto" />
    </div>

    <div class="mt-6">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Mật khẩu')" />
                <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between mt-4">
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
                <a href="{{ route('register') }}" class="text-sm text-gray-600 hover:text-gray-900">Bạn chưa có tài khoản?</a>
            </div>
        </form>
    </div>
</x-guest-layout>
