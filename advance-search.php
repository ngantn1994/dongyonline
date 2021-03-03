<html>
    <head>
        <meta charset="UTF-8">
        <title>Đông Y Online | Hệ thống thông tin bài thuốc Đông Y</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./lib/bootstrap.min.css">
        <script src="./lib/jquery.min.js"></script>
        <script src="./lib/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./css/home.css">
</head>
    <body>
        <div class="white-trans-container">
        <?php
        session_start();
            include_once('header.php');
            ob_start();
            include '__autoload.php';
	?>
        
        <form name = "adduser" action = "timKiemBaiThuoc.php" method = "post">
	<fieldset>
		<legend> Tìm kiếm nâng cao bài thuốc </legend>
		<label> Tên bài thuốc </label> <input type = "text" name = "baiThuoc" size = "25" /><br />
		<label> Tác dụng </label> <input type = "text" name = "tacDung" size = "25" /><br />
		<label></label> <input type = "submit" name = "ok" value = "Tìm kiếm"/>
	</fieldset>
</form>

<form name = "timKiemBaiViet" action = "timKiemBaiViet.php" method = "post">
	<fieldset>
		<legend> Tìm kiếm nâng cao bài viết </legend>
		<label> Tên bài viết </label> <input type = "text" name = "baiViet" size = "25" /><br />
		<label> Nội dung </label> <input type = "text" name = "noiDung" size = "25" /><br />
		<label></label> <input type = "submit" name = "ok1" value = "Tìm kiếm"/>
	</fieldset>
</form>

<form name = "timKiemTenBenh" action = "timKiemBenh.php" method = "post">
	<fieldset>
		<legend> Tìm kiếm theo bệnh </legend>
		<label> Tên bệnh </label> <input type = "text" name = "benh" size = "25" /><br />
		<label></label> <input type = "submit" name = "ok2" value = "Tìm kiếm"/>
	</fieldset>
</form>

<form name = "timKiemCayThuoc" action = "timKiemCayThuoc.php" method = "post">
	<fieldset>
		<legend> Tìm kiếm theo cây thuốc </legend>
		<label> Tên cây thuốc </label> <input type = "text" name = "tenCayThuoc" size = "25" /><br />
		<label> Chủ trị </label> <input type = "text" name = "chuTri" size = "25" /><br />
		<label></label> <input type = "submit" name = "ok3" value = "Tìm kiếm"/>
	</fieldset>
</form>

<form name = "timKiemBaiThuocTheoTenCayThuoc" action = "timKiemBaiThuocTheoTenCayThuoc.php" method = "post">
	<fieldset>
		<legend> Tìm kiếm bài thuốc theo tên cây thuốc </legend>
		<label> Tên thuốc </label> <input type = "text" name = "tenThuoc" size = "25" /><br />
		<label></label> <input type = "submit" name = "ok4" value = "Tìm kiếm"/>
	</fieldset>
</form>
        
        <?php
            include_once('footer.php');
	?>
        </div>
    </body>
</html>