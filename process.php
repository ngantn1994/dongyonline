<?php
    include_once ('__autoload.php');
    include_once ('database.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = new user();
    $sql = "SELECT * FROM nguoidung WHERE tenDangNhap LIKE '$username'";
    $user->query($sql);
    $row = $user->fetch();
    if(empty($row)){
        echo "This user does not exist.";
    } else {
        $mk = $row['matKhau'];
        echo $mk;
        if(md5($password) == $mk){
            session_start();
            $_SESSION['user_name'] = $username;
            header('Location: index.php');
        } else {
            echo "Wrong password. Try again.";
        }
    }

