<x-layout>
    <div class="p-6 bg-white rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Hoc Sinh id {{ $student->id }}</h2>
        <p class="mb-2"><strong>Name:</strong> {{ $student->name }}</p>
        <p class="mb-2"><strong>Skill:</strong> {{ $student->skill }}</p>
        <p class="mb-2"><strong>Class:</strong> {{ $student->class }}</p>
        <p class="mb-4"><strong>GPA:</strong> {{ $student->gpa }}</p>

        <a href="{{ route('students.edit', $student->id) }}" class="btn">Edit</a>

        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</x-layout>