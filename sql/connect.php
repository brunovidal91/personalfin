<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$host = $url['host'];
$bd = substr($url['path'], 1);
$user = $url['user'];
$pass = $url['pass'];

$active_group = 'default';
$query_builder = TRUE;

$system_name = 'Personal Balance';
$system_email = 'brunovidal.sky@gmail.com';

date_default_timezone_set('America/Sao_Paulo');

try{
    $con = new PDO("mysql:dbname=$bd; host=$host", "$user", "$pass");
}catch( exception $e){
    die("Connection not succed." .$e);
}


