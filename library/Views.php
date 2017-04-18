<?php
		
class Views
{
	function __construct(){

	}

	//Metodo para ejecutar las vistas.
	function render($controller, $view)
	{
		$controllers = get_class($controller);

		require VIEWS.DFT.'head.php';
		require VIEWS.$controllers.'/'.$view.'.php';
		require VIEWS.DFT.'footer.php';
	}
}

?>