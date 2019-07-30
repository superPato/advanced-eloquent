<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>N + 1</title>
</head>
<body>
    <h1>Libros</h1>
    <ul>
    @foreach ($books as $book)
        <li>
            <strong>{{ $book->title }}</strong> - 
            <em>{{ $book->category->name }}</em> author ({{ $book->user->name }})
        </li>
    @endforeach
    </ul>
</body>
</html>