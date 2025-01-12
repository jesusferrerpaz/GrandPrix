<?php
require('../../../../config/db.php');
$sql = "select id_camion,camion,placa,marca,modelo,color,year,tipo,largo,ancho,profundidad,volumen,capacidad_carga,estatus,uni_negocio from llx_tcamiones order by id_camion asc";
$result = $dbm->query($sql);
?>
			<div class="m-0 col">			
				<table id="mostrar" class="table table-striped">
					<thead>
						<tr>
							<!--<th>ID</th>-->
							<th>CAMION</th>
							<th>PLACA</th>
							<th>MARCA</th>
							<th>MODELO</th>
							<th>COLOR</th>
							<th>AÑO</th>
							<th>TIPO</th>
							<th>ALTURA</th>
							<th>ANCHO</th>
							<th>PROFUNDIDAD</th>
							<th>VOLUMEN</th>
							<th>CAPACIDAD DE CARGA</th>
							<th>ESTATUS</th>
							<th>UNIDAD DE NEGOCIO</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
							while ($row = mysqli_fetch_assoc($result)) {
							$id = $row['id_camion'];
							echo "<tr>";
								//echo "<td>".$id."</td>";
								echo "<td>".$row['camion']."</td>";
								echo "<td>".$row['placa']."</td>";
								echo "<td>".$row['marca']."</td>";
								echo "<td>".$row['modelo']."</td>";
								echo "<td>".$row['color']."</td>";
								echo "<td>".$row['year']."</td>";
								echo "<td>".$row['tipo']."</td>";
								echo "<td>".$row['largo']. ($row['largo']!= null? "m":"")."</td>";
								echo "<td>".$row['ancho']. ($row['ancho']!= null? "m":"")."</td>";
								echo "<td>".$row['profundidad']. ($row['profundidad']!= null? "m":"")."</td>";
								echo "<td>".$row['volumen']. ($row['volumen']!= null? "m³":"")."</td>";
								echo "<td>".$row['capacidad_carga']. ($row['capacidad_carga']!= null? "kg":"")."</td>";
								echo "<td>".$row['estatus']."</td>";
								echo "<td>".$row['uni_negocio']."</td>";
								echo "<input type='hidden' name='id_camion' value='".$id."'>";
								echo "<td><button id='btn-modificar' title='Modificar camion' type='button' class='btn btn-outline-success' data-bs-toggle='modal' data-bs-target='#funcionesModal' onclick='modalModificar(\"$id\");'>Modificar</button></td>";
								echo "<td><button id='btn-modificar' title='Modificar camion' type='button' class='btn btn-outline-success' data-bs-toggle='modal' data-bs-target='#funcionesModal' onclick='modalImg(\"$id\");'>Fotos</button></td>";
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
			</div>