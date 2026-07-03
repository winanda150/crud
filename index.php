<?php
    session_start();

    if(isset($_SESSION['login']) && $_SESSION['login'] === true){
        header("location: dashboard.php");
    }else{
        header("location: login.php");
    }
exit();
?>