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
    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="header_navbar">
                    <a class="header_logo" href="index.php"><img src="asset/img/logo24h.png"/></a>
                    <ul class="header_navbar_list">
                    	
                        <a href="dangnhap.php" class="header_navbar-item header_navbar-item-btn">Đăng nhập</a>
                        <a href="dangky.php" class="header_navbar-item header_navbar-item-btn">Đăng ký</a>
                        <!--<li class="header_navbar-item header_navbar-user">
                        	<a href="" class="header_navbar-user-link">
                            	<i class="fa-solid fa-user"></i>-->
                            </a>
                        </li>
                    </ul>
                </nav>
        	</div>
    	</header>
        
        
        
<div class="modal">
    <div class="modal_overlay"></div>

    <div class="modal_body"> 
                
        <!-- đăng ký thành công -->
        <div class="signin success">
            <div class="signin success-icon">
                <div class="signin success-icon-check"><i class="fa-regular fa-circle-check"></i></div>
                
            </div>

            <div class="signin success-text">
                Đăng ký thành công
            </div>

            <div class="signin success-footer">
                <div class="signin success-btn">
                    <a href="dangnhap.php" class="content-link" style="color: white;"><button class="btn-confirm">OK</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>