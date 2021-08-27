<?php 
/**
 *  Clase Usuario: 
 * 		- Consultas sql para todo lo relacionado con el usuario.*/
require_once '../controller/config/Conexion.php';

class Usuario {
	# constructor bacio.
	function __construct(){ }

	/**
     * Método para agregar un usuario
     * @author  Héctor Hdez.
     * @param   $nombre, $apellido, $email, $pass
     * @return  boolean
     */
	public function agrega($nombre, $apellido, $email, $pass, $status=2, $idAcceso=1) {
        return execQuery("INSERT INTO 
        		usuario(idUser, nombre, apellido, email, pass, idAcceso, statuss)
         		VALUES(0,'$nombre','$apellido','$email','$pass',$status,$idAcceso);"
        );
    }

    /**
     * Método para editar un usuario
     * @author  Héctor Hdez.
     * @param   $nombre, $apellido, $email, $pass
     * @return  boolean
     */
	public function edita($id, $nombre, $apellido, $email, $pass, $status=2, $idAcceso=1) {
        return execQuery("UPDATE 
        	usuario SET nombre  ='$nombre', apellido ='$apellido', 
        				email   ='$email',  pass     ='$pass',
        				statuss =$status,   idAcceso ='$idAcceso',
                                        WHERE idUser = $id");
    }

    /**
     * Método para buscar el registro con el ID
     * @author  Héctor Hdez.
     * @param   $id
     * @return  array
     */
	public function find($id) {
        return execQueryId("SELECT * FROM usuario WHERE idUser = $id");
    }

    /**
     * Método para autenticar un usuario
     * @author  Héctor Hdez.
     * @param   $email, $pass
     * @return  array
     */
	public function auth($email,$pass) {
        return execQueryId("SELECT * FROM usuario WHERE email ='$email',pass='$pass'");
    }

    /**
     * Método para obtener las compras de un usuario
     * @author  Héctor Hdez.
     * @param   $email, $pass
     * @return  array
     */
	public function findBuy($id) {
        return execQuery("SELECT * FROM usuario WHERE email ='$email',pass='$pass'");
    }
}
?>