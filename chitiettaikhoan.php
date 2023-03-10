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
<?php include("connect.php"); ?>
.m{
    margin-top: 20px;
    margin-bottom: 30px;
}

.d-flex {
    display: -webkit-box!important;
    display: -ms-flexbox!important;
    display: flex!important;
}
.align-items-center {
    -webkit-box-align: center!important;
    -ms-flex-align: center!important;
    align-items: center!important;
}

label {
    font-weight: 400;
}

.m-r-5 {
    margin-right: 5px!important;
}

.m-r-15 {
    margin-right: 15px!important;
}

.price-new {
    font-size: 18px;
    vertical-align: top;
    font-weight: 700;
    color: #e8c22b;
}

.fs24 {
    font-size: 24px!important;
}

.price-old {
    font-size: 14px;
    color: #999;
    text-decoration: line-through;
    display: inline-block;
    line-height: 100%;
    font-weight: 400;
    position: relative;
}

.m-t-20 {
    margin-top: 20px!important;
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
    font-size: 1,6rem;
    line-height: 1.5;
    border-radius: 2px;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
}

.m-r-10 {
    margin-right: 10px!important;
}

.btn {
    border-radius: 0!important;
}    

.nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.nav_custom {
    margin-bottom: 15px;
    background-color: rgba(0,0,0,.6);
}


.nav-link {
    display: block;
    background-color: #dc7a35;
}

.nav_custom .nav-link {
    border-radius: 0;
    padding: 0 3px;
    height: 40px;
    line-height: 40px;
}

.nav_custom li .nav-link {
    text-align: center;
}

.nav-pills .nav-link.active {
    color: #fff;
}

.border-x-white {
    border-left: 1px solid #fff;
    border-right: 1px solid #fff;
}
.border-y-white {
    border-right: 1px solid #fff;
}

.nav_custom li {
    font-size: 18px;
    flex: 25%;
    max-width: 25%;
}

.box_info_img {
    margin: auto;
    text-align: center;
}

img {
    max-width: 100%;
    vertical-align: middle;
    object-fit: cover;
}

.w-100 {
    width: 100%!important;
}

.m-b-10 {
    margin-bottom: 10px!important;
}
</style>
</head>

<body>
<?php 
    $id=$_REQUEST['id'];
    $sql="SELECT*FROM account where id='$id'";
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
                            echo '<a class="header_logo" href="index.php"><img src="asset/img/logo24h.png"/></a>';
                        }
                    ?>
                    <ul class="header_navbar_list">
                        
                        <a href="dangnhap.php" class="header_navbar-item header_navbar-item-btn">????ng nh???p</a>
                        <a href="dangky.php" class="header_navbar-item header_navbar-item-btn">????ng k??</a>
                        
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
                            
                            <a href="index.php" class="breadcrumb-item-home">Home</a>'
                                
                            
                        </li>
                        <li class="breadcrumb-item active">
                            <?php
                                foreach ($data as $value){
                                    echo '<a class="breadcrumb-item-instruction">ACC#'.$value['id'].'</a>';
                                }
                            ?>
                        </li>
                    </ul>    
                </nav>
                <?php
                    foreach ($data as $value){
                        echo '<h1 class="contain-tittle">ACC#'.$value['id'].'</h1>';
                    }
                ?>
                <div class="contain-content-user">
                    <div class="desc m " style="font-style: italic">
                        <div class="price d-flex align-items-center">
                            <label class="m-r-5">Gi?? :</label>
                            <?php
                                foreach ($data as $value){
                                    echo '<strong class="price-new fs24 m-r-15">'.$value['giahientai'].' ??</strong>
                                    <span class="price-old ">'.$value['giacu'].' ??</span>';
                                }
                            ?>
                        </div>
                        <div class="buttonGroup m-t-20">
                            <a href="dangnhap.php"><button class="btn btn-success m-r-10">????ng nh???p ????? mua nick
                            </button></a>
                        </div>
                    </div>
                    <ul class="nav nav-pills nav_custom" id="tab_detail" role="tablist">
                        <li class="">
                            <a class="nav-link active" >Th??ng tin</a>
                        </li>
                        <li class="border-x-white">
                            <?php
                                foreach ($data as $value){
                                    echo '<a class="nav-link" >T?????ng ('.$value['sotuong'].')</a>';
                                }
                            ?>
                        </li>
                        <li class="border-y-white">
                            <?php
                                foreach ($data as $value){
                                    echo '<a class="nav-link" >Trang ph???c ('.$value['sotrangphuc'].')</a>';
                                }
                            ?>
                            
                        </li>
                        <li class="">
                            <?php
                                foreach ($data as $value){
                                    echo '<a class="nav-link" >Rank ('.$value['rank'].')</a>';
                                }
                            ?>
                        </li>
                    </ul>
                    <div class="box_info_img" style="pointer-events: none;user-select: none">
                        <?php
                            foreach ($data as $value){
                                echo '<img class="lazy w-100  m-b-10" src="asset/img/'.$value['anh'].'">';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="grid">
                <div class="grid_row">
                    <div class="grid_column-4">
                        <div class="footer-info" style="margin-top: 20px">?????a ch???: Khu ???? th??? Linh ????m - Ho??ng Mai - H?? N???i</div>
                        
                        <div class="footer-info">Copyright by <a href="" class="footer-info-link" onclick="reload_page()">Shop Li??n Minh 24H</a>.</div>
                    </div>
                    <div class="grid_column-4">
                        <div class="footer-hotline">
                            
                                <div class="footer-hotline-num">
                                    <p>
                                        <a href="">Hotline: 0978 537 962</a>
                                    </p>
                                    <p style="margin-bottom: 10px;">
                                        <a>Nguy???n Qu???c Hi???u</a>
                                    </p>
                                </div>
                                <div class="footer-hotline-work">
                                    Th???i gian l??m vi???c: <strong>GIAO D???CH T??? ?????NG 24/24</strong> c??c ng??y trong tu???n
                                </div>
                            
                        </div>
                    </div>
                    <div class="grid_column-4">
                        <div class="footer-social">
                            <span class="footer-text">Li??n k???t chia s???:</span>
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
