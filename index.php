<?php

require 'config.php';
/*
*
$url obtiene los datos ingresados por la url del navegador,
devuleve el indixe.php si no hay datos con ayuda del .htaccess
que esta maniputaldo las urls.
*
*/
$url = isset($_GET["url"])?$_GET["url"]:"Index/index";

$url = explode("/", $url);
//var_dump($url);

$controller="";
$method= "";

if(isset($url[0]))
{
	$controller= $url[0];
}

if(isset($url[1]))
{
	$method = $url[1];
}

/*
*
Función para cargar los archivos de la carpeta library.
*
*/
spl_autoload_register(function($class){

	if(file_exists(LBS.$class.".php"))
	{
		require LBS.$class.".php";
	}

});

//new Controllers();

//Se obtiene la dirección del controlador.

$controllersPath = 'Controllers/'.$controller.'.php';

if(file_exists($controllersPath))
{

//Cargo la clase del controlador
require $controllersPath;

//Se instancia la clase con el puro nombre
$controller = new $controller();	

	if(isset($method)){
		if(method_exists($controller, $method)){
			//Nombre del metodo a utilizar dentro de la clase, ingresado desde la URL.
			$controller->{$method}();
		}
		else
		{
			echo "no existe metodo dentor del controlador";
		}
	}

}
else
{
	//require 'Controllers/'.$controller;
	echo "No existe el controlador";
}


?>