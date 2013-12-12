<?php 
	class Movies_Controller extends Base_Controller
	{
		public $restful = true;

		public function get_index(){
			$peliculas = Movie::all();

			return View::make('movies.ver')->with('peliculas', $peliculas);
		}

		public function get_agregar(){
			return View::make('movies.agregar');
		}

		public function post_agregar(){
			echo $movie= (Movie::create($_POST)) ? "se ingreso" : "no se ingreso";

			return View::make('movies.agregar');
		}
	}
 ?>