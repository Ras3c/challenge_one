<?php
	session_start();
	if(isset($_SESSION["seccion"])){
		echo "<script>window.location='home.php';</script>";
	}
	date_default_timezone_set("America/Monterrey");
	setlocale(LC_ALL,"es_ES");		
	function manda_login(){
		echo "<script type='text/javascript'>
				window.open('login.php', '_self');
			</script>";
	}
	manda_login();
 ?>
