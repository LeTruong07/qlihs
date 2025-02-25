<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Network</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white py-4">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">Quản Lí Học Sinh</a>
            <div>
                <a href="/students" class="hover:underline">All Students</a>
                <a href="/students/create" class="hover:underline">Create New Student</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto p-4 bg-white shadow-md rounded mt-6">
        @if (session('success'))  <!--them vao mot thanh thong bao neu cac route thanh cong-->
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        {{$slot}}
    </main>

    <footer class="bg-blue-600 text-white py-4 mt-6">
        <p class="text-center">Phenikaa Quan li Sinh Vien</p>
    </footer>
</body>
</html>