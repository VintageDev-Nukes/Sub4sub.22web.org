<? 
//defino fecha 1 
$ano1 = 2013;
$mes1 = 2;
$dia1 = 24;

//defino fecha 2 
$ano2 = date ("Y");
$mes2 = date ("m");
$dia2 = date ("d");

//calculo timestam de las dos fechas 
$timestamp1 = mktime(0,0,0,$mes1,$dia1,$ano1);
$timestamp2 = mktime(4,12,0,$mes2,$dia2,$ano2);

//resto a una fecha la otra 
$segundos_diferencia = $timestamp1 - $timestamp2;
//echo $segundos_diferencia; 

//convierto segundos en días 
$dias_diferencia = $segundos_diferencia / (60 * 60 * 24);

//obtengo el valor absoulto de los días (quito el posible signo negativo) 
$dias_diferencia = abs($dias_diferencia); 

//quito los decimales a los días de diferencia 
$dias_diferencia = floor($dias_diferencia); 

$fp = fopen("id.txt","r");
//Se abre el archivo contador.txt, la r de read 

$visitas = intval(fgets($fp));
// Se lee las visitas y se indica con intval para que se devuela un valor entero 

$vis = $visitas / ($dias_diferencia + 1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Stats!</title>
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<style>
body {font-family:Arial;margin:5;overflow:hidden;}
</style>
<script type="text/javascript">

</script>
</head>
<body>

<?php echo number_format($vis); ?> es la media de visitas al dia.<br>


</body>
</html>
