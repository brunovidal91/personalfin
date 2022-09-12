<?php

$host = 'localhost';
$bd = 'fin';
$user = 'root';
$pass = "";

$system_name = 'PersonalFin';
$system_email = 'brunovidal.sky@gmail.com';

date_default_timezone_set('America/Sao_Paulo');

try{
    $con = new PDO("mysql:dbname=$bd; host=$host", "$user", "$pass");
}catch( exception $e){
    die("Connection not succed." .$e);
}


