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
    include_once 'cThuoc.php';
	include_once 'database.php';
        session_start();
    $cThuoc = new cThuoc();
	$sql = "select * from caythuoc";
	$cThuoc->query($sql);
	
	
?>
</head>
    <body>
        
        <?php
            include_once('header.php');
	?>
        
        <div class="white-trans-container">
            <table width="820" height="121" border="1" align="center">
                <tr>
                    <td width="50">Mã Cây Thuốc</td>
                    <td width="50">Tên Cây Thuốc</td>
                    <td width="68">Tên Khác</td>
                    <td width="50">Tên Khoa Học</td>
                    <td width="63">Ảnh</td>
                    <td width="48">Họ</td>
                    <td width="48">Mô Tả</td>
                    <td width="48">Thu Hái</td>
                    <td width="48">Chủ Trị</td>
                    <td width="48">Kiêng Kỵ</td>
                    <td width="48">Tính Chất</td>
                    <td width="48">Trạng Thái</td>	
                </tr>
 
                <?php
                    $data = array();
                    while($row = $cThuoc->fetch()){
                        $data[] = $row;
                    }
                    foreach($data as $rows){
                ?>
                <tr>
                    <td><?php echo $rows['maCayThuoc'];?></td>
                    <td><?php echo $rows['tenCayThuoc'];?></td>
                    <td><?php echo $rows['tenKhac'];?></td>
                    <td><?php echo $rows['tenKhoaHoc'];?></td>
                    <td><?php echo $rows['anh'];?></td>
                    <td><?php echo $rows['ho'];?></td>
                    <td><?php echo $rows['moTa'];?></td>
                    <td><?php echo $rows['thuHai'];?></td>
                    <td><?php echo $rows['chuTri'];?></td>
                    <td><?php echo $rows['kiengKy'];?></td>
                    <td><?php echo $rows['tinhChat'];?></td>
                    <td><?php echo $rows['trangThai'];?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
        
        <?php
            include_once('footer.php');
	?>
        
    </body>
</html>