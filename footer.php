<?php
//    include_once 'database.php';
    $notice = "";
    if(empty($_SESSION['user_name'])){
        $notice = "<a href='login.html'>Đăng nhập | Đăng ký</a>";
    } else {
        $notice = "Xin chào, " .$_SESSION['user_name']. "! <a href='user-detail.php'> Trang cá nhân</a> | <a href='signout.php'>Đăng xuất</a>";
    }
?>
<footer>
    <div class="footer-inside"><?php echo $notice; ?></div>
</footer>

