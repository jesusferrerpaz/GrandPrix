<?php
if ($_SERVER['REQUEST_METHOD'] !== 'GET'){
                header('Location: ../index.php');
                exit;
            }
require('../../../../config/db.php');
$id = $_GET['id'];
$aquery = "select * from llx_tcamiones_img where id_camion = $id";
$sql = "select camion,placa,marca,modelo,color,year,tipo,largo,ancho,profundidad,volumen,capacidad_carga,estatus,uni_negocio from llx_tcamiones where id_camion=$id";
$result = $dbm->query($sql);
$row = mysqli_fetch_assoc($result);
$placa = "'".$row['placa']."'";
$rp = $dbm->query($aquery);
while($rowimg = mysqli_fetch_assoc($rp)){
  $img[] = $rowimg["ruta"];
  $id_img[] = $rowimg["id"];
}
if (empty($img)) {
  $total_img = 0;
} else{
  $total_img = count($img);
}

  echo '<div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Fotos del Camion</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">';
          if ($total_img == 0) {

            echo "<h5>No se han cargado imagenes</h5>";
          } else{
            echo '<!--Carousel-->
          <div id="carouselExampleCaptions" class="carousel slide">';
        echo '<div class="carousel-indicators">';
        for ($i=0; $i < $total_img; $i++) {
          if ($i == 0) {
            echo'<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="'.$i.'" class="active" aria-current="true" aria-label="Slide '.$i.'"></button>';   
          } else{
            echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="'.$i.'" aria-label="Slide '.$i.'"></button>';
          }
        }
        echo'</div>
            <div class="carousel-inner">';
            for ($i=0; $i < $total_img; $i++) {
                if ($i==0) {
                  echo' <div class="carousel-item active">';
                } else{
                  echo' <div class="carousel-item">';
                }
               echo'<img src="'.$img[$i].'" class="d-block w-100" alt="'.$placa.'">
               <input id="id_img" type="hidden" value="'.$id_img[$i].'"/>

               </div>';
            }
      echo '</div>';
          }

     echo'<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>';

        echo'<!--Formulario-->
              <form class="row g-3" enctype="multipart/form-data">
                <div class="mb-3">
                <label for="foto" class="form-label"></label>
                <input class="form-control" type="file" id="foto" multiple accept=".jpg, .jpeg, .png">
                </div>
              </form>
        <div class="modal-footer">
        <div id="msg" class="alert" role="alert"></div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <div id="btn-subir" class="text-center">
            <button id="btnEnviar" type="submit" class="btn btn-success" onclick="subir_foto('.$id.','.$placa.');">Cargar Foto</button>
          </div>
          <div id="btn-eliminar" class="text-center">
            <button id="btnBorrar" type="submit" class="btn btn-danger" onclick="Confirmar('.$id.');">Eliminar Foto</button>
          </div>
        </div>';
?>