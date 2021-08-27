<?php

/**
 *  Consultas a la BD para Imagen.
 */
require_once '../controller/config/Conexion.php';
class UserImg {
    // contructor
    public function __construct() { }
    

    // Registra imagenes de usuario
    public function insertImg($imagen, $edo, $costo, $cantidad, $fecha, $no_pedido, $idUser, $idCata, $code)
    {
        return execQuery("INSERT INTO user_img VALUES(0,'$imagen','$edo',$costo,$cantidad,'$fecha','$no_pedido',$idUser,$idCata,'$code');");
    }

    // Edita detalle_imagen
    public function upload($idUserImg, $imagen, $edo, $costo, $cantidad, $idUser, $idCata)
    {
        return execQuery("UPDATE user_img SET 
                                imagen = '$imagen', 
                                edoPedido='$edo',
                                costo = $costo,
                                cantidad = $cantidad
                                idUser=$idUser,
                                idCatalogo=$idCata
                     WHERE idUserImg=$idUserImg");
    }

    // Elimina registro
    public function delete($idUserImg) {
        return execQuery("DELETE FROM user_img WHERE idUserImg=$idUserImg");
    }

    // Obtiene registro detalle_imagen
    public function getImagen($idUserImg) {
        return execQueryId("SELECT * FROM user_img WHERE idUserImg=$idUserImg");
    }

    public function getLastId() {
        return execQueryId('SELECT MAX(idUserImg) as id FROM user_img');
    }

    public function getAllImgUser($idUser, $code) {
        return execQuery("SELECT * FROM user_img WHERE idUser=$idUser AND no_pedido='$code'");
    }

    public function getImgPendiente($idUser) {
        return execQuery("SELECT * FROM user_img WHERE idUser=$idUser AND edoPedido='PENDIENTE'");
    }
}
