<?php
$url = $_GET['url'];
$contents = file_get_contents($url);
echo $contents;
?>
