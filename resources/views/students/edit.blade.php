<x-layout>
    <h2>Edit Student</h2>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $student->name }}" required>
        
        <label for="skill">Skill:</label>
        <input type="text" id="skill" name="skill" value="{{ $student->skill }}" required>
        
        <label for="class">Class:</label>
        <input type="text" id="class" name="class" value="{{ $student->class }}" required>
        
        <label for="gpa">GPA:</label>
        <input type="number" id="gpa" name="gpa" step="0.01" min="0" max="4" value="{{ $student->gpa }}" required>
        
        <button type="submit">Update</button>
    </form>
</x-layout>