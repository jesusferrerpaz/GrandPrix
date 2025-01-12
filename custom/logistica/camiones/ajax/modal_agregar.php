<?php
require('../../../../config/db.php');
$sql_uni = "select c_descripcion as uni_negocio from ma_sucursales";

/*-------------------------Modal-------------------*/

print '<div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Camion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form class="row g-3" enctype="multipart/form-data">

        <label for="camion" class="form-label">Camion:</label>

        <input class="form-control" type="text" id="camion" name="camion" autocomplete="off" placeholder="Campo Obligatorio" required/>

        <label for="placa" class="form-label">Placa:</label>

        <input class="form-control" type="text" id="placa" name="placa" autocomplete="off" placeholder="Campo Obligatorio" required/>

        <label for="marca" class="form-label">Marca:</label>
                        
        <input class="form-control" type="text" id="marca" name="marca" autocomplete="off" placeholder="Campo Obligatorio" required/>
                     
        <label for="modelo" class="form-label">Modelo:</label>
                       
        <input class="form-control" type="text" id="modelo" name="modelo" autocomplete="off" placeholder="Campo Obligatorio" required/>
                     
        <label for="color" class="form-label">Color:</label>
                     
        <input class="form-control" type="text" id="color" name="color" autocomplete="off" placeholder="Campo Obligatorio" required/>
                  
        <label for="year" class="form-label">Año:</label>
                   
        <input class="form-control" type="number" id="year" name="year" autocomplete="off" placeholder="Campo Obligatorio" required/>
                    
        <label for="tipo" class="form-label">Tipo:</label>
                       
        <input class="form-control" type="text" id="tipo" name="tipo" autocomplete="off" placeholder="Campo Obligatorio" required/>
                   
        <label for="largo" class="form-label">Altura:</label>
                       
        <input class="form-control" type="number" id="largo" name="largo" autocomplete="off" placeholder="Escriba la altura en Metros" required/>
                 
        <label for="ancho" class="form-label">Ancho:</label>
                    
        <input class="form-control" type="number" id="ancho" name="ancho" autocomplete="off" placeholder="Escriba el ancho en Metros" required/>
                   
        <label for="profundidad" class="form-label">Profundidad:</label>
                      
        <input class="form-control" type="number" id="profundidad" name="profundidad" autocomplete="off" placeholder="Escriba la profundidad en Metros" required/>
                 
        <label for="capacidad" class="form-label">Capacidad de Carga:</label>
                     
        <input class="form-control" type="number" id="capacidad" name="capacidad" autocomplete="off" placeholder="Escriba la capacidad de carga en Kilos" required/>

        <div class="estatus">
          <p>Estatus:</p>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="estatus" id="estatus1" value="Activo">
            <label class="form-check-label" for="estatus">Activo</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="estatus" id="estatus2" value="En Reparacion">
            <label class="form-check-label" for="estatus">En Reparacion</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="estatus" id="estatus3" value="Inactivo">
            <label class="form-check-label" for="estatus">Inactivo</label>
          </div>
        </div>

        <label for="unidad" class="form-label">Unidad de Negocio:</label>
        
        <select id="unidad" name="unidad" class="form-select">';
                                        foreach ($dbm->query($sql_uni) as $row_uni) {
                                        print '<option value="'.$row_uni["uni_negocio"].'">'.$row_uni['uni_negocio'].'</option>';
                                        }

                        print '</select>
      </form>  
      </div>
      <div class="modal-footer">
        <div id="msg" class="" role="alert"></div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <div id="btn-agregar" class="text-center">
          <button type="submit" class="btn btn-primary" onclick="agregar_cam();">Agregar Camion</button>
        </div>
      </div>';
?>