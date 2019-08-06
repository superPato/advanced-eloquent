<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Relacion</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Usuario {{ $user->name }}</h1>
		<div class="row">

			@foreach($user->photos as $photo)
			<div class="card" style="width: 18rem;">
			  <img src="{{ asset("asset/photo/$photo->photo") }}" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="{{ asset("asset/photo/$photo->photo") }}" class="btn btn-primary">Ver</a>
			    <a href="{{ asset("asset/photo/$photo->photo") }}" class="btn btn-info">Descargar</a>
			  </div>
			</div>
			@endforeach


		</div>
	</div>
</body>
</html>