<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Network</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1>Student Network</h1>
            <a href="/students">All Students</a>
            <a href="/students/create">Create new student</a>
        </nav>
    </header>

    <main class="container">
        {{$slot}}
    </main>

    <footer>
        <p>&copy;Phenikaa Student Network</p>
    </footer>
</body>
</html>