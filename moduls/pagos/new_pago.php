<?php 
	session_start();
	include '../../conectaBD.php';
	date_default_timezone_set("America/Monterrey");
	setlocale(LC_ALL,"es_ES");

	if(!isset($_SESSION["id_usuario"]) || empty($_SESSION["id_usuario"])){ 
		header("Location:../../login.php");
	}

	$sql_inser_pago = "INSERT INTO pago (id_user, monto, fecha, hora, aprobado, moneda, banco) VALUES('".$_SESSION['id_usuario']."', '".$_POST['monto']."', '".date('Y-m-d')."', '".date('H:i')."', '1', '".$_POST['moneda']."', '".$_POST['banco']."');";
	if ($con->query($sql_inser_pago)) {
		$res = 'OK';
	}else{
		$res = 'ERROR';
	}
	echo $res;
 ?>