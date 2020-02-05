<?php 
session_start();
date_default_timezone_set("America/Monterrey");
setlocale(LC_ALL,"es_ES");
include "conectaBD.php";

	if ($_POST['usuario'] != '' || isset($_POST["usuario"]) || $_POST['contrase'] != '' || isset($_POST["contrase"])) {
		$sql_get_user = "SELECT * FROM clientes WHERE activo = '1' AND user_login = '".$_POST['usuario']."' AND password = '".$_POST['contrase']."';";
		$query = $con->query($sql_get_user);
	
		if ($r=$query->fetch_array()) {
				$res = "OK";
				$_SESSION["id_usuario"] = trim($r["id_cliente"]);
		}else{
			$res = 'WRONG_PASS';
		}
		echo $res;
	}else{
		if(!isset($_SESSION["id_usuario"]) || empty($_SESSION["id_usuario"])){ 
			header("Location:login.php");
		}else{
			header("Location:home.php");
		}
	}
 ?>