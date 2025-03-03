<x-guest-layout>
    <div class="bg-white p-8 rounded shadow-md text-center max-w-lg mx-auto">
        <img src="https://cdn.haitrieu.com/wp-content/uploads/2021/11/Logo-DH-Phenikaa-V-Bl.png" alt="Phenikaa University Logo" class="mx-auto mb-4 h-16">
        <h2 class="text-3xl font-bold mb-4">Đăng nhập</h2>

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
                <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-900">Quên mật khẩu?</a>
            </div>
        </form>

        <p class="mt-4">Bạn chưa có tài khoản? Vui lòng tạo tài khoản tại đây <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Đăng Kí</a></p>
    </div>
</x-guest-layout>
