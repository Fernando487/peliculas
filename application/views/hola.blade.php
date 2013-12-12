<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
	<title>Hola</title>
</head>
<body>
  @foreach($peliculas as $pelicula)
  		<div>{{ $pelicula['name'] }}<br>
  		{{ $pelicula['desc'] }}<br>
  		{{ $pelicula['length'] }}</div><br>
  @endforeach

  @if(count($peliculas))
  	Si hay peliculas disponibles<br>
  @endif

  @forelse($peliculas as $pelicula)
  	la pelicula es {{$pelicula['name']}}<br>
  @empty
  	No hay peliculas
  @endforelse	
 </body>
</html>