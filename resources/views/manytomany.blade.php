<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Many to Many</title>
	</head>
	<body>
		<h1>Muchos a muchos "Many to Many"</h1>

		<ul>
		@foreach($users as $user)
			<li>
				<strong>Author</strong>: {{ $user->name }}
				<ul>
				@foreach($user->books as $book)
					<li>{{ $book->title }}</li>
				@endforeach	
				</ul>
			</li>
		@endforeach
		</ul>
	</body>
</html>