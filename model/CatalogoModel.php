<?php

/**
 *  Consultas a la BD para catalogos.
 */
require_once '../controller/config/Conexion.php';
class Catalogo
{
    // contructor
    public function __construct()
    {
    }

    // Agrega catalogo.
    public function insert($name, $width, $heigth, $precio)
    {
        return execQuery("INSERT INTO catalogo (nombreCatalogo,width,heigth,precio) 
                        VALUES('$name',$width,$heigth,$precio)");
    }

    // Agrega catalogo.
    public function editCatalogo($idCata, $name, $width, $heigth, $precio)
    {
        return execQuery("UPDATE catalogo SET nombreCatalogo='$name', 
                                       width =$width, 
                                       heigth = $heigth,
                                       precio = $precio
                                       WHERE idCatalogo=$idCata");
    }

    // Lista catalogo
    public function selectAll()
    {
        return execQuery('SELECT * FROM catalogo');
    }

    // Obtiene catalogo por ID
    public function selectById($idCatalogo)
    {
        return execQueryId("SELECT * FROM catalogo WHERE idCatalogo=$idCatalogo");
    }

    public function disable($idCatalogo)
    {
        return execQueryId("UPDATE catalogo SET  WHERE idCatalogo=$idCatalogo");
    }
}
