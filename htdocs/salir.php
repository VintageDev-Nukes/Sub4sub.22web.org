<?php
//  *****************************
//  Sistema de Login Simple con PHP
//  © Cristian Ospina
//  Archivo: salir.php
//  *****************************
session_start();
if (isset($_SESSION['listo'])) { // Verificamos que la seccion este activa
   unset($_SESSION['listo']); // Eliminamos la Sesion
}
header('Location: index.php'); // Una vez eliminada se redirije a el index.php
exit;
?>
