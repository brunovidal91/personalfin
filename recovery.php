<?php
require_once('sql/connect.php');

$emailRec = $_POST['emailRec'];

$query = $con->prepare("SELECT * FROM users WHERE email = :email");
$query->bindValue(':email', $emailRec);
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);

if(count($res) > 0){

    $pass = $res[0]['pass'];
    $user = $res[0]['name'];

    $to = $res[0]['email'];
    $subject = $system_name . ' - Recovery Password';
    $msg = 'Hello ' . $user . '! <br> This is your password: <strong>' . $pass . '</strong>. <br> We recommend that you change it. <br><br> Thanks! <br> <i>' . $system_name . ' staff<i>' ;
    $head = 'FROM: ' .$system_email;


    @mail($to, $subject, $msg, $head);


   echo '<span style="color: rgb(19, 235, 19)">Please check your inbox</span>';
   $con = null;
   $query = null;

}else{
    echo '<span style="color: #FF6347">We could not find this email address</span>';
}

 