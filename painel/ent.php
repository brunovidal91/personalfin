<?php

require_once("../sql/connect.php");


$title = $_POST['title'];
$date = $_POST['date'];
$reco = $_POST['reco'];
$amount = $_POST['amount'];
$obs = $_POST['obs'];
$dif = $_POST['dif'];
$id_user = $_POST['id_user'];

$query = $con->prepare("INSERT INTO painel SET title = :title, date = '$date', type = :reco, amount = :amount, obs = :obs, dif = '$dif', id_user = '$id_user' ");
$query->bindValue(":title", "$title");
$query->bindValue(":reco", "$reco");
$query->bindValue(":amount", "$amount");
$query->bindValue(":obs", "$obs");
$query->execute();

$con = null;
$query = null;