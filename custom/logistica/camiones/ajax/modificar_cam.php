<?php
//Verificar que se haya accedido mediante POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Redirige a otra página o muestra un mensaje de error
    header('Location: ../index.php');
    exit;
}
require('../../../../config/db.php');
$errors = [];
$data = [];
$data['success'] = false;
$id=$_POST['id'];
$camion=$_POST['camion'];
$placa=$_POST['placa'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$year=$_POST['year'];
$tipo=$_POST['tipo'];
$largo=$_POST['largo'];
$ancho=$_POST['ancho'];
$profundidad=$_POST['profundidad'];
$capacidad=$_POST['capacidad'];
$estatus=$_POST['estatus'];
$unidad=$_POST['unidad'];
$volumen = 0;

//Validar que los datos no esten vacios
if (!empty($camion) && !empty($placa) && !empty($marca) && !empty($modelo) && !empty($color) && !empty($year) && !empty($tipo) && isset($estatus) && !empty($unidad)) {
    
        //Si los numericos estan vacios colocar 0
        if (empty($largo)) {
            $largo = 0;
        }
        if (empty($ancho)) {
            $ancho = 0;
        }
        if (empty($profundidad)) {
            $profundidad = 0;
        }
        if (empty($capacidad)) {
            $capacidad = 0;
        }

        $volumen=$largo * $ancho * $profundidad;

        //Validar que sean cadenas de texto
        if (is_string($camion) && is_string($placa) && !is_numeric($marca) && !is_numeric($modelo) && !is_numeric($color) && is_numeric($year) && !is_numeric($tipo)) {
                $year = floatval($year);
                $largo = floatval($largo);
                $ancho = floatval($ancho);
                $profundidad = floatval($profundidad);
                $capacidad = floatval($capacidad);
                //$estatus = floatval($estatus);
            //Ejecutar SQL

            try {

                //Consulta preparada
                $query = "UPDATE llx_tcamiones SET camion=?, placa=?, marca=?, modelo=?, color=?, year=?, tipo=?, largo=?, ancho=?, profundidad=?, volumen=?, capacidad_carga=?, estatus=?, uni_negocio=? WHERE id_camion=?";
                $stmt = $dbm->prepare($query);
                $stmt->execute([$camion, $placa, $marca, $modelo, $color, $year, $tipo, $largo, $ancho, $profundidad, $volumen, $capacidad, $estatus, $unidad, $id]);

                // Consulta exitosa
                $data['success'] = "Camion Modificado!";
                $errors = 'Sin errores :)';

            } catch (PDOException $e) {
                // Manejo de errores
                $errors = $e->getMessage();
            }
            

        }else{
            $errors = 'Tipo de dato invalido!';
        }
}else {
    $errors = 'Hay campos vacios!';
}
$data['datos'] = [
    'camion' => $camion,
    'placa' => $placa,
    'marca' => $marca,
    'modelo' => $modelo,
    'color' => $color,
    'Year' => $year,
    'Tipo' => $tipo,
    'Largo' => $largo,
    'Ancho' => $ancho,
    'Profundidad' => $profundidad,
    'Volumen' => $volumen,
    'Capacidad' => $capacidad,
    'Estatus' => $estatus,
    'Unidad' => $unidad
];

$data['errors'] = $errors;
echo json_encode($data);
?>