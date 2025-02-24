<x-layout>
    <h2>Create New Student</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="skill">Skill:</label>
        <input type="text" id="skill" name="skill" required>
        
        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required>
        
        <label for="gpa">GPA:</label>
        <input type="number" id="gpa" name="gpa" step="0.01" min="0" max="4" required>
        
        <button type="submit">Create</button>
    </form>
</x-layout>