<x-layout>
    <div class="max-w-7xl mx-auto py-12 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2 class="text-2xl font-bold mb-4">Thông tin chi tiết học sinh</h2>
                <p class="mb-2"><strong>Mã sinh viên:</strong> {{ $student->id }}</p>
                <p class="mb-2"><strong>Tên:</strong> {{ $student->name }}</p>
                <p class="mb-2"><strong>Kĩ năng:</strong> 
                    @if(is_array($student->skills))
                        {{ implode(', ', $student->skills) }}
                    @else
                        {{ $student->skills }}
                    @endif
                </p>
                <p class="mb-2"><strong>Lớp:</strong> {{ $student->schoolClass->name }}</p>
                <p class="mb-4"><strong>GPA:</strong> {{ $student->gpa }}</p>

                <div class="flex space-x-2">
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-secondary">Sửa</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>