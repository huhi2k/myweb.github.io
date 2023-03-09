<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Account</title>
<link rel="stylesheet" href="asset/css/base.css" />
<link rel="stylesheet" href="asset/css/main.css" />
<link rel="stylesheet" href="asset/fonts/fontawesome-free-6.2.1-web/css/all.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<script src="asset/js/js.js"></script>
<?php include("connect.php");  ?>
</head>

<body>
<?php            
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
                                    if($level==0){
                                        echo '<a href="huongdanmuaacc.php?email='.$value['email'].'&level='.$value['level'].'" class="header_navbar-item-link">HƯỚNG DẪN MUA ACC</a>';
                                    }else{
                                        echo '<a href="themtaikhoan.php?email='.$value['email'].'&level='.$value['level'].'" class="header_navbar-item-link">THÊM TÀI KHOẢN</a>';
                                    }
                                    

                                    
                                }
                            ?>
                            
                        </li>
                        <li class="header_navbar-item">
                        	
                                <?php
                                    foreach ($data as $value){
                                        if($level==0){
                                            echo '<span class="header_navbar-item-nopointer">NẠP TIỀN</span>
                            <div class="header_navbar-item-menu">
                            <a href="huongdannapthe.php?email='.$value['email'].'&level='.$value['level'].'" class="header_navbar-item-menu-link">NẠP THẺ</a>
                                <a href="huongdanchuyentien.php?email='.$value['email'].'&level='.$value['level'].'" class="header_navbar-item-menu-link">CHUYỂN KHOẢN</a></div>';

                                        }else{
                                            echo '<a href="danhsachuser.php?email='.$value['email'].'&level='.$value['level'].'" class="header_navbar-item-link">DANH SÁCH USER</a>';
                                        }
                                    }
                                        
                                ?>
                            	
                            
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
                    
                    
                    <?php        
                           
                        
                        $sql0="SELECT*FROM account";
                        $result0=mysqli_query($conn,$sql0);
                        while ($row0=mysqli_fetch_assoc($result0)) {
                            $data0[] = $row0;
                        }               
                    ?>
                    <div class="grid_row">
                        <div class="grid_column-12">
                            <div class="home-product">
                                <div class="grid_row">
                                    <?php foreach ($data0 as $value0): ?>
                                    <div class="grid_column-3">
                                        <?php
                                            foreach ($data as $value){
                                                echo '<a href="chitiettaikhoanlogin.php?id='.$value0['id'].'&email='.$value['email'].'&level='.$value['level'].'" class="content-link">';
                                            }
                                        ?>
                                       <div class="home-product-item">
                                        
                                            <div class="home-product-item_img" style="background-image: url(asset/img/<?php echo $value0['anh']; ?>);"></div>
                                            <div class="home-product-item_info">
                                                <div class="space"></div>
                                               <div class="home-product-item_price">
                                                   <span class="home-product-item_price-current"><?php echo $value0['giahientai']; ?> đ</span>
                                                   <span class="home-product-item_price-old"><?php echo $value0['giacu']; ?> đ</span>
                                               </div>
                                               <div class="home-product-item_champs">Số tướng: <?php echo $value0['sotuong']; ?></div>
                                               <div class="home-product-item_skins">Số trang phục: <?php echo $value0['sotrangphuc']; ?></div>
                                               <div class="home-product-item_rank">Rank: <?php echo $value0['rank']; ?></div>
                                               <div class="confirm_btn">
                                                    <button class="confirm_btn-btn">Mua ngay</button>
                                                </div>
                                            </div>
                                            <div class="home-product-item_sale">
                                                <?php echo $value0['sale']; ?>%
                                            </div>
                                        
                                       </div> 
                                       </a>                                     
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
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
    </div>
    
</body>
</html>
