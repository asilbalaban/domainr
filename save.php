<?php

$file = "file.txt";
$f = fopen($file, 'a');
fwrite($f, $_GET['domain'] . "\n");
fclose($f);

header('location: index.php');