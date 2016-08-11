<?php require_once("../modelo/conexion.php");

if (!empty($_REQUEST['Usuario'])&&!empty($_REQUEST['Password'])) {
	$As=new conexion();
	$Validar=$As->Query("SELECT * FROM usuarios WHERE usuario='".$_REQUEST['Usuario']."' AND contrasenia='".$_REQUEST['Password']."';");
	if ($Validar->num_rows>0) {
		return "<p class='alert alert-success'>El usuario es correcto.</p>";
	}else{
		return "<p class='alert alert-danger'>El usuario es incorrecto.</p>";
	}
}else{
	return "<p class='alert alert-info'>Ingresa tu usuario y contraseña.</p>";
}



?>