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
<style type="text/css">
.form-group{
    margin-bottom: 16px;
    font-size: 1.6rem;
}

label {
    font-weight: 400;
}

.clwhite{
    color: #fff;

}

input[type=text]{
    padding-left: 12px;
    padding-right: 12px;
}

.form-control{
    display: block;
    width: 100%;
    padding: 6px 12px;
    font-size: 1.6rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0;
    background-clip: initial;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
}

.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 6px 12px;
    height: 38px;
    font-size: 1.5rem;
    line-height: 1.5;
    border-radius: 2px;
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}

.btn-danger:hover {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130;
}

.btn-block {
    display: block;
    width: 100%;
}
.valid{

}   

</style>
</head>

<body>
<?php        
    include("connect.php");    
    $email=$_REQUEST['email'];
    $level=$_REQUEST['level'];
    $sodu=$_REQUEST['sodu'];
    $sql="SELECT*FROM user_dangnhap where email='$email'";
    $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }               
?>
<?php
                
            $txtloaithe="";
            $menhgia="";
            $soseri="";
            $mathe="";
            if(isset($_REQUEST["loaithe"]) && isset($_REQUEST["menhgia"]) && isset($_REQUEST["soseri"]) && isset($_REQUEST["mathe"]))
            {
                $email=$_REQUEST['email'];
                $level=$_REQUEST['level'];
                $sodu=$_REQUEST['sodu'];
                $txtloaithe=$_REQUEST["loaithe"];
                $menhgia=$_REQUEST["menhgia"];
                $soseri=$_REQUEST["soseri"];
                $mathe=$_REQUEST["mathe"];
            if(isset($_REQUEST["submit"])){

            if($txtloaithe=="" || $menhgia=="" || $soseri=="" || $mathe=="")
            {

                header('Location: nhapthongtinthe.php?email='.$email.'&level='.$level.'&sodu='.$sodu.'');
            }
            else{
                $sql_1="SELECT*FROM danhsachthe where loaithe='$txtloaithe'";
                $sql_2="SELECT*FROM danhsachthe where menhgia='$menhgia'";
                $sql_3="SELECT*FROM danhsachthe where soseri='$soseri'";
                $sql_4="SELECT*FROM danhsachthe where mathe='$mathe'";
                $sql_5="SELECT*FROM thedanap where soseri='$soseri'";
                $sql_6="SELECT*FROM thedanap where mathe='$mathe'";
                $kt_1=mysqli_query($conn,$sql_1);
                $kt_2=mysqli_query($conn,$sql_2);
                $kt_3=mysqli_query($conn,$sql_3);
                $kt_4=mysqli_query($conn,$sql_4);
                $kt_5=mysqli_query($conn,$sql_5);
                $kt_6=mysqli_query($conn,$sql_6);
                if(mysqli_num_rows($kt_1)>0 && mysqli_num_rows($kt_2)>0 && mysqli_num_rows($kt_3)>0 && mysqli_num_rows($kt_4)>0){
                    if(mysqli_num_rows($kt_5)>0 && mysqli_num_rows($kt_6)>0){
                        header('Location: thedasudung.php?email='.$email.'&level='.$level.'&sodu='.$sodu.'');
                    }
                    else{
                        $soduconlai=$sodu+$menhgia;
                        $sql3="INSERT into thedanap (email,id,loaithe,menhgia,soseri,mathe) select '$email',id,loaithe,menhgia,soseri,mathe from danhsachthe where soseri='$soseri'";
                        $sql4="UPDATE user_dangnhap set sodu='$soduconlai' where email='$email'";
                        $kt3=mysqli_query($conn,$sql3);
                        $kt4=mysqli_query($conn,$sql4);
                        
                        header('Location: napthanhcong.php?email='.$email.'&level='.$level.'');
                    }
                    
                }
                else{
                    header('Location: napthatbai.php?email='.$email.'&level='.$level.'&sodu='.$sodu.'');
                    }
                }
            
                }
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
                            <a class="breadcrumb-item-instruction">Nạp thẻ</a>
                        </li>
                    </ul>    
                </nav>
                <h1 class="contain-tittle">NẠP THẺ</h1>
                <div class="contain-content-user">
                    <form method="POST" action="napthe.php" id="form_card">

                        <input style="border: none; color: #1b1818; background-color: #1b1818;"  type="text" name="email"  value="<?php
                                foreach ($data as $value){
                                    echo ''.$value['email'].'';
                                }
                            ?>">
                        <div class="form-group">
                            <label class="clwhite">Loại thẻ:</label>
                            <input placeholder="Loại thẻ" type="text" class="form-control valid" name="loaithe">
                        </div>

                        <div class="form-group">
                            <label class="clwhite">Mệnh giá:</label>
                            <input placeholder="Mệnh giá" type="text" class="form-control valid" name="menhgia">
                        </div>

                        <div class="form-group">
                            <label class="clwhite">Số seri:</label>
                            <input placeholder="Số seri" type="text" class="form-control valid" name="soseri">
                        </div>

                        <div class="form-group">
                            <label class="clwhite">Mã thẻ:</label>
                            <input placeholder="Mã thẻ" type="text" class="form-control valid" name="mathe">
                        </div>
                        <input style="border: none; color: #1b1818; background-color: #1b1818;"  type="text" name="level"  value="<?php
                            foreach ($data as $value){
                                echo ''.$value['level'].'';
                            }
                        ?>">
                        <input style="border: none; color: #1b1818; background-color: #1b1818;"  type="text" name="sodu"  value="<?php
                            foreach ($data as $value){
                                echo ''.$value['sodu'].'';
                            }
                        ?>">
                        
                        

                        <div class="form-group mt-3">
                            <button type="submit" name="submit" class="btn btn-danger btn-block btn-napngay">Gửi thẻ</button>
                        </div>

                    </form>
                    <h2 class="text-center text-danger fs21 m-b-15">Lịch sử nạp thẻ</h2>

                    <div style="max-width: 100%;overflow: auto">
                        <table class="table text-center table-bordered">
                            <thead>
                                <tr>
                                    <td>STT</td>
                                    <td>Mệnh giá thẻ</td>
                                    <td>Trạng thái nạp</td>
                                    <td>Loại thẻ</td>
                                    <td>Số SERI</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql2="SELECT*FROM thedanap where email='$email'";
                                    $result2=mysqli_query($conn,$sql2);
                                    if(mysqli_num_rows($result2)>0){
                                    while ($row2=mysqli_fetch_assoc($result2)) {
                                        $data2[] = $row2;
                                    }
                                ?>
                                <?php foreach($data2 as $value2): ?>
                                <tr>
                                    <td><?php echo $value2['id']; ?></td>
                                    <td><?php echo $value2['menhgia']; ?></td>
                                    <td>Đã nạp</td>
                                    <td><?php echo $value2['loaithe']; ?></td>
                                    <td><?php echo $value2['soseri']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <?php }
                                    else{
                                    echo '
                                    <tr>
                                        <td class="text-center text-danger" colspan="6">Bạn không có giao dịch nào</td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
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
            </div>
        </footer>
    </div>
</body>
</html>
