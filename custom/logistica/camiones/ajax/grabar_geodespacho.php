<?php
if (empty($_GET)) {
    // Redirige a otra página o muestra un mensaje de error
    header('Location: ../../geodespacho.php');
    die();
}
include("../../../../Vmobile/conf/dbmssql.php");

//date_default_timezone_set("America/Caracas");
$fec_actual = date('Y-m-d H:i:s');
$chofer = $_GET['chofer'];
$guias = $_GET['guia'];
$j=0;
// Utilizar explode para dividir el string en un array
$arrayGuias = explode(",", $guias);
// Imprimir los números individualmente
foreach ($arrayGuias as $guia) {

        //echo $j.": ".$guia . "\n";
        $j++;
        $string.="'$guia',";
}
$guias = substr($string,0,-1);
//echo $guias;
//SQL Para ver si hay alguna guia asignada a un geodespacho
$sql0 = "select nro_gcarga, nro_geo_des
from llx_mae_gcarga lmg
where nro_gcarga in ($guias)
and nro_geo_des != 0;";
$resul0 = pg_query($conexion, $sql0);
// Comprobar si la consulta devolvió alguna fila
/*if (pg_num_rows($resul0) > 0) {
        echo "La consulta devolvió " . pg_num_rows($resul0) . " filas.\n";
} else {
        echo "No se encontraron registros.\n";
}*/
//SQL GEODESPACHO
$sql1 = "select lmg.nro_geo,lt.nombre, lmg.fec_cre, lmg.fec_mod, lmg.status from llx_ma_geodespacho lmg
left join llx_tchoferes lt on lmg.idchofer = lt.idchofer
order by fec_cre asc;";

//Tomar maximo valor del id de Geodespacho
$sql2 = "select max(lmg.nro_geo) from llx_ma_geodespacho lmg;";
$result2 = pg_query($conexion,$sql2);
$max_id = pg_fetch_row($result2);
$id_geo = $max_id[0]+1;

//Obtener el ID del chofer
$sql3 = "select idchofer from llx_tchoferes where nombre='$chofer'";
$result3 = pg_query($conexion,$sql3);
$id_chofer = pg_fetch_row($result3);


//Validar variables
//Insert geodespacho
$sql4 = "insert into llx_ma_geodespacho (nro_geo, idchofer, fec_cre, fec_mod, status) values ($id_geo,$id_chofer[0],'$fec_actual','$fec_actual','E')";
$result4 = pg_query($conexion,$sql4);
//Update en mae_gcarga
$sql5 = "update llx_mae_gcarga set nro_geo_des = $id_geo where nro_gcarga in ($guias);";
$result5 = pg_query($conexion,$sql5);
?>