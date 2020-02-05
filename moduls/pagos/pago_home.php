<?php 
	session_start();
	include '../../conectaBD.php';
	include '../../special_caracter.php';
	date_default_timezone_set("America/Monterrey");
	setlocale(LC_ALL,"es_ES");

	if(!isset($_SESSION["id_usuario"]) || empty($_SESSION["id_usuario"])){ 
		header("Location:../../login.php");
	}
 ?>

<div class="container-fluid">
	<div class="col-lg-offset-1 col-lg-10 col-md-12 col-sm-12 col-xs-12 text-center">
		<h2>ESTATUS DE TU CUENTA</h2>
		<h1>SALDO: <strong class="text-green">$ 10,000</strong></h1>
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive'>
		<button type="button" class="btn btn-primary btn-lg" onclick="add_pago();">Añadir pago</button>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="espacio_tabla_pagos">
				
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal_add_pago">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Nuevo Pago</h4>
			</div>
			<div class="modal-body">
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<strong>Ingresa el monto</strong>
				</div>
				<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
					<input type="number" id="monto" inputmode='numeric' pattern='[1-9]*' class="form-control" min="{0}" required="required" title="Ingresa el monto" placeholder="Ingresa el monto">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<strong>Selecciona el tipo de moneda</strong>
				</div>

				<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
					<select id="moneda" class="form-control" required="required" title="Ingresa el tipo de moneda">
						<option value="NADA">Selecciona una opcion</option>
						<option value="MXN">Pesos Mexicanos</option>
						<option value="DLL">Dolares</option>
					</select>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<strong>Selecciona el Banco</strong>
				</div>
				<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
					<select id="banco" class="form-control" required="required">
						<?php 
							$sql_bancos = "SELECT * FROM banco;";
							$query = $con->query($sql_bancos);
							while ($b=$query->fetch_array()) {
								echo "<option value='".$b["clave_banco"]."'>".reemplaza_caracter($b["nombre"])."</option>";
							} 
						?>
					</select>
				</div>
				<div>&nbsp;</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary" onclick="guarda_pago_new();">Guardar Pago</button>
			</div>
		</div>
	</div>
</div>

<div id='espacio_modal_detail'></div>
<input type='text' id='id_hide' style='display: none;'>

<script type="text/javascript">
	cargar_tabla_pagos();
</script>