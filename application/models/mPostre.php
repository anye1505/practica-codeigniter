<?php
/**
* 
*/
class Mpostre extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function saveDessert($param){
		$fields = array(
			'nombre' => $param['nombre'],
			'precio' => $param['precio'],
			'cantidad' => $param['cantidad']
		);

		$this->db->insert('postre', $fields);
	}
}