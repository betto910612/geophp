<?php

class conexion{
	public function DB(){
		$ConDB = new mysqli("localhost", "digisegc_cat", "digiseg1990", "digisegc_adm", 3306);
		if ($ConDB->connect_errno) {
		    echo "Fallo al conectar a MySQL: (" . $ConDB->connect_errno . ") " . $ConDB->connect_error;
		}
		return $ConDB;
	}

	public function Query($var){
		$Datos=$this->DB();
		$Dar=$Datos->query($var);	
		return $Dar;
	}

	public function Msg($texto,$tipo){
		$Tipo = array('Error'=>"alert-error",'Alerta' => "alert",'Info' => "alert-info",'Correcto' => "alert-success");
		$Tipo1 = array('Error'=>"<i class=' icon-remove'></i>",'Alerta' => "<i class='icon-warning-sign'></i>",'Info' => "<i class=' icon-exclamation-sign'></i>",'Correcto' => "<i clas='icon-ok'></i>");
		echo "<div  class='col-sm-12 alert ".$Tipo[$tipo]."'><span style='width:100%;'>".$Tipo1[$tipo]." ".$texto."</spam></div>";
	}

	public function solo_letras($cadena){ 
		$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ "; 
		for ($i=0; $i<strlen($cadena); $i++){ 
			if (strpos($permitidos, substr($cadena,$i,1))===false){ 
			//no es válido; 
			return false; 
			} 
		}  
		//si estoy aqui es que todos los caracteres son validos 
		return true; 
	}  
}

?>