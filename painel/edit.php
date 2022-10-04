<?php
require_once('../sql/connect.php');

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$id = $_POST['id'];

$query = $con->prepare("SELECT * FROM users WHERE email = :email");
$query->bindValue(':email', $email);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if(strlen($pass1) == 0){
    
    echo '<span style="color: #ff0000 ">please insert the password</span>';
}
else if($pass1 != $pass2){
    echo '<span style="color: #ff0000 ">the passwords must be the same</span>';
}
else if(count($res) > 0 && $res[0]['id'] != $id ){
    echo '<span style="color: #ff0000 ">this email address alredy exists, please choose another one</span>';
}else{

    $alt = $con->prepare("UPDATE users SET name = :name, lastname = :lastname, email = :email, pass = :pass WHERE id = '$id'");
    $alt->bindValue(':name', $name);
    $alt->bindValue(':lastname', $lastname);
    $alt->bindValue(':email', $email);
    $alt->bindValue(':pass', $pass1);
    $alt->execute();

    echo "<span style='color: rgb(19, 235, 19)'> change made successfully</span>";

    $con = null;
    $query = null;
}




