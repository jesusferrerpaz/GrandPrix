<?php
require('../../../config/db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Camiones</title>
	<link href="librerias/Bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="librerias/DataTables/dataTables.css">
    <!--<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">-->
	<script src="librerias/jQuery/jquery-3.7.1.min.js"></script>
	<style type="text/css">
		.top {
    		display: flex;
    		justify-content: space-between;
    		align-items: center;
		}
	</style>
</head>
<body>
	<div class="container-fluid" >
		<div class="row">
			<div class="m-3 col text-center">
				<h2>Lista de Camiones</h2>
				<!--Botones Sin Datatable de Agregar y PDF-->
				<!--<button title="Click para agregar camion" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#funcionesModal" onclick="modalAgregar();">
  				Nuevo
				</button>
				<a class="btn btn-outline-primary" href="reporte_camiones.php" role="button" target="_blank">Descargar PDF</a>-->
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div id="loader" class='text-center'>
					<div class='spinner-border m-5' role='status'></div>
				</div>
				<div id="modales">
					<div class="modal fade" id="funcionesModal" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
  						<div class="modal-dialog">
    						<div class="modal-content"></div>
    					</div>
    				</div>	
				</div>
			</div>
		</div>
		<div id="tabla" class="row">
			
		</div>
	</div>
	
	<script type="text/javascript" src="librerias/Bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="librerias/DataTables/jszip.min.js"></script>
    <script type="text/javascript" src="librerias/DataTables/datatables.js"></script>
    <script type="text/javascript" src="librerias/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
</body>
</html>