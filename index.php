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
.search-text{
    color: #c12828 ;
    font-size: 3rem;
    text-align: center;
    height: 40px;
}

form div{
    margin: 20px auto;
}

.search-rank{

}

.search-rank-input{
    width: 100%;
    height: 40px;
    margin-top: 16px;
    padding: 0 12px;
    font-size: 1.4rem;
    border-radius: 2px;
    border: 1px solid #dbdbdb;
    outline: none;

    
}

.search-btn{
    text-align: center;
}

.search-btn-btn{
    min-width: 124px;
    height: 40px;
    text-decoration: none;
    border: none;
    border-radius: 2px;
    font-size: 1.5rem;
    padding: 0 12px;
    outline: none;
    cursor: pointer;
    color: #333;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    line-height: 1.6rem;

    
}
</style>
<?php include("connect.php"); ?>
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="header_navbar">
                    <a class="header_logo" onclick="reload_page()"><img src="asset/img/logo24h.png"/></a>
                    <ul class="header_navbar_list">
                    	
                        <a href="dangnhap.php" class="header_navbar-item header_navbar-item-btn">Đăng nhập</a>
                        <a href="dangky.php" class="header_navbar-item header_navbar-item-btn">Đăng ký</a>
                        
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
                                    <a href="chitiettaikhoan.php?id=<?php echo $value0['id'] ?>" class="content-link">
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
