<?php

/**
 *  Solicita las peticiones al modelo.
 */
require_once '../model/CatalogoModel.php';
$cata = new Catalogo();
$idCata = isset($_POST['idCata']) ? cleaning($_POST['idCata']) : 0;
$name = isset($_POST['name']) ? cleaning($_POST['name']) : '';
$width = isset($_POST['width']) ? cleaning($_POST['width']) : 0;
$heigth = isset($_POST['heigth']) ? cleaning($_POST['heigth']) : 0;
$precio = isset($_POST['precio']) ? cleaning($_POST['precio']) : 0;
$token = isset($_POST['token']) ? cleaning($_POST['token']) : 0;
if (isset($_GET['response'])) {
    switch ($_GET['response']) {
        case GET_ALL:
            $rspta = $cata->selectAll();
            echo '<option value="0">-- Seleccione --</option>';
            while ($row = $rspta->fetch_object()) {
                echo '<option value="'.$row->idCatalogo.'">'.$row->nombreCatalogo.' '.$row->width.' x '.$row->heigth.'</option>';
            }
            break;
        case GET_SINGLE:
            $rspta = $cata->selectById($idCata);
            echo json_encode($rspta);
            break;
    }
} else {
}
