<?php
/**
 *  Constantes.
 */
#define('API_PAYPAL', 'AVpzbAWyhEPhZvhLFvWhsZJkAlGr_4Ai8tJS5lJUtWcQowlF2okNbox_WywdonyysIwGOkhnubFbgaNs');
#define('SECRET_PAYPAL', 'ELFNozlyvECnkchq4kcLwL4HLCtvOCmOwRcn25PyptEPovB_PSrwY9k7CsgJ75vC-X8WIFg2p-rtf2C9');


// Constantes para realizar la conexión a la BD
define("DB_HOST", "localhost");                 // Dirección servidor.
#define("DB_USERNAME", "dellatfn_app");        # Usuario para servidor dellano
#define("DB_PASSWORD", "dellatfn_app");        # Contraseña servidor dellano
#define("DB_NAME", "dellatfn_app");            // Nombre de la BD.
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "dellatfn_studio");
define("DB_ENCODE", "utf8");                    // Caracteres.

/* Parametros que recibe el ws */
define('GET_SINGLE', 'GET_SINGLE');
define('GET_DETAIL', 'GET_DETAIL');
define('GET_ALL', 'GET_ALL');
define('GET_PENDIENTE','GET_PENDIENTE');
define('GET_LIST_USER', 'GET_LIST_USER');


define('EDIT', 'EDIT');				# Editar
define('REMOVE', 'REMOVE');			# Eliminar
define('SAVE', 'SAVE');				# Guardar
define('LOGIN', 'LOGIN');			# Ingresar
define('OUTPUT', 'OUTPUT');			# Salir

/* Respuestas del servidor */
define('SUCESS', 'SUCCESS');
define('ERROR', 'FAILS');

/* Estados del pedido */
define('PENDIENTE', 'PENDIENTE');
define('COMPLETADO', 'COMPLETADO');
define('CANCELADO', 'CANCELADO');
define('PAGADO', 'PAGADO');
define('INCOMPLETO', 'INCOMPLETO');
define('COMPRAS', 'COMPRAS');
/* Ruta donde se alojaran las imagenes */
define('DIRECTORIO', '../view/assets/uploads');


define('CONEX', '../controller/config/Conexion.php');