<?php
require 'app/Models/Conexion.php';
require 'app/Models/Usuario.php';
use UPT\Usuario;
use UPT\Conexion;
class UsuarioController
{

	public function saludar(){
		echo "Todo bien";
	}

	/*public function crear(){
		$usuario = new Conexion();
		 
	}
    function login(){
		require 'app/views/login.php';
	}

	function verificarCredenciales (){
		$correo= $_POST["correo"];
		$contrasenia= $_POST["pass"];
		$estatus="Sesion iniciada";
		require "app/Views/login.php";
	}*/ 

	function Registro (){

		 require "app/Views/Registro.php";
	}

	function verificarRegistro (){
		require "app/Views/Registro.php";
		$usuario = new Usuario();
		//
 		$usuario->nombre=$_POST['nombre'];
 		$usuario->apellidoPaterno=$_POST['apellidoP'];
 		$usuario->apellidoMaterno=$_POST['apellidoM'];
 		$usuario->correo=$_POST['correo'];
 		$usuario->edad=$_POST['edad'];
 		$usuario->contrasenia=$_POST['contrasenia'];
 		$usuario->crear();
 		

	}

}
?>