<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['email'])){
    echo '<script>window.location.href="../index.php"</script>';
}

?>