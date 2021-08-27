<?php

/**
 *  # Imagen
 *  Obtiene la consulta solicitada por el usuario
 *  y se retorna el resultado de la solicitud.
 */
session_start();
require_once '../model/ImagenModel.php';
require_once 'GeneraFolio.php';
require_once 'ImagenHelp.php';
$img = new UserImg();
$folio = new Generar();
$idUserImg = isset($_POST['idUserImg']) ? cleaning($_POST['idUserImg']) : 0;
$idCata = isset($_POST['idCata']) ? cleaning($_POST['idCata']) : 0;
$idUser = $_SESSION['id'];
$edo = PENDIENTE;
$cant = isset($_POST['cantidad']) ? cleaning($_POST['cantidad']) : 1;
$costo = isset($_POST['costo']) ? cleaning($_POST['costo']) : 0;
$fecha = date('Y-m-d');
$code = isset($_POST['code']) ? cleaning($_POST['code']) : "";

$no_pedido = $folio->generar(10);
if (isset($_GET['response'])) {
    switch ($_GET['response']) {
        case SAVE:
            $newName = '';
            if (isset($idUserImg)) { /* Genera registro nuevo */
                if (isset($_FILES) && !empty($_FILES)) {
                    $files = array_filter($_FILES, function ($item) {
                        return $item['name'][0] != '';
                    });

                    foreach ($files as $file) {
                        $tmp_name = $file['tmp_name'];
                        $name = $file['name'];
                        $extension = getFileExtension($name);
                        $newName = $folio->generar(10).$extension;
                        $path = DIRECTORIO.'/'.$newName;
                        #echo 'URL: '.$path."\n****************\n";
                        #echo "\n DATA: \n".$newName."\n".$edo."\n".$costo."\n".$cant."\n".$fecha."\n".$no_pedido."\n".$idUser."\n".$idCata."\n ************************";
                        $rspta = $img->insertImg($newName, $edo, $costo, $cant, $fecha, $no_pedido, $idUser, $idCata, $code);
                        echo $rspta ? SUCESS : ERROR;
                        #echo 'NAME: '.$newName."\n***************\n";
                        if ($rspta) {
                            move_uploaded_file($tmp_name, $path);
                        }
                    }
                } else {
                    echo 'No existe archivo';
                }
            } else { /* Editar reistro */
                $rspta = $img->upload($newName, $edo, $costo, $cant, $fecha, $no_pedido, $idUser, $idCata, $code);
            }
            $_SESSION['code'] = $no_pedido;
            break;
       case GET_SINGLE:
            $rspta = $img->getImagen($idUserImg);
            echo json_encode($rspta);
            break;
        case GET_PENDIENTE:
            $rspta = $img->getImgPendiente($idUser);
            while ($row = $rspta->fetch_object()) {
                echo previewImg($row->imagen, $row->idUserImg);
            }
            break;

    }
} else {
}
