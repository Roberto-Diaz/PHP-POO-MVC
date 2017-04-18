<?php

class Index extends Controllers
{
	
	function __construct()
	{
	
		//Se invoca al constructor de la clase padre.
		parent::__construct();
	}

	public function index()
	{
		/*
		Se realiza un llamado del objeto $this->view para poder haceder al metodo reder() el cual en el primer parametro toma el nombre de la clase con ayuda de get_class().
		*/
		
		$this->view->render($this,'index');
	}


}

?>