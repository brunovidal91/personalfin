<?php
require_once("sql/connect.php");

$query = $con->query("SELECT *, FORMAT(SUM(amount), 2, 'de_DE') as am FROM painel WHERE dif=1");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

echo $res[0]['am'];