<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Account</title>
<link rel="stylesheet" href="asset/css/main.css" />
<link rel="stylesheet" href="asset/css/base.css" />
<link rel="stylesheet" href="asset/fonts/fontawesome-free-6.2.1-web/css/all.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<script src="asset/js/js.js"></script>

</head>

<body>
<?php        
    include("connect.php");    
    $email=$_REQUEST['email'];
    $level=$_REQUEST['level'];
    $sql="SELECT*FROM user_dangnhap where email='$email'";
    $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }               
?>


    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="header_navbar">
                    <?php
                        foreach ($data as $value){
                            echo '<a class="header_logo" href="trangchu.php?email='.$value['email'].'&level='.$value['level'].'"><img src="asset/img/logo24h.png"/></a>';
                        }
                    ?>
                    <ul class="header_navbar_list">
                        <li class="header_navbar-item">
                            <?php
                                foreach ($data as $value){
                                    echo '<a href="huongdanmuaacc.php?email='.$value['email'].'&level='.$value['level'].'" class="header_navbar-item-link">HƯỚNG DẪN MUA ACC</a>';
                                }
                            ?>
                            
                        </li>
                        <li class="header_navbar-item">
                            <span class="header_navbar-item-nopointer">NẠP TIỀN</span>
                            <div class="header_navbar-item-menu">
                                <?php
                                    foreach ($data as $value){
                                        echo '<a href="huongdannapthe.php?email='.$value['email'].'&level='.$value['level'].'" class="header_navbar-item-menu-link">NẠP THẺ</a>
                                <a href="huongdanchuyentien.php?email='.$value['email'].'&level='.$value['level'].'" class="header_navbar-item-menu-link">CHUYỂN KHOẢN</a>';
                                    }
                                ?>
                                
                            </div>
                        </li>
                        <!--<a href="dangnhap.php" class="header_navbar-item header_navbar-item-btn">Đăng nhập</a>
                        <a href="dangky.php" class="header_navbar-item header_navbar-item-btn">Đăng ký</a>-->
                        <li class="header_navbar-item header_navbar-user">
                            <?php
                                foreach ($data as $value){
                                    if($value['level']==0)
                                    {
                                        echo '<a href="thongtinuser.php?email='.$value['email'].'&level='.$value['level'].'" class="header_navbar-user-link">
                                            <i class="fa-solid fa-user"></i>
                                            </a>
                                    <div class="header_navbar-item-menu">
                                        <a href="index.php" class="header_navbar-item-menu-link">ĐĂNG XUẤT</a>
                                    </div>';
                                    }
                                    else{
                                        echo '<a href="admin.php?email='.$value['email'].'&level='.$value['level'].'" class="header_navbar-user-link">
                                            <i class="fa-solid fa-user"></i>
                                            </a>
                                            <div class="header_navbar-item-menu">
                                            <a href="index.php" class="header_navbar-item-menu-link">ĐĂNG XUẤT</a>
                                            </div>';
                                    }
                                    
                                }
                            ?>
                            
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <div class="contain">
            <div class="container_banner">
                <div class="container_banner-block">
                    <img class="container_banner-block-img" src="asset/img/Banner.png">
                </div>
            </div>
            <div class="grid">
                <div class="container_info">
                    <div class="container_detail">
                        <img class="container_detail-logo" src="asset/img/LOL.png">
                    </div>
                </div>
                <nav class="contain-breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <?php
                                foreach ($data as $value){
                                    echo '<a href="trangchu.php?email='.$value['email'].'&level='.$value['level'].'" class="breadcrumb-item-home">Home</a>';
                                }
                            ?>
                
                        </li>
                        <li class="breadcrumb-item active"> 
                            <a class="breadcrumb-item-instruction">Hướng dẫn</a>
                        </li>
                    </ul>    
                </nav>
                <h1 class="contain-tittle">HƯỚNG DẪN</h1>
                <div class="contain-content">
                    <h1><strong>Hướng dẫn mua acc :</strong></h1>
                    <div>&nbsp;</div>
                    <h2><strong>Bước 1&nbsp;: Đăng nhập vào website:</strong><br><strong>&nbsp;</strong></h2>
                    <strong><big>*&nbsp; Bạn phải tạo tài khoản thành viên của shop để nạp thẻ</big></strong>
                    <h2><br><strong>Bước 2&nbsp;: Nạp tiền vào tài khoản:</strong><br><strong>&nbsp;</strong></h2><strong><big>*&nbsp;Nạp tiền bằng thẻ :</big></strong><br><br><span style="color: #d3d3d3; font-family: 'times new roman', times, serif;"><strong>&nbsp;- Xem hướng dẫn nạp </strong><?php
                        foreach ($data as $value){
                            echo '<a href="huongdannapthe.php?email='.$value['email'].'&level='.$value['level'].'" class="content-link">tại đây</a>';
                        }
                    ?></span><strong><br><br><strong><big>*&nbsp;Nạp tiền bằng chuyển khoản :</big></strong><br><br><span style="color: #d3d3d3; font-family: 'times new roman', times, serif;"><strong>&nbsp;- Xem hướng dẫn nạp </strong><?php
                        foreach ($data as $value){
                            echo '<a href="huongdanchuyentien.php?email='.$value['email'].'&level='.$value['level'].'" class="content-link">tại đây</a>';
                        }
                    ?></span>
                    <h2><br><strong>Bước 3&nbsp;: Chọn tài khoản cần mua</strong><br><strong>&nbsp;</strong></h2>
        
                    <h2><br><strong>Bước 4&nbsp;: Sau khi thực hiện giao dịch xong bạn vui lòng vào trang&nbsp;TÀI KHOẢN ĐÃ MUA&nbsp;<br><br><span style="color: #6a6aff">để lấy tài khoản và mật khẩu</span></strong></h2>
                    <div class="space"></div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="grid">
                <div class="grid_row">
                    <div class="grid_column-4">
                        <div class="footer-info" style="margin-top: 20px">Địa chỉ: Khu đô thị Linh Đàm - Hoàng Mai - Hà Nội</div>
                        
                        <div class="footer-info">Copyright by <a href="" class="footer-info-link" onclick="reload_page()">Shop Liên Minh 24H</a>.</div>
                    </div>
                    <div class="grid_column-4">
                        <div class="footer-hotline">
                            
                                <div class="footer-hotline-num">
                                    <p>
                                        <a href="">Hotline: 0978 537 962</a>
                                    </p>
                                    <p style="margin-bottom: 10px;">
                                        <a>Nguyễn Quốc Hiếu</a>
                                    </p>
                                </div>
                                <div class="footer-hotline-work">
                                    Thời gian làm việc: <strong>GIAO DỊCH TỰ ĐỘNG 24/24</strong> các ngày trong tuần
                                </div>
                            
                        </div>
                    </div>
                    <div class="grid_column-4">
                        <div class="footer-social">
                            <span class="footer-text">Liên kết chia sẻ:</span>
                            <a href="#" class="footer-social-btn footer-btn facebook" target="_blank" rel="nofollow"><i class="fa-brands fa-square-facebook"></i></a>
                            
                            <a href="#" class="footer-social-btn footer-btn google" target="_blank" rel="nofollow"><i class="fa-brands fa-square-google-plus"></i></a>
                                    
                            <a href="#" class="footer-social-btn footer-btn twitter" target="_blank" rel="nofollow"><i class="fa-brands fa-square-twitter"></i></a>
                                    
                            <a href="#" class="footer-social-btn footer-btn youtube" target="_blank" rel="nofollow"><i class="fa-brands fa-square-youtube"></i></a>
                                    
                            <a href="#" class="footer-social-btn footer-btn instagram" target="_blank" rel="nofollow"><i class="fa-brands fa-square-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    
</body>
</html>
