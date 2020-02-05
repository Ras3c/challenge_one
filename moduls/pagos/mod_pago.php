<?php 
	session_start();
	include '../../conectaBD.php';
	date_default_timezone_set("America/Monterrey");
	setlocale(LC_ALL,"es_ES");

	if(!isset($_SESSION["id_usuario"]) || empty($_SESSION["id_usuario"])){ 
		header("Location:../../login.php");
	}

	$sql_mod_pago = "UPDATE pago SET monto = '".$_POST['monto']."', moneda = '".$_POST['moneda']."', banco = '".$_POST['banco']."' WHERE id_pago = '".$_POST['id_pago']."';";

	if ($con->query($sql_mod_pago)) {
		$res = 'OK';
	}else{
		$res = 'ERROR';
	}
	echo $res;
 ?>