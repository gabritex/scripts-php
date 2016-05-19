<?php
/*
echo "Olá Mundo";

$file=fopen("welcome.txt","r");


if(!file_exists("welcome.txt")) {
    die("Ficheiro não encontrado");
}
else {
    $file=fopen("welcome.txt","r");
}
*/
?>

<?php

//error handler function
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr";
}

//set error handler
set_error_handler("customError");

//trigger error
echo($test);

?>

<?php
$test=2;
if ($test>=1) {
  trigger_error("Value must be 1 or below");
}

?>