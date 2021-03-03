<?php
    include_once 'database.php';
    session_start();
//    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//        $maBaiThuoc = $_POST['maBaiThuoc'];
//        mysql_query("INSERT INTO binhluanbaithuoc SET maBaiThuoc='$maBaiThuoc',
//            noiDung='" . mysql_escape_string($_POST['noiDung']) . "',
//            ngayBinhLuan=NOW()");
//        header("location: " . $_SERVER['PHP_SELF'] . "?maBaiThuoc=$maBaiThuoc");
//        exit;
//    } else {
//        $maBaiThuoc = $_GET['maBaiThuoc'];
//    }


include_once 'cThuoc.php';
    $cThuoc = new cThuoc();

if (isset($_POST['submit'])) {
    $maBaiThuoc = $_POST['maBaiThuoc'];
	$noidung = $_POST['noiDung'];
	
    $b = "INSERT INTO binhluanbaithuoc (maBaiThuoc,noiDung,ngayBinhLuan) values($maBaiThuoc,'$noidung',NOW())";
	$cThuoc->query($sql);
    if(mysql_query($b)){
//		echo "thanh cong";
		
    
	}else{
//		echo "loi";
	}
} else {
    $maBaiThuoc = $_GET['maBaiThuoc'];
}
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đông Y Online | Hệ thống thông tin bài thuốc Đông Y</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./lib/bootstrap.min.css">
        <script src="./lib/jquery.min.js"></script>
        <script src="./lib/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/home.css">
        
        ﻿<?php

    $cThuoc = new cThuoc();
	$sql = "select * from caythuoc";
	$cThuoc->query($sql);
	
	
?>
    </head>
    <body id="myPage" >
        <?php
            include_once('header.php');
	?>
        <div class="white-trans-container">
            <?php
            $baiThuoc_req = mysql_query("SELECT * FROM baithuoc WHERE maBaiThuoc = '$maBaiThuoc'");
            $baiThuoc = mysql_fetch_array($baiThuoc_req);
            ?>
            <b><?php echo $baiThuoc['tenBaiThuoc'] ?></b><br />
            <i>Mô tả: <?php echo $baiThuoc['moTaTacDung'] ?></i><br />
            <?php echo $baiThuoc['cachDung'] ?><br /><br />
            <?php
            $binhluanbaithuoc_req = mysql_query("SELECT * FROM binhluanbaithuoc WHERE maBaiThuoc='$maBaiThuoc'");
            $nbre_binhluanbaithuoc = mysql_num_rows($binhluanbaithuoc_req);
			$a = array();
			while($row = mysql_fetch_array($binhluanbaithuoc_req)){
				$a[] = $row;
			}
			
            ?>
            <b><?php echo $nbre_binhluanbaithuoc ?> bình luận về bài thuốc này:</b><br />
            <?php foreach ($a as $binhluanbaithuoc) { 
			
                echo "<h3>".$binhluanbaithuoc['ngayBinhLuan']."</h3> <br />";
				echo "<p>".$binhluanbaithuoc['noiDung']."</p> <br /><br />";
         } ?>

        <form method="POST" action="binhluanbaithuoc.php?maBaiThuoc=$maBaiThuoc" name="ajoutcomment">
            <input type="hidden" name="maBaiThuoc" value="<?php echo $maBaiThuoc ?>">
            <table border="0px">
                <tr>
                    <td>Cách dùng: </td> <br/>
                <td><textarea name="noiDung" rows="5" cols="20"></textarea><td>
                    </tr>
                <tr>
                    <td colspan="2" align="right"><input type="submit" name="submit" value="binhluan"></td>
                </tr>
            </table>
        </form>
    </div>
        
        <?php
            include_once('footer.php');
	?>
    
    </body>
</html>