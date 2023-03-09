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
                            	<i class="fa-solid fa-user"></i>
                            </a></li>-->
                        
                    </ul>
                </nav>
        	</div>
    	</header>

        <?php
                
                $txtemail="";
                $txtpassword="";
                $index="";
                if(isset($_REQUEST["email"]) && isset($_REQUEST["password"]))
                {
                    $txtemail=$_REQUEST["email"];
                    $txtpassword=$_REQUEST["password"];
                
                {

                if($txtemail=="" || $txtpassword=="")
                {
                    header('Location: nhapthongtindangnhap.php');
                }
                else{
                    $sql1="SELECT*FROM user_dangnhap where email='$txtemail'";
                    $sql2="SELECT*FROM user_dangnhap where password='$txtpassword'";
                    $kt1=mysqli_query($conn,$sql1);
                    $kt2=mysqli_query($conn,$sql2);
                    if(mysqli_num_rows($kt1)>0 && mysqli_num_rows($kt2)>0){
                        
                        header('Location: dangnhapthanhcong.php?email='.$txtemail.'');
                    }
                    else{
                        header('Location: dangnhapthatbai.php');
                        }
                    }
                
                    }
                }
                ?>

        <div class="modal">
            <div class="modal_overlay"></div>

            <div class="modal_body"> 
                
        	<!-- Login form -->
                 <div class="auth-form">
                    <div class="auth-form_container">
                        <div class="auth-form_header">
                            <h3 class="auth-form_heading">Đăng nhập</h3>
                            <span class="auth-form_switch-btn"><a href="dangky.php" class="switch">Đăng ký</a></span>
                        </div>
                        <form action="dangnhap.php" method="post">
                            <div class="auth-form_form">
                                <div class="auth-form_group">
                                    <input type="text" id="email" name="email" class="auth-form_input" placeholder="Email" value="<?php echo $txtemail; ?>">
                                </div>
                                <div class="auth-form_group">
                                    <input type="password" id="password" name="password" class="auth-form_input" placeholder="Mật khẩu" value="<?php echo $txtpassword; ?>">
                                </div>
                            </div>

                            <div class="auth-form_aside">
                                <div class="auth-form_help">
                                    Bạn chưa có tài khoản? <a href="dangky.php" class="auth-form_help-link auth-form_help-forgot">Đăng ký</a>
                                </div>
                            </div>

                            <div class="auth-form_controls">
                                <button class="btn btn-normal auth-form_controls-back"><a href="index.php" class="back">TRỞ LẠI</a></button>
                                <button id='dangnhap' name='dangnhap' class='btn btn-primary'>ĐĂNG NHẬP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
