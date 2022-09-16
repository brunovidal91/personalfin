<?php
require_once("./sql/connect.php");

$dataAtual = date("d/m/Y");

if($dataAtual == '15/09/2022'){
    
    $query = $con->query("INSERT INTO users (name, lastname, email, pass, level) 
    VALUES ('Automatico', 'Robot', 'aut@pb.com', 'aut', 'Robot')");

}

