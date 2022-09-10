<?php
require_once('sql/connect.php');


$email = $_POST['email'];
$pass = $_POST['pass'];

$query = $con->prepare("SELECT * FROM users WHERE email = :email AND pass = :pass");
$query->bindValue(':email', $email);
$query->bindValue(':pass', $pass);
$query->execute();
$exec = $query->fetchAll(PDO::FETCH_ASSOC);


if(count($exec) < 1){
    
    echo 'Credentials do not match';
    header('location: index.php');
    exit();

}

else{

        session_start();

        $_SESSION['email'] = $exec[0]['email'];
        $_SESSION['pass'] = $exec[0]['pass'];
        $_SESSION['id'] = $exec[0]['id'];
        $_SESSION['name'] = $exec[0]['name'];
        $_SESSION['lastname'] = $exec[0]['lastname'];
        $_SESSION['level'] = $exec[0]['level'];

        header('location: painel');

}


