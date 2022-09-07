<?php
require_once("sql/connect.php");



$query = $con->query("SELECT *, FORMAT(amount, 2, 'de_DE') as amountf FROM painel ORDER BY id DESC");
$res = $query->fetchAll(PDO::FETCH_ASSOC);




echo <<<HTML
<table>
<tbody>
HTML;




foreach($res as $item){
    $data = $item['date'];
    $newdata = implode("/", array_reverse (explode('-', $data)));

    if($item['dif'] == 1){
        $img = 'cima';
    }
    else{
        $img = 'baixo';
    }


echo <<<HTML
<tr>
<td><img src="img/seta-para-{$img}.png"></td>
<td>{$item['title']}</td>
<td>{$newdata}</td>
<td>R$ {$item['amountf']}</td>
<td>{$item['obs']}</td>
</tr>
HTML;
}
echo <<<HTML
</tbody>
</table>

HTML;