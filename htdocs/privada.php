<?php
//  *****************************
//  Sistema de Login Simple con PHP
//  © Cristian Ospina
//  Archivo: privada.php
//  *****************************
// Verificamo que si estes Logueado.
 session_start(); require 'test.php';
?>
<?php 
$fp = fopen("id.txt","r");  
//Se abre el archivo contador.txt, la r de read 

$visitas = intval(fgets($fp));  
// Se lee las visitas y se indica con intval para que se devuela un valor entero 

$visitas++;  
//Se agregan las visitas 

fclose($fp);  
// Se cierra el archivo 

$fp = fopen("id.txt","w");  
// Se abre en modo de escritura 

fputs($fp,$visitas);  
// Se escriben las visitas  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script src="ccb.js" type="text/javascript"></script> 
<title>Seccion Privada</title>
<style>body {font-family:Arial;}</style>

    <script type="text/javascript">
var navegador = navigator.appName;
 
function addIndexCopyButton(){
 
    if (navegador != 'Microsoft Internet Explorer') {
 
        var b={
            pathToSwf:"ccb.swf?v=3.0",
            imageUrl:"button.jpg",
            height:"26",
            textValue:"Copiar",
            width:"46"
         };
         $("#index_copy_button").html("");
         CopyClipboardButton.appendButton("index_copy_button","short_url",b);
 
    }else{
        $("#index_copy_button").html('<img onclick="copiarIE();" src="button.jpg" border="0"/> ');
    }
}
 
function copiarIE(){
   document.getElementById("short_url").select();
    window.clipboardData.setData("Text", $("#short_url").val());
}
window.onload = function(){
    addIndexCopyButton();
};
    </script>

</head>
<body>
<center style="position:relative; top:50px;"><b>C&oacute;digos de Minecraft:<br>
<?
$numero_aleatorio = rand(1,20100); 
$lineas=file("codes.txt");

$copy1 = $lineas[$numero_aleatorio];
?>

<form action="" method="get">
    <input name="short_url" id="short_url" type="text" value="<?php echo $copy1; ?>" style="font-size:30px; font-weight:bold; text-align:center;" />
    <span id="index_copy_button" style="position: relative;top: 3px;"></span>
</form>

<a href="https://minecraft.net/user/redeem"><h3>Reclama tus c&oacute;digos aqu&iacute;</h3></a>
<br><br>
<h3>Cuentas premium de Minecraft (Email*:Usuario:Contrase&ntilde;a):</h3>
</b>*El email puede no aparece a veces o incluso cambiado de sitio.<b><br><h1>
<?
$numero_aleatorio = rand(1,73336); 
$lineas=file("alts.txt");

echo $lineas[$numero_aleatorio];
?></h1>

<a href="https://s3.amazonaws.com/MinecraftDownload/launcher/Minecraft.exe"><h3>Debes de usar el Launcher de Minecraft original para poder usar tu nuevo Usuario y Contras&ntilde;a, haz click aqu&iacute; para descargarlo.</h3></a>

</b></center>
</body>
</html>
