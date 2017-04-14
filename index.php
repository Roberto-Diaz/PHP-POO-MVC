<?php

/*
*
$url obtiene los datos ingresados por la url del navegador,
devuleve el indixe.php si no hay datos con ayuda del .htaccess
que esta maniputaldo las urls.
*
*/
$url = isset($_GET["url"])?$_GET["url"]:null;

$url = explode("/", $url);
//var_dump($url);

$controller="";
$method= "";

if(isset($url[0])){
	$controller= $url[0];
}

if(isset($url[1])){
	$method = $url[1];

}

print($controller);
print($method);




?>