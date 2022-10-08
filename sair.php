<?php 
    session_start();
    $_SESSION['logado'] = false;
    header('location:login.php')

?>