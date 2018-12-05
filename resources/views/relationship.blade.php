<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eliminar varios items, Destroy</title>
</head>
<body>
	@foreach ($categories as $category)
		<p>
			{{ $category->name }}
			{{ $category->num_books }}
		</p>
		<ul>
		@foreach($category->books_public as $book)
			<li>{{ $book->title }} <em>{{ $book->status }}</em></li>
		@endforeach
		</ul>
	@endforeach
</body>
</html>