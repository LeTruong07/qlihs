<x-layout>
    <h2>Danh sach hoc sinh</h2>
    <ul>
        @foreach($students as $student)
            <li>
                <x-card href="{{ route('students.show', $student->id) }}" :highlight="$student->skill == 'C#'"> 
                    <h3>{{ $student->name }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>