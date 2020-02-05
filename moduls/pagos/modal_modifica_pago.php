<?php 
	session_start();
	include '../../conectaBD.php';
	include '../../special_caracter.php';
	date_default_timezone_set("America/Monterrey");
	setlocale(LC_ALL,"es_ES");

	if(!isset($_SESSION["id_usuario"]) || empty($_SESSION["id_usuario"])){ 
		header("Location:../../login.php");
	}

	$sql_datos_pago = "SELECT * FROM pago WHERE id_pago = '".$_POST['id_pago']."';";
	$query = $con->query($sql_datos_pago);
	if ($pay = $query->fetch_array()) {
		echo "<div class='modal fade' id='modal_detail_pago'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
						<h4 class='modal-title'>No. Pago <strong>1</strong></h4>						
					</div>
					<div class='modal-body'>
						<div class='col-lg-4 col-md-6 col-sm-12 col-xs-12'>
							<strong>Monto</strong>
						</div>
						<div class='col-lg-8 col-md-6 col-sm-12 col-xs-12'>
							<input type='number' id='monto_mod' value='".$pay["monto"]."' inputmode='numeric' pattern='[1-9]*' class='form-control' min='{0}' required='required' title='Ingresa el monto' placeholder='Ingresa el monto'>
						</div>
						<div class='col-lg-4 col-md-6 col-sm-12 col-xs-12'>
							<strong>Tipo de moneda</strong>
						</div>

						<div class='col-lg-8 col-md-6 col-sm-12 col-xs-12'>
							<select id='moneda_mod' class='form-control' required='required' title='Ingresa el tipo de moneda'>
								<option value='NADA'>Selecciona una opcion</option>
								<option value='MXN'>Pesos Mexicanos</option>
								<option value='DLL'>Dolares</option>
							</select>
						</div>
						<div class='col-lg-4 col-md-6 col-sm-12 col-xs-12'>
							<strong>Banco</strong>
						</div>
						<div class='col-lg-8 col-md-6 col-sm-12 col-xs-12'>
						<select id='banco_mod' class='form-control' required='required'>";
							$sql_bancos = "SELECT * FROM banco;";
							$query = $con->query($sql_bancos);
							while ($b=$query->fetch_array()) {
								echo "<option value='".$b["clave_banco"]."'>".reemplaza_caracter($b["nombre"])."</option>";
							} 
						echo "</select>
						</div>
						<div>&nbsp;</div>
					</div>
					<div class='modal-footer'>
						<button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
						<button type='button' class='btn btn-primary' onclick='guarda_pago();'>Guardar Cambios</button>
						<button type='button' class='btn btn-danger' onclick='elimina_pago();'>Eliminar Pago</button>
					</div>
				</div>
			</div>
		</div>";
		echo "<script type='text/javascript'>
			document.getElementById('moneda_mod').value = '".$pay["moneda"]."';
			document.getElementById('banco_mod').value = '".$pay["banco"]."';
		</script>";
	}

 ?>
