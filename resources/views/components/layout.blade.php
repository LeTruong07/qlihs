<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Network</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Quản Lí Học Sinh</h1>
            <div>
                <a href="/students" class="text-white hover:text-yellow-300 mx-2">All Students</a>
                <a href="/students/create" class="text-white hover:text-yellow-300 mx-2">Create New Student</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto p-4">
        {{$slot}}
    </main>

    <footer class="bg-green-600 text-white p-4 text-center mt-4">
        <p>Phenikaa Quan li Sinh Vien</p>
    </footer>
</body>
</html>