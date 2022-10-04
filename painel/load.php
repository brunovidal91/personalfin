<?php
require_once("../sql/connect.php");
require_once("protect.php");

$id_user = $_SESSION['id'];

$query = $con->query("SELECT *, FORMAT(amount, 2, 'de_DE') as amountf FROM painel  WHERE id_user = '$id_user' ORDER BY id DESC");
$res = $query->fetchAll(PDO::FETCH_ASSOC);




echo <<<HTML

<small><table>
<thead>
<tr>
<th colspan="2">Title</th>
<th>When</th>
<th>Amount</th>
<th>Obs</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
HTML;




foreach($res as $item){
    $data = $item['date'];
    $id = $item['id'];
    $newdata = implode("/", array_reverse (explode('-', $data)));

    if($item['dif'] == 1){
        $img = 'cima';
    }
    else{
        $img = 'baixo';
    }

    //<a href='id=?{$id}'>L</a> 
echo <<<HTML
<tr>
<td><img src="../img/seta-para-{$img}.png"></td>
<td>{$item['title']}</td>
<td>{$newdata}</td>
<td>R$ {$item['amountf']}</td>
<td>{$item['obs']}</td>
<td>
    <a href='#!' onclick="deleteItem('{$id}', '{$item['title']}')"title="delete" id="delete">
        <img src='../img/delete.png' width="18"></a></td>
</tr>
HTML;
}
echo <<<HTML
</tbody>
</table>
</small>
HTML;


$con = null;
$query = null;

