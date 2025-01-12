<?php
require('../../../../config/db.php');
$id = $_GET['id'];
$sql = "select camion,placa,marca,modelo,color,year,tipo,largo,ancho,profundidad,volumen,capacidad_carga,estatus,uni_negocio from llx_tcamiones where id_camion=$id";
$sql_uni = "select c_descripcion as uni_negocio from ma_sucursales";
$result = $dbm->query($sql);

  $row = mysqli_fetch_assoc($result);
  $camion = $row['camion'];
  $placa = $row['placa'];
  $marca = $row['marca'];
  $modelo = $row['modelo'];
  $color = $row['color'];
  $year = $row['year'];
  $tipo = $row['tipo'];
  $largo = $row['largo'];
  $ancho = $row['ancho'];
  $profundidad = $row['profundidad'];
  $volumen = $row['volumen'];
  $capacidad = $row['capacidad_carga'];
  $estatus = $row['estatus'];
  $unidad = $row['uni_negocio'];



/*-------------------------Modal-------------------*/

echo '<div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Camion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3" enctype="multipart/form-data">

        <input type="hidden" id="id_camion" name="id_camion" value="'.$id.'">

        <label for="camion" class="form-label">Camion:</label>

        <input class="form-control" type="text" id="camion" name="camion" value="'.$camion.'" autocomplete="off" placeholder="Campo Obligatorio" required/>

        <label for="placa" class="form-label">Placa:</label>

        <input class="form-control" type="text" id="placa" name="placa" value="'.$placa.'" autocomplete="off" placeholder="Campo Obligatorio" required/>

        <label for="marca" class="form-label">Marca:</label>
                        
        <input class="form-control" type="text" id="marca" name="marca" value="'.$marca.'" autocomplete="off" placeholder="Campo Obligatorio" required/>
                     
        <label for="modelo" class="form-label">Modelo:</label>
                       
        <input class="form-control" type="text" id="modelo" name="modelo" value="'.$modelo.'" autocomplete="off" placeholder="Campo Obligatorio" required/>
                     
        <label for="color" class="form-label">Color:</label>
                     
        <input class="form-control" type="text" id="color" name="color" value="'.$color.'" autocomplete="off" placeholder="Campo Obligatorio" required/>
                  
        <label for="year" class="form-label">Año:</label>
                   
        <input class="form-control" type="number" id="year" name="year" value="'.$year.'" autocomplete="off" placeholder="Campo Obligatorio" required/>
                    
        <label for="tipo" class="form-label">Tipo:</label>
                       
        <input class="form-control" type="text" id="tipo" name="tipo" value="'.$tipo.'" autocomplete="off" placeholder="Campo Obligatorio" required/>
                   
        <label for="largo" class="form-label">Altura:</label>
                       
        <input class="form-control" type="number" id="largo" name="largo" value="'.$largo.'" autocomplete="off" placeholder="Escriba la altura en Metros" required/>
                 
        <label for="ancho" class="form-label">Ancho:</label>
                    
        <input class="form-control" type="number" id="ancho" name="ancho" value="'.$ancho.'" autocomplete="off" placeholder="Escriba el ancho en Metros" required/>
                   
        <label for="profundidad" class="form-label">Profundidad:</label>
                      
        <input class="form-control" type="number" id="profundidad" name="profundidad" value="'.$profundidad.'" autocomplete="off" placeholder="Escriba la profundidad en Metros" required/>
                 
        <label for="capacidad" class="form-label">Capacidad de Carga:</label>
                     
        <input class="form-control" type="number" id="capacidad" name="capacidad" value="'.$capacidad.'" autocomplete="off" placeholder="Escriba la capacidad de carga en Kilos" required/>

        <div class="estatus">
          <p>Estatus:</p>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="estatus" id="estatus1" value="Activo" '.($estatus=='Activo'? "checked":"").'>
            <label class="form-check-label" for="estatus">Activo</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="estatus" id="estatus2" value="En Reparacion" '.($estatus=='En Reparacion'? "checked":"").'>
            <label class="form-check-label" for="estatus">En Reparacion</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="estatus" id="estatus3" value="Inactivo" '.($estatus=='Inactivo'? "checked":"").'>
            <label class="form-check-label" for="estatus">Inactivo</label>
          </div>
        </div>

        <label for="unidad" class="form-label">Unidad de Negocio:</label>
        
        <select id="unidad" name="unidad" class="form-select">';
                                        foreach ($dbm->query($sql_uni) as $row_uni) {
                                          if($unidad == $row_uni["uni_negocio"]){
                                            $selected = "selected";
                                          } else {
                                            $selected = "";
                                            }
                                        echo '<option value="'.$row_uni["uni_negocio"].'" '.$selected.'>'.$row_uni['uni_negocio'].'</option>';
                                        }

  echo '</select>
      </form> 
      </div>
      <div class="modal-footer">
      <div id="msg" class="" role="alert"></div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <div id="btn-modificar" class="text-center">
          <button type="submit" class="btn btn-primary" onclick="modificar_cam();">Modificar Camion</button>
        </div>
      </div>';
?>