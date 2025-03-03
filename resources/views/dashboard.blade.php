<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bảng điều khiển') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold mb-4">Xin chào, {{ Auth::user()->name }}!</h3>

                    <!-- Thong tin nguoi dung -->
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

            <!-- Hoat dong gan day -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h4 class="text-xl font-semibold mb-2">Hoạt động gần đây</h4>
                    <ul class="list-disc list-inside">
                        <li>Không có hoạt động nào gần đây</li>
                    </ul>
                </div>
            </div>

            <!-- Thong so -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h4 class="text-xl font-semibold mb-2">Thống kê</h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg">
                            <h5 class="text-lg font-semibold">Tổng số học sinh</h5>
                            <p class="text-2xl">{{ \App\Models\Student::count() }}</p>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg">
                            <h5 class="text-lg font-semibold">Tổng số lớp học</h5>
                            <p class="text-2xl">{{ \App\Models\SchoolClass::count() }}</p>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg">
                            <h5 class="text-lg font-semibold">Tổng số khoa</h5>
                            <p class="text-2xl">{{ \App\Models\Faculty::count() }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h4 class="text-xl font-semibold mb-2">Liên kết nhanh</h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <a href="{{ route('students.index') }}" class="bg-blue-500 text-white p-4 rounded-lg text-center">
                            Quản lý học sinh
                        </a>
                        <a href="{{ route('school-classes.index') }}" class="bg-green-500 text-white p-4 rounded-lg text-center">
                            Quản lý lớp học
                        </a>
                        <a href="{{ route('faculties.index') }}" class="bg-purple-500 text-white p-4 rounded-lg text-center">
                            Quản lý khoa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
