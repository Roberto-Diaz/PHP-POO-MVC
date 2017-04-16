<?php

class Index extends Controllers
{
	public $response;
	function __construct()
	{
		$response="";
		//Se invoca al constructor de la clase padre.
		parent::__construct();
	}

	public function index()
	{
		/*
		al invocarse el metodo constructor de la clase padre, se carga los modelos
		dentro la carpeta Models los cuales una vez cargados son instanciados para
		poder hacer uso de metodos y propiedades.
		*/

		$this->response = $this->model->datosPersonales();
		$dato = $this->response;
		require VIEWS."index.php";
	}

	public function index2($valor){
		$dato = null;
		$i = 0;
		$this->response = $this->model->datosPersonales();
		$datos = $this->response;
		foreach($datos as $value)
		{
			if($datos[$i] == $datos[$valor])
			{	
				$dato = $datos[$i];
			}
			$i++;
		}

		require VIEWS.'index.php';

	}
}

?>