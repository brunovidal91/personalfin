<?php

$host = 'us-cdbr-east-06.cleardb.net';
$bd = 'heroku_3865486cdbf14f1';
$user = 'b21a8d87c64b93';
$pass = "a8eb7e18";

$system_name = 'Personal Balance';
$system_email = 'brunovidal.sky@gmail.com';

date_default_timezone_set('America/Sao_Paulo');

try{
    $con = new PDO("mysql:dbname=$bd; host=$host", "$user", "$pass");
}catch( exception $e){
    die("Connection not succed." .$e);
}


