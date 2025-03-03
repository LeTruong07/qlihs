<x-layout>
    <div class="max-w-7xl mx-auto py-12 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2 class="text-2xl font-bold mb-4">Chỉnh sửa thông tin học sinh</h2>
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tên</label>
                        <input type="text" id="name" name="name" value="{{ $student->name }}" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    <div class="mb-4">
                        <label for="skills" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kỹ năng</label>
                        <select id="skills" name="skills[]" multiple required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            @foreach ($skills as $skill)
                                <option value="{{ $skill }}" {{ in_array($skill, $student->skills) ? 'selected' : '' }}>{{ $skill }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="school_class_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Lớp</label>
                        <select id="school_class_id" name="school_class_id" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            @foreach ($classes as $schoolClass)
                                <option value="{{ $schoolClass->id }}" {{ $student->school_class_id == $schoolClass->id ? 'selected' : '' }}>{{ $schoolClass->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="gpa" class="block text-sm font-medium text-gray-700 dark:text-gray-300">GPA</label>
                        <input type="number" id="gpa" name="gpa" step="0.01" min="0" max="4" value="{{ $student->gpa }}" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>