<?php
            //Subir Foto
            if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
                header('Location: ../index.php');
                exit;
            }
                require('../../../../config/db.php');
                $data['foto'] = 'Sin Cargar';
                $errors = true;
                $id=$_POST['id'];
                $placa=$_POST['placa'];
                $imagenes = $_FILES['archivos'];
                if(!empty($imagenes)){
                    $numImagenes = count($imagenes['name']);

                    $carpeta_destino = '../img_cam/' . $placa.'/';

                    if (!is_dir($carpeta_destino)) {
                        mkdir($carpeta_destino, 755, true);
                    }

                    for ($i = 0; $i < $numImagenes; $i++) {
                      $nombreArchivo = $imagenes['name'][$i];
                      $rutaTemporal = $imagenes['tmp_name'][$i];
                      $imginfo = getimagesize($rutaTemporal);
                      if (!$imginfo) {
                        $errors = 'Formato invalido';
                        $data['errores'] = $errors;
                        echo json_encode($data);
                        die();
                      }
                      $rutaDestino = $carpeta_destino.$id.'_'.$nombreArchivo;
                      $rutasql = 'img_cam/' . $placa.'/'.$id.'_'.$nombreArchivo;

                        // Comprimir la imagen
                      $calidadCompresion = 80; // Ajusta la calidad de compresión según tus necesidades

                      $sub=substr($nombreArchivo, -3);      //Obtener el formato


                        //Verificar que la imagen sea valida
                        if($imginfo['mime']=='image/jpeg' || $imginfo['mime']=='image/png'){
                              if($imginfo['mime']=='image/jpeg'){
                                    $imagenOriginal = imagecreatefromjpeg($rutaTemporal);
                              }else{
                                    $imagenOriginal = imagecreatefrompng($rutaTemporal);
                              }

                            // Obtener las dimensiones de la imagen original
                            $anchoOriginal = imagesx($imagenOriginal);
                            $altoOriginal = imagesy($imagenOriginal);

                            // Definir el nuevo tamaño deseado de la imagen
                            $nuevoAncho = 800; // Especifica el ancho deseado en píxeles
                            $factorReduccion = $nuevoAncho / $anchoOriginal;
                            $nuevoAlto = round($altoOriginal * $factorReduccion);

                            // Crear una nueva imagen en blanco con las dimensiones reducidas
                            $nuevaImagen = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                            // Redimensionar la imagen original a la nueva imagen con las dimensiones reducidas
                            imagecopyresampled($nuevaImagen, $imagenOriginal, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $anchoOriginal, $altoOriginal);

                            // Guardar la nueva imagen comprimida en la ruta de destino
                            if($imginfo['mime']=='image/jpeg'){
                            $guardado = imagejpeg($nuevaImagen, $rutaDestino, $calidadCompresion);
                            }else{
                            $guardado = imagepng($nuevaImagen, $rutaDestino, 9);
                            }
                            // Liberar la memoria utilizada por las imágenes
                            imagedestroy($imagenOriginal);
                            imagedestroy($nuevaImagen);
                            if ($guardado) {
                                try{
                                    // Insertar la ruta de la imagen comprimida en la base de datos
                                    $query = "INSERT INTO llx_tcamiones_img (id_camion, ruta) VALUES (?,?)";
                                    $stmt = $dbm->prepare($query);
                                    $result = $stmt->execute([$id, $rutasql,]);
                                    if ($result) {
                                        $data['foto'] = 'Fotos Cargadas!';
                                        $errors = false;
                                    } else{
                                        $errors = 'Error la guardar en la base de datos';
                                    }
                                
                                } catch(PDOException $e){
                                    $errors = $e->getMessage();
                                }
                            } else{
                                $errors = 'La imagen no se guardo';
                            }
                        }
                    }
                }
    $data['errores'] = $errors;
    echo json_encode($data);
    die();
?>