<?php

    session_start();
    if(empty($_SESSION['user_name'])){
        header('Location: login.html');
    } else {
        $_SESSION['keyword'] = $_POST['keyword'];
        header('Location: result.php');
    }

