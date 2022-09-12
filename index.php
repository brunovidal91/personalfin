<?php
require_once("sql/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/secure-payment.png">
    <link rel="stylesheet" href="css/style-login.css">
    <title><?php echo $system_name .' - Login Page' ?></title>
</head>
<body>
    <div class="login-img"><img src="img/secure-payment.png" width="100px"/><span><?php echo $system_name?></span></div>
    <div class="form-container-login">
        <form action="secure.php" method="POST" id="form-login">
            <input type="email" placeholder="email..." name="email" id="email" autofocus autocomplete="on">
            <input type="password" placeholder="password..." name="pass" id="pass" autocomplete="on">
            <label class="forgot-pass"><a href="#!" class="f-pass">Forgot Password?</a></label>
            <input type="submit" value="Submit">
        </form>

        <a href="mailto:brunovidal.sky@gmail.com" class="mail-to-acess">Request Access</a>
    </div>
    <div class="msg">teste</div>

    <div class="modalRecovery">
        <form action="recovery.php" method="POST" id="form-recovery">
            <label class="msg-recovery">teste</label>

            <input type="email" class="emailRec" placeholder="confirm you email...">

            <input type="submit" value="Send">
        </form>

        <a href="#!" class="closeModalRecovery">X</a>
    </div>


    <script type="text/javascript" src="http://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="js/ajax-login.js"></script>
    <script type="text/javascript" src="js/script-login.js"></script>


    
</body>
</html>