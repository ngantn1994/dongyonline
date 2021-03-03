<nav class="navbar navbar-default navbar-fixed-top my-navbar">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand mynavbar-brand" href="index.php"><img src="img/icon32.png"/>Đông Y Online</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#baithuoc">BÀI THUỐC</a></li><div class="nav-content" id="baithuoc-newest">
                    <table width="800" height="200" border="1" align="center">
                        <tr>
                            <?php
                                include_once 'database.php';
                                include_once 'bthuoc.php';
                                $bthuoc2 = new bthuoc();
                                $sql2 = "SELECT * FROM baithuoc ORDER BY maBaiThuoc DESC LIMIT 4";
                                $bthuoc2->query($sql2);
                                $data2 = array();
                                while($row2 = $bthuoc2->fetch()){
                                    $data2[] = $row2;
                                }
                                foreach($data2 as $rows2){
                            ?>
                            <td><?php echo "<a href='binhluanbaithuoc.php?maBaiThuoc=" .$rows2['maBaiThuoc']. "'>"; ?><div class="news-detail">
                                    <div class="news-detail-title"><?php echo $rows2['tenBaiThuoc'];?></div>
                                    <div class="news-detail-content"><?php echo $rows2['moTaTacDung'];?></div>
                            </div></a></td>
                            <?php
                                }
                            ?>
                        </tr>
                    </table>
                </div>
                <li><a href="#caythuoc">CÂY THUỐC</a></li><div class="nav-content" id="caythuoc-newest">
                    
                    
                </div>
                <li><a href="#benh">BỆNH</a></li><div class="nav-content" id="benh-newest">5 bệnh bất kỳ</div>
                <li><a href="#baiviet">CÁC BÀI VIẾT KHÁC</a></li><div class="nav-content" id="baiviet-newest">5 bài viết mới nhất</div>
            </ul>
            <div class="my-search-area">
                <form id="search-form" name="search-form" class="form-inline" method="post" action="search.php">
                    <input type="text" name="keyword" id="keyword" class="form-control mySearchField" size="20" placeholder="Nhập từ khóa ..." required>
                    <button type="submit" class="btn mySearchBtn"><img src="img/search24.png"/></button>
                </form>
            </div>
        </div>
    </div>
</nav>
