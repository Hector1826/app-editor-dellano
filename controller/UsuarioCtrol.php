<?php

/**
 *  Solicita las peticiones al modelo.
 */
session_start();
require_once '../model/UsuarioModel.php';
$user = new Usuario();
#$idUser = isset($_POST['idUser']) ? $_POST['idUser'] : $_SESSION['id'];
$nom = isset($_POST['nombre']) ? cleaning($_POST['nombre']) : '';
$ape = isset($_POST['apellido']) ? cleaning($_POST['apellido']) : '';
$email = isset($_POST['email']) ? cleaning($_POST['email']) : '';
$pass = isset($_POST['pass']) ? cleaning($_POST['pass']) : '';
$idAcceso = isset($_POST['idAcceso']) ? cleaning($_POST['idAcceso']) : 0;
$statuss = isset($_POST['statuss']) ? cleaning($_POST['statuss']) : 0;

if (isset($_GET['response'])) {
    $res = $_GET['response'];
    switch ($res) {
        case SAVE:
            $rspta = $user->agrega($nom, $ape, $email, $pass);
            echo $rspta ? SUCESS : ERROR;
            break;
        case EDIT:
            $rspta = $user->edita($idUser,$nom, $ape, $email, $pass);
            echo $rspta ? SUCESS : ERROR;
            break;
        case LOGIN:
            $rsp = $user->auth($email, $pass);
            if($rsp){
                $_SESSION['id'] = $rsp->idUser;
                $_SESSION['nombre'] = $rsp->nombre;
                $_SESSION['apellido'] = $rsp->apellido;
                $_SESSION['statuss'] = $rsp->statuss;
                $_SESSION['email'] = $rsp->email;
                $_SESSION['pass'] = $rsp->pass;
                $_SESSION['idAcceso'] = $rsp->idAcceso;
                echo json_encode($rsp);
            } else{ echo ERROR; }
        
            break;
        case GET_SINGLE:
            if (isset($_SESSION['id'])) {
                $rspta = $user->getUsuario($_SESSION['id']);
                echo json_encode($rspta);
            } else {
                echo ERROR;
            }
            break;
        case COMPRAS:
            if (isset($_SESSION['id'])) {
                $rspta = $user->findBuy($_SESSION['id']);
                echo json_encode($rspta);
            } else {
                echo ERROR;
            }
            break;
        case OUTPUT:
            session_unset();
            session_destroy();
            echo !isset($_SESSION['id']) ? SUCESS : ERROR;
            break;
        case GET_ALL:
            $rspta = $user->all();
            while ($row = $rspta->fetch_object()) {
                echo json_encode($row);
            }
            break;
    }
} else {
    echo ERROR;
}
