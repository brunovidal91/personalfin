<?php

require_once("../sql/connect.php");


$title = $_POST['title'];
$date = $_POST['date'];
$reco = $_POST['reco'];
$amount = $_POST['amount'];
$obs = $_POST['obs'];
$dif = $_POST['dif'];
$id_user = $_POST['id_user'];

if(strlen($title) != 0 AND strlen($amount) != 0){

    $query = $con->prepare("INSERT INTO painel SET title = :title, date = '$date', type = :reco, amount = :amount, obs = :obs, dif = '$dif', id_user = '$id_user' ");
    $query->bindValue(":title", "$title");
    $query->bindValue(":reco", "$reco");
    $query->bindValue(":amount", "$amount");
    $query->bindValue(":obs", "$obs");
    $query->execute();

    echo "<span style='color: rgb(19, 235, 19)'>insert made successfully</span>";

}else {
    echo '<span style="color: #ff0000 ">There are required fields empty</span>';
}



$con = null;
$query = null;