<?php
session_start();
if (!isset($_SESSION['listo']) // Comprobamos que estemos Logueados
    || $_SESSION['listo'] !== true) { // Si no estamos Logueados...
    header('Location: index.php'); // Nos lleva a el index para Entrar.
    exit;
}
?>
