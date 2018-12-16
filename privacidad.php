<?php
include "db.php";
$eliminar = "DELETE FROM chat" ;
$ejecutarlimpieza = $conexion->query($eliminar);
$carpeta = 'temp';//ruta de carpeta en servidor
foreach(glob($carpeta . "/*") as $archivos_carpeta) // elimina todos los archivos de la carpeta de manera recursiva
{
    echo $archivos_carpeta;
    if (is_dir($archivos_carpeta))
    {
        eliminarDir($archivos_carpeta);
    }
    else
    {
        unlink($archivos_carpeta);
    }
}
rmdir($carpeta);//solo funciona rmdir si el directorio esta vacio.
?>
