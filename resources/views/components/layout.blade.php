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
            <h1 class="text-2xl font-bold">Quản Lí Học Sinh</h1>
            <div>
                <a href="/students">All Students</a>
                <a href="/students/create">Create New Student</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto p-4 bg-white shadow-md rounded mt-6">
        {{$slot}}
    </main>

    <footer class="bg-blue-600 text-white py-4 mt-6">
        <p class="text-center">Phenikaa Quan li Sinh Vien</p>
    </footer>
</body>
</html>