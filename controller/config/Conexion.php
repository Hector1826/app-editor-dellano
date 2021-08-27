<?php

require_once 'Global.php';

$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

mysqli_query($con, 'SET NAMES "'.DB_ENCODE.'"');
if (mysqli_connect_errno()) {
    printf("Fallo conexion %s\n", mysqli_connect_error());
    exit();
} 
if (!function_exists('execQuery')) {
    // Funcion que retorna 1 -> OK, 0 -> NO.
    function execQuery($sql) {
        global $con;
        $query = $con->query($sql);
        return $query;
    }
    // Devuelve un solo registro
    function execQueryId($sql) {
        global $con;
        $query = $con->query($sql);
        $row = $query->fetch_object();
        return $row;
    }
    function cleaning($str) {
        global $con;
        $str = mysqli_real_escape_string($con, trim($str));
        return htmlspecialchars($str);
    }
    function getFileExtension(string $filename): string {
        //$filename = 1.jpg            |   ["1", "jpg"]       | return ".jpg"
        $name = explode('.', $filename);

        return '.'.array_pop($name);
    }
}
?>