<?php
require_once('../sql/connect.php');

$id = $_POST['id'];


$query = $con->query("DELETE FROM painel WHERE id = '$id' ");

$con = null;
$query = null;