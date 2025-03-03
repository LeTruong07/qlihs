<x-layout>
    <div class="max-w-7xl mx-auto py-12 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2 class="text-2xl font-bold mb-4">Tất cả học sinh</h2>

                <!-- Search Bar -->
                <form action="{{ route('students.index') }}" method="GET" class="mb-6">
                    <div class="flex items-center">
                        <input type="text" name="search" placeholder="Tìm kiếm học sinh" value="{{ request('search') }}" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <button type="submit" class="ml-2 btn btn-primary">Tìm</button>
                    </div>
                </form>

                <!-- Students List -->
                @if($students->isEmpty())
                    <p class="text-gray-500">Không tìm thấy học sinh nào.</p>
                @else
                    <ul class="divide-y divide-gray-200">
                        @foreach ($students as $student)
                            <li class="py-4 flex justify-between items-center">
                                <div>
                                    <a href="{{ route('students.show', $student->id) }}" class="text-lg font-semibold text-blue-500 hover:underline">{{ $student->name }}</a>
                                    <p class="text-sm text-gray-500">{{ $student->schoolClass->name }}</p>
                                </div>
                                <div class="flex space-x-2">
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-secondary">Sửa</a>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <!-- Create Button -->
                <div class="mt-6">
                    <a href="{{ route('students.create') }}" class="btn btn-primary">Create New Student</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>