<?php
require_once("../sql/connect.php");
require_once("protect.php");

$currentMonth = date('m');
$id_user = $_SESSION['id'];


$query = $con->query("SELECT *, FORMAT(SUM(amount), 2, 'de_DE') as am FROM painel WHERE (dif=1 AND MONTH(date) = '$currentMonth' AND id_user = '$id_user') ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);



echo 'R$ '. $res[0]['am'];

$con = null;
$query = null;