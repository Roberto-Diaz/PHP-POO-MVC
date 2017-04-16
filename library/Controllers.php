<?php

class Controllers
{

	function __construct(){
		$this->LoadClassModel();
	}

	/*
	* La funcion LoadClassModel() tiene el objetivo de cargar todos los archivos dentro de la carpeta Model.
	*
	*/

	function LoadClassModel(){
		/*
		* Con la función get_class() se obtiene el 	nombre de la clase del objeto instanciado que se pase por parametro, en este caso $this toma el de la clase donde se invoque el metodo.
		*/

		$model = get_class($this).'_model';
		$path = "Models/".$model.".php";
	
		if(file_exists($path)){
			require $path;
			$this->model = new $model();		
		}

	}
}



?>