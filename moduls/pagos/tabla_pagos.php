<?php 
	session_start();
	include '../../conectaBD.php';
	include '../../special_caracter.php';
	date_default_timezone_set("America/Monterrey");
	setlocale(LC_ALL,"es_ES");

	if(!isset($_SESSION["id_usuario"]) || empty($_SESSION["id_usuario"])){ 
		header("Location:../../login.php");
	}
echo "
<table class='table table-hover display' cellspacing='0' width='100%' id ='tabla_pagos'>
		<thead>
			<tr>
				<th class='text-center col-lg-2 col-md-2 col-sm-2 col-xs-2'>No. Pago</th>
				<th class='text-center col-lg-2 col-md-2 col-sm-2 col-xs-2'>Monto</th>
				<th class='text-center col-lg-2 col-md-2 col-sm-2 col-xs-2'>Fecha y hora</th>
				<th class='text-center col-lg-2 col-md-2 col-sm-2 col-xs-2'>Moneda</th>
				<th class='text-center col-lg-2 col-md-2 col-sm-2 col-xs-2'>Banco</th>
				<th class='text-center col-lg-1 col-md-1 col-sm-1 col-xs-1'>Aprobado</th>
				<th class='text-center col-lg-1 col-md-1 col-sm-1 col-xs-1'>Editar</th>
			</tr>
		</thead>
		<tbody>";
				$sql_pagos = "SELECT * FROM pago WHERE id_user = '".$_SESSION['id_usuario']."'";
				$query = $con->query($sql_pagos);
				while ($p=$query->fetch_array()) {
					if ($p["aprobado"] == '1') {
						$logo_apro = "<i class='text-green fas fa-check-double'";
					}else{
						$logo_apro = "<i class='text-danger fas fa-exclamation-triangle'";
					}
					$sql_bancos_c = "SELECT * FROM banco WHERE clave_banco = '".$p["banco"]."';";
					$query_c = $con->query($sql_bancos_c);
					if ($bc = $query_c->fetch_array()) {
						$banco_n = $bc["nombre"];
					}
					echo "<tr>
						<td class='text-center col-lg-2 col-md-2 col-sm-2 col-xs-2'>".$p["id_pago"]."</td>
						<td class='text-center col-lg-2 col-md-2 col-sm-2 col-xs-2'>$ ".number_format(round($p["monto"], 2), 2, ".", ",")."</td>
						<td class='text-center col-lg-2 col-md-2 col-sm-2 col-xs-2'>".$p["fecha"]." ".$p["hora"]."</td>
						<td class='text-center col-lg-2 col-md-2 col-sm-2 col-xs-2'>".$p["moneda"]."</td>
						<td class='text-center col-lg-2 col-md-2 col-sm-2 col-xs-2'>".reemplaza_caracter($banco_n)."</td>
						<td class='text-center col-lg-1 col-md-1 col-sm-1 col-xs-1'>".$logo_apro." aria-hidden='true'></i></td>
						<td class='text-center col-lg-1 col-md-1 col-sm-1 col-xs-1'><button type='button' onclick='ver_pago(\"$p[id_pago]\");' class='btn btn-primary'><i class='fa fa-pencil-square-o' aria-hidden='true'></button></td>
					</tr>";
				}
		echo "</tbody>
	</table>";
 ?>

<script type="text/javascript">
	$('#tabla_pagos').DataTable({
		order: [[ 0, 'DESC' ]],
		responsive: true,
		'lengthMenu': [15, 30, 45, 60],
		'language':{
			'lengthMenu': 		'Presentando _MENU_ registros por página',
			'zeroRecords': 		'No hay información que coincida con el criterio de busqueda',
			'info': 			'Mostrando página _PAGE_ de _PAGES_',
			'infoEmpty': 		'No hay información disponible',
			'infoFiltered': 	'(filtado de un total de _MAX_ registros)',
			'search': 			'Buscar:',
			'thousands':		',',
			'loadingRecords':	'Cargando...',
			'processing':		'Procesando...',
			'paginate': {
				'first':		'Principio',
				'last':			'Final',
				'next':			'Siguiente',
				'previous':		'Anterior'
			}
		}
	});
</script>