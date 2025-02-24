<x-layout>
    <h2>All Students</h2>

    <form action="{{ route('students.index') }}" method="GET">
        <input type="text" name="search" placeholder="Search students..." value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

    <ul>
        @foreach ($students as $student)
            <li>
                <a href="{{ route('students.show', $student->id) }}">{{ $student->name }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>