<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đông Y Online | Hệ thống thông tin bài thuốc Đông Y</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./lib/bootstrap.min.css">
        <script src="./lib/jquery.min.js"></script>
        <script src="./lib/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/home.css">
        
        <?php
//            require './SQLConnection.php';
            include_once 'bthuoc.php';
            include_once 'database.php';
            session_start();
            $keyword = $_SESSION['keyword'];
            if(empty($_SESSION['user_name'])){
                header('Location: index.php');
            }
        ?>
    </head>
    <body>
        <?php
            include_once('header.php');
	?>
        <div class="white-trans-container">
            <table>
                <tr>
                    <th>Mã bài thuốc</th>
                    <th>Tên bài thuốc</th>
                    <th>Mô tả tác dụng</th>
                </tr>
                <?php
//                    $query = sprintf("SELECT * FROM baithuoc WHERE tenBaiThuoc LIKE '" .$_SESSION['keyword']. "'");
//                    $result=  mysqli_query($con, $query);
                    $bthuoc = new bthuoc();
                    $sql = "SELECT * FROM baithuoc WHERE tenBaiThuoc LIKE '" .$_SESSION['keyword']. "'";
                    $bthuoc->query($sql);
//                    $result = mysql_fetch_assoc($result);
                    $data = array();
                    while($row = $bthuoc->fetch()){
                        $data[] = $row;
                    }
                    foreach($data as $rows){
//                    while($row=mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td class='table-STT'>" .$rows['maBaiThuoc']. "</td>";
                        echo "<td>" .$rows['tenBaiThuoc']. "</td>";
                        echo "<td>" .$rows['moTaTacDung']. "</td>";
                        echo "</tr>";
                    }
                ?>
</table>
        </div>
        
        <?php
            include_once('footer.php');
	?>
    
    </body>
</html>


