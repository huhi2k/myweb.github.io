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
        
        
           

         <?php include("connect.php");
                $txtemail="";
                $txtpassword="";
                $txtrepassword="";
                $level=0;
                $sodu=0;
                if(isset($_REQUEST["email"]) && isset($_REQUEST["1"]) && isset($_REQUEST["2"]))
                {
                    $txtemail=$_REQUEST["email"];
                    $txtpassword=$_REQUEST["1"];
                    $txtrepassword=$_REQUEST["2"];
                if(isset($_REQUEST["dangky"]))
                {
                if($txtemail=="" || $txtpassword=="" || $txtrepassword=="")
                {header('Location: nhapthongtindangky.php');
                }
                else{
                    $sql="SELECT*FROM user_dangnhap where email='$txtemail'";
                    $kt=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($kt)>0){ header('Location: trungemail.php');}
                    else{
                        if($txtpassword == $txtrepassword){
                            $sql1="INSERT INTO user_dangnhap(email,password,level,sodu)
                            VALUES  ('$txtemail','$txtpassword','$level','$sodu')";
                            mysqli_query($conn,$sql1);
                            header('Location: dangkythanhcong.php');
                        }
                        else{
                            header('Location: dangkythatbai.php');
                        }
                        
                    }
                }
                
                
                }
            }
        ?>
 <div class="modal">
            <div class="modal_overlay"></div>

            <div class="modal_body"> 
                <!-- đăng kí -->
                <div class="auth-form">
                    <div class="auth-form_container">
                        <div class="auth-form_header">
                            <h3 class="auth-form_heading">Đăng ký</h3>
                            <span class="auth-form_switch-btn"><a href="dangnhap.php" class="switch">Đăng nhập</a></span>
                        </div>	
						<form action="dangky.php" method="post">
                            <div class="auth-form_form">
                                <div class="auth-form_group">
                                    <input type="text" id="email" name="email" class="auth-form_input" placeholder="Email" value="<?php echo $txtemail;?>">
                                </div>
                                <div class="auth-form_group">
                                    <input type="password" id="1" name="1" class="auth-form_input" placeholder="Mật khẩu" value="<?php echo $txtpassword;?>">
                                </div>
                                <div class="auth-form_group">
                                    <input type="password" id="2" name="2" class="auth-form_input" placeholder="Nhập lại mật khẩu" value="<?php echo $txtrepassword;?>">
                                </div>
                            </div>
                            <div class="auth-form_controls">
                                <button class="btn btn-normal auth-form_controls-back"><a href="index.php" class="back">TRỞ LẠI</a></button>
                                <input type="submit" value="ĐĂNG KÝ" id="dangky" name="dangky" class="btn btn-primary">
                            </div>
                        </form>
					</div>
                </div>
            </div>
        </div>
        <!-- Login form -->
            <!--<div class="auth-form">
                    <div class="auth-form_container">
                        <div class="auth-form_header">
                            <h3 class="auth-form_heading">Đăng nhập</h3>
                            <span class="auth-form_switch-btn">Đăng ký</span>
                        </div>

                        <div class="auth-form_form">
                            <div class="auth-form_group">
                                <input type="text" class="auth-form_input" placeholder="Email">
                            </div>
                            <div class="auth-form_group">
                                <input type="password" class="auth-form_input" placeholder="Mật khẩu">
                            </div>
                        </div>

                        <div class="auth-form_aside">
                            <div class="auth-form_help">
                                <a href="" class="auth-form_help-link auth-form_help-forgot">Quên mật khẩu</a>
                            </div>
                        </div>

                        <div class="auth-form_controls">
                            <button class="btn btn-normal auth-form_controls-back">TRỞ LẠI</button>
                            <button class="btn btn-primary">ĐĂNG NHẬP</button>
                        </div>
                    </div>
                </div>-->

  
</body>
</html>