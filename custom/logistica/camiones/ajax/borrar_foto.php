<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header('Location: ../index.php');
    exit;
}
    
require('../../../../config/db.php');
$data = [];
$errors = true;
$rutaImg = "../".$_POST['imagen'];
if (is_dir($rutaImg)) {
    $data['ruta'] = true;
} else {
    $data['ruta'] = false;
}
$id = $_POST['id'];
$id_img = $_POST['id_img'];
if (!empty($rutaImg)) {
    if(is_writable($rutaImg)){
        //Borra el archivo
    $output = unlink($rutaImg);
    if ($output) {
        $data['img'] = 'Imagen Eliminada';
        $errors = false;        
    } else {
        $data['img'] = 'No se pudo eliminar la imagen';
        $errors = true;
    }

        //Borra el registro
    $query = "DELETE FROM llx_tcamiones_img WHERE id=?";
    $stmt = $dbm->prepare($query);
    $result = $stmt->execute([$id_img]);
    if ($result) {
        $data['query'] = 'Registro Eliminado';
        $data['sql'] = $query;
    } else{
        $data['query'] = 'No se pudo eliminar el registro';
        $errors = true;
    }
    $data['id_camion'] = $id;
    $data['id_img'] = $id_img;
    $errors = false;
    } else{
        $data['img'] = "Directorio: ".$rutaImg." no tiene permisos";
        $errors = true;
    }
} else{
    $data['img'] = "Imagen no encontrada";
    $errors = true;
}
// Responder al cliente
$data['errores'] = $errors;
echo json_encode($data);