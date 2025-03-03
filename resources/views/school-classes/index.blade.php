<!-- filepath: /c:/Users/letru/Herd/qlihs/resources/views/school-classes/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Classes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold mb-4">All Classes</h3>
                    <ul class="list-disc list-inside">
                        @foreach ($schoolClasses as $schoolClass)
                            <li>
                                <a href="{{ route('school-classes.show', $schoolClass->id) }}" class="text-blue-500 hover:underline">{{ $schoolClass->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>