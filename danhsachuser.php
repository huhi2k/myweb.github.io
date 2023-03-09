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
                                    echo '<a href="themtaikhoan.php?email='.$value['email'].'&level='.$value['level'].'" class="header_navbar-item-link">THÊM TÀI KHOẢN</a>';
                                }
                            ?>
                            
                        </li>
                        
                        <li class="header_navbar-item">
                            <?php
                                foreach ($data as $value){
                                    echo '<a href="danhsachuser.php?email='.$value['email'].'&level='.$value['level'].'" class="header_navbar-item-link">DANH SÁCH USER</a>';
                                }
                            ?>
                            
                        </li>
                        <li class="header_navbar-item header_navbar-user">
                            <?php
                                foreach ($data as $value){
                                    echo '<a href="admin.php?email='.$value['email'].'&level='.$value['level'].'" class="header_navbar-user-link">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            ';
                                }
                            ?>
                            <div class="header_navbar-item-menu">
                                <a href="index.php" class="header_navbar-item-menu-link">ĐĂNG XUẤT</a>
                            </div>
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
                        <?php
                            foreach ($data as $value){
                                echo '<li class="breadcrumb-item">
                            <a href="trangchu.php?email='.$value['email'].'&level='.$value['level'].'" class="breadcrumb-item-home">Home</a>
                        </li>';
                            }
                        ?>
                        <li class="breadcrumb-item active"> 
                            <a class="breadcrumb-item-instruction">ADMIN</a>
                        </li>
                    </ul>    
                </nav>
                <h1 class="contain-tittle">ADMIN</h1>
                <div class="contain-content-user">
                    <div class="s-content">
                        <?php
                            foreach ($data as $value){
                                echo '<p>Email : <span class="text-danger" style="font-size: 21px">'.$value['email'].'</span></p>
                        <p>Số dư: <span class="text-danger" style="font-size: 21px">'.$value['sodu'].' đ</span></p>';
                            }
                        ?>
                    </div>
                    

                    <h2 class="text-center text-danger fs21 m-b-15">Danh sách USER</h2>
                              
                    <div style="max-width: 100%;overflow: auto">
                        <table class="table text-center table-bordered">

                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Số dư</th>
                                    <th>Số lần mua</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php
                                $sql1="SELECT*FROM user_dangnhap order by id";
                                $result1=mysqli_query($conn,$sql1);
                                while ($row1=mysqli_fetch_assoc($result1)) {
                                    $data1[]=$row1;
                                }
                                foreach ($data1 as $value1):?>
                                <tr>
                                    <td><?php echo $value1['id']?></td>
                                    <td><?php echo $value1['email']?></td>
                                    <td><?php echo $value1['password']?> đ</td>
                                    <td><?php echo $value1['sodu']?> đ</td>
                                    <td><?php echo $value1['solanmua']?></td>
                                    

                                </tr>
                                
                            
                            </tbody><?php
                                    endforeach;
                                
                    ?>
                        </table>
                    </div>
                    
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
