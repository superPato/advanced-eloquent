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
			({{ $category->num_books }})
		</p>
		<ul>
		@foreach($category->books as $book)
			<li>
				<strong>{{ $book->title }}</strong>
				{{ $book->description }}
			</li>
		@endforeach
		</ul>
	@endforeach
</body>
</html>