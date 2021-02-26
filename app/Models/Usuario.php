<?php

namespace UPT;

class Usuario extends Conexion
{
	public $id;
	public $nombre;
	public $apellidoPaterno;
	public $apellidoMaterno;
	public $correo;
	public $edad;
	public $contrasenia;

	public function __constructuc()
	{
		parent::__constructuc();
	}

	function crear(){
		$pre = mysqli_prepare($this->con, "INSERT INTO usuarios(nombre,apellido_p,apellido_m,correo,edad,contrasenia) VALUES (?,?,?,?,?,?)");
		$pre-> bind_param("ssssis",$this->nombre,$this->apellidoPaterno,$this->apellidoMaterno,$this->correo,$this->edad,$this->contrasenia);
		$pre-> execute();

	}

}

?>