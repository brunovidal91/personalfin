<?php
require_once("../sql/connect.php");
require_once("protect.php");

$id_user = $_SESSION['id'];
$currentMonth = date('m');


$query = $con->query("SELECT *, FORMAT(SUM(amount), 2, 'de_DE') as am FROM painel WHERE (dif=0 AND MONTH(date) = '$currentMonth' AND id_user = '$id_user') ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);



echo 'R$ '. $res[0]['am'];

$con = null;
$query = null;