@layout('master')

@section('contenido')
	<form action="" method="POST">
		Nombre:<input name="name" /><br>
		Descripcion:<textarea name="desc"></textarea><br>
		Duracion:<input name="length" /><br>
		Genero:<input name="genero" /><br>
		<input type="submit" value="Subir pelicula" />
	</form>
@endsection