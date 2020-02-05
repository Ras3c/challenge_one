<?php 
	session_start();
	include '../../conectaBD.php';
	date_default_timezone_set("America/Monterrey");
	setlocale(LC_ALL,"es_ES");

	if(!isset($_SESSION["id_usuario"]) || empty($_SESSION["id_usuario"])){ 
		header("Location:../../login.php");
	}

	$sql_delete_pago = "DELETE FROM pago WHERE id_pago = '".$_POST['id_pago']."';";

	if ($con->query($sql_delete_pago)) {
		$res = 'OK';
	}else{
		$res = 'ERROR';
	}
	echo $res;
 ?>