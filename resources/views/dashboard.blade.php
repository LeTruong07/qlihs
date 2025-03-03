<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold mb-4">Xin chào, {{ Auth::user()->name }}!</h3>

                    <!-- User Information -->
                    <div class="mb-6">
                        <h4 class="text-xl font-semibold mb-2">Thông tin người dùng</h4>
                        <ul class="list-disc list-inside">
                            <li><strong>Tên người dùng:</strong> {{ Auth::user()->name }}</li>
                            <li><strong>Email:</strong> {{ Auth::user()->email }}</li>
                            <li><strong>Ngày tham gia:</strong> {{ Auth::user()->created_at->format('M d, Y') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
