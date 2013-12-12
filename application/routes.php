<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

Route::get('/', function()
{
	return View::make('home.index');
});

Route::controller('movies');
// Route::get('demo', function()
// {
// 	$a=5;
// 	$b=7;

// 	$peliculas = array(
// 		array(
// 			'name' =>"Batman", 
// 			'desc' =>"Sinopsis de Batman", 
// 			'length' =>"120 min." 
// 			),
// 		array(
// 			'name' =>"Superman", 
// 			'desc' =>"Sinopsis de superman", 
// 			'length' =>"120 min." 
// 			),
// 		array(
// 			'name' =>"El santo", 
// 			'desc' =>"Sinopsis de El santo", 
// 			'length' =>"120 min." 

// 			)
// 		);
// 	//dd($peliculas);

// 	foreach ($peliculas as $pelicula) {
// 		echo $pelicula['name'].'-'.$pelicula['desc'].'-'.$pelicula['length']."<br>";
// 	}
// });

// Route::get('hola',function()
// {
// 	$saludo = 'Hola';
// 	$cosa = "mundo";

// 	// return View::make('hola') ->with(array(
// 	// 	'saludo' => $saludo,
// 	// 	'cosa' => $cosa 
		
// 	// 	));
// 		$peliculas = array(
// 		array(
// 			'name' =>"Batman", 
// 			'desc' =>"Sinopsis de Batman", 
// 			'length' =>"120 min." 
// 			),
// 		array(
// 			'name' =>"Superman", 
// 			'desc' =>"Sinopsis de superman", 
// 			'length' =>"120 min." 
// 			),
// 		array(
// 			'name' =>"El santo", 
// 			'desc' =>"Sinopsis de El santo", 
// 			'length' =>"120 min." 

// 			)
// 		);
// 		return View::make('hola')->with('peliculas', $peliculas);
// });

// Route::get('ver',function()
// {
// 	// $peliculas = DB::First('SELECT * FROM movies');
// 	// return $peliculas ->name;

// 	//$descripcion = DB::only('SELECT name FROM movies WHERE id = 3');
// 	//return  $descripcion;

// 	$peliculas = Movie::all();
// 	return View::make('ver')->with('peliculas', $peliculas);
// });

// Route::get('agregar',function(){
// 	return View::make('agregar');
// });

// Route::post('agregar',function(){
// 	$pelicula = $_POST;

// 	$movie = Movie::create($pelicula);

// 	if ($movie) {
// 		echo "OK";
// 	}
// 	return View::make('agregar');
// });
/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application. The exception object
| that is captured during execution is then passed to the 500 listener.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function($exception)
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});