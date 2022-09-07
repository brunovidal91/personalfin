<?php
require_once("sql/connect.php");



$query = $con->query("SELECT *, FORMAT(SUM(amount), 2, 'de_DE') as am FROM painel WHERE dif=0 ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);


echo 'R$ '. $res[0]['am'];