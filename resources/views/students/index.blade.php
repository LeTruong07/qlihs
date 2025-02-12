<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong tin hoc sinh</title>
</head>
<body>
    <p>Hoc sinh</p>
    <li>
        <a href="/students/{{$students[0]["id"]}}">
            {{$students[0]["name"]}}
            <br>
        </a>
        <a href="/students/{{$students[1]["id"]}}">
            {{$students[1]["name"]}}
            <br>
        </a>
        <a href="/students/{{$students[2]["id"]}}">
            {{$students[2]["name"]}}
            <br>
        </a>
    </li>
</body>
</html>