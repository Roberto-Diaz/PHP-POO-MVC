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
		al invocarse el metodo constructor de la clase padre, se carga los modelos dentro la carpeta Models los cuales una vez cargados son instanciados para poder hacer uso de metodos y propiedades.
		*/

		$this->response = $this->model->datosPersonales();
		$datos = $this->response;
		require VIEWS."index.php";
	}
}

?>