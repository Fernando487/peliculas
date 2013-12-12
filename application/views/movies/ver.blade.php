@layout('master')

@section('contenido')
	@forelse($peliculas as $pelicula)
	<ul>
	<li>{{$pelicula->name}}</li>
	</ul>
	@empty
	No hay peliculas
	@endforelse
@endsection