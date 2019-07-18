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
				<a href="{{ route('getEdit', $user->id) }}">Editar</a>
				<ul>
				@foreach($user->manyBooks as $book)
					<li>{{ $book->title }}</li>
				@endforeach	
				</ul>
			</li>
		@endforeach
		</ul>
	</body>
</html>