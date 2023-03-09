
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
<?php include("connect.php"); ?>
</head>

<body>

<?php   
                $id=$_REQUEST["id"];
                $txttentaikhoan="";
                $txtmatkhau="";
                $giahientai="";
                $giacu="";
                $sotuong="";
                $sotrangphuc="";
                $txtrank="";
                $giamgia="";
                $txtanh="";
                if(isset($_REQUEST["tentaikhoan"]) && isset($_REQUEST["matkhau"]) && isset($_REQUEST["giahientai"]) && isset($_REQUEST["giacu"]) && isset($_REQUEST["sotuong"]) && isset($_REQUEST["sotrangphuc"]) && isset($_REQUEST["rank"]) && isset($_REQUEST["giamgia"]) && isset($_REQUEST["anh"]))
                {
                    if(isset($_REQUEST["submit"]))
                {
                    $email=$_REQUEST['email'];
                    $txttentaikhoan=$_REQUEST["tentaikhoan"];
                    $txtmatkhau=$_REQUEST["matkhau"];
                    $giahientai=$_REQUEST["giahientai"];
                    $giacu=$_REQUEST["giacu"];
                    $sotuong=$_REQUEST["sotuong"];
                    $sotrangphuc=$_REQUEST["sotrangphuc"];
                    $txtrank=$_REQUEST["rank"];
                    $giamgia=$_REQUEST["giamgia"];
                    $txtanh=$_REQUEST["anh"];
                
                if($txttentaikhoan=="" || $txtmatkhau=="" || $giahientai=="" || $giacu=="" || $sotuong=="" || $sotrangphuc=="" || $txtrank=="" || $giamgia=="" || $txtanh=="")
                {
                    header('Location: nhapthongtintaikhoan.php?email='.$email.'&txttentaikhoan='.$txttentaikhoan.'');
                }
                else{
                    $sql2="UPDATE account set tentaikhoan='$txttentaikhoan' , matkhau='$txtmatkhau' , giahientai='$giahientai' , giacu='$giacu' , sotuong='$sotuong' , sotrangphuc='$sotrangphuc' , rank='$txtrank' , sale='$giamgia' , anh='$txtanh'
                        where tentaikhoan='$txttentaikhoan'; ";
                    mysqli_query($conn,$sql2);
                    
                    header('Location: suataikhoanthanhcong.php?email='.$email.'');    
                    
                }
                
                
                }
            }
        ?>
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
                        <p>Số dư: <span class="text-danger" style="font-size: 21px">'.$value['sodu'].' đ </span></p>';
                            }
                        ?>
                    </div>
                    <?php
                        
                        $sql1="SELECT*FROM account where id='$id'";
                        $result1=mysqli_query($conn,$sql1);
                        while ($row1=mysqli_fetch_assoc($result1)) {
                            $data1[] = $row1;
                        } 
                    ?>

                    <h2 class="text-center text-danger fs21 m-b-15">Sửa thông tin tài khoản</h2>
                    <form action="suataikhoan.php" method="POST" style="width: 600px;margin: auto;text-align: center;">
                            
                            <div style="width: 90%;height: 24px;margin: 5px;">
                                <span style="font-weight: bold;color: rgba(220,53,59,0.7);float: left;">Email:</span><input type="text" name="email" style="border-radius: 2px;border: 1px solid #dbdbdb;float: right;height: 20px;width: 400px;" value="<?php
                                        foreach ($data as $value){
                                            echo ''.$value['email'].'';
                                        }
                                    ?>">
                            </div>
                            <?php   foreach ($data1 as $value1): ?>
                            <div style="width: 90%;height: 24px;margin: 5px;">
                                <span style="font-weight: bold;color: rgba(220,53,59,0.7);float: left;">Tên tài khoản:</span><input type="text" name="tentaikhoan" style="border-radius: 2px;border: 1px solid #dbdbdb;float: right;height: 20px;width: 400px;" value="<?php echo ''.$value1['tentaikhoan'].'' ; echo $txttentaikhoan; ?>">
                            </div>

                            <div style="width: 90%;height: 24px;margin: 5px;">
                                <span style="font-weight: bold;color: rgba(220,53,59,0.7);float: left;">Mật khẩu:</span><input type="text" name="matkhau" style="border-radius: 2px;border: 1px solid #dbdbdb;float: right;height: 20px;width: 400px;" value="<?php echo ''.$value1['matkhau'].'' ; echo $txtmatkhau; ?>">
                            </div>

                            <div style="width: 90%;height: 24px;margin: 5px;">
                                <span style="font-weight: bold;color: rgba(220,53,59,0.7);float: left;">Giá hiện tại:</span><input type="text" name="giahientai" style="border-radius: 2px;border: 1px solid #dbdbdb;float: right;height: 20px;width: 400px;" value="<?php  echo ''.$value1['giahientai'].''; echo $giahientai;  ?>">
                            </div>

                            <div style="width: 90%;height: 24px;margin: 5px;">
                                <span style="font-weight: bold;color: rgba(220,53,59,0.7);float: left;">Giá cũ:</span><input type="text" name="giacu" style="border-radius: 2px;border: 1px solid #dbdbdb;float: right;height: 20px;width: 400px;" value="<?php echo ''.$value1['giacu'].''; echo $giacu;  ?>">
                            </div>

                            <div style="width: 90%;height: 24px;margin: 5px;">
                                <span style="font-weight: bold;color: rgba(220,53,59,0.7);float: left;">Số tướng:</span><input type="text" name="sotuong" style="border-radius: 2px;border: 1px solid #dbdbdb;float: right;height: 20px;width: 400px;" value="<?php echo ''.$value1['sotuong'].''; echo $sotuong;  ?>">
                            </div>

                            <div style="width: 90%;height: 24px;margin: 5px;">
                                <span style="font-weight: bold;color: rgba(220,53,59,0.7);float: left;">Số trang phục:</span><input type="text" name="sotrangphuc" style="border-radius: 2px;border: 1px solid #dbdbdb;float: right;height: 20px;width: 400px;" value="<?php echo ''.$value1['sotrangphuc'].''; echo $sotrangphuc;  ?>">
                            </div>

                            <div style="width: 90%;height: 24px;margin: 5px;">
                                <span style="font-weight: bold;color: rgba(220,53,59,0.7);float: left;">Rank:</span><input type="text" name="rank" style="border-radius: 2px;border: 1px solid #dbdbdb;float: right;height: 20px;width: 400px;" value="<?php echo ''.$value1['rank'].''; echo $txtrank;  ?>"
>                            </div>

                            <div style="width: 90%;height: 24px;margin: 5px;">
                                <span style="font-weight: bold;color: rgba(220,53,59,0.7);float: left;">Giảm giá:</span><input type="text" name="giamgia" style="border-radius: 2px;border: 1px solid #dbdbdb;float: right;height: 20px;width: 400px;" value="<?php echo ''.$value1['sale'].''; echo $giamgia;  ?>">
                            </div>
                        
                            <div style="width: 90%;height: 24px;margin: 5px;">
                                <span style="font-weight: bold;color: rgba(220,53,59,0.7);float: left;">Ảnh:</span><input type="file" name="anh" style="float: right;height: 20px;width: 400px;" value="<?php echo ''.$value1['anh'].''; echo $txtanh;  ?>">
                            </div>
                            <?php   endforeach ; ?>
                            <div style="display: flex; justify-content: space-between;width: 50%;margin: 0 auto;height: 30px;">
                                <button type="submit" name="submit" style="background-color: #fea737;color: #280500;cursor: pointer;width: 70px;border-radius: 5px;">Sửa</button>
                                <button type="button" style="background-color: #fea737;width: 70px;border-radius: 5px;">
                                    <?php
                                        foreach ($data as $value){
                                            echo '<a href="admin.php?email='.$value['email'].'&level='.$value['level'].'" style="text-decoration: none;color: #280500;">Cancel</a>';
                                        }
                                    ?></button>
                            </div>
                        
                    </form>

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
