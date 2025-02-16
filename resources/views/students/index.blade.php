<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong tin hoc sinh</title>
</head>
<body>
    <p>Hoc sinh</p>
    <ul>
        @foreach($students as $student)
            <li>
                <p>{{$student['name']}}</p>
                <a href="/students/{{$student['id']}}">View details</a>
            </li>
        @endforeach
    </ul>
</body>
</html>