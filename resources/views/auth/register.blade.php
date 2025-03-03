<x-guest-layout>
    <div class="flex justify-center mt-6">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="block h-28 w-auto" />
    </div>

    <div class="mt-6">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="name" :value="__('Tên')" />
                <x-text-input id="name" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Mật khẩu')" />
                <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <x-input-label for="password_confirmation" :value="__('Nhập lại mật khẩu')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between mt-4">
                <button type="submit" class="btn btn-primary">Đăng kí</button>
                <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900">Bạn đã có tài khoản?</a>
            </div>
        </form>
    </div>
</x-guest-layout>
