<?php 

class Index_model
{

	private $data=array();

	function __construct(){
		$this->data=array("php", "jQuery", "CSS");
	}

	function datosPersonales(){
		return $this->data;
	}


}

?>