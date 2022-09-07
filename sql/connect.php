<?php

$host = 'localhost';
$bd = 'fin';
$user = 'root';
$pass = "";

date_default_timezone_set('America/Sao_Paulo');

try{
    $con = new PDO("mysql:dbname=$bd; host=$host", "$user", "$pass");
}catch( exception $e){
    die("Connection not succed." .$e);
}


