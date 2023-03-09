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
                if(isset($_REQUEST["tentaikhoan"]))
                {
                    if(isset($_REQUEST["submit"]))
                {
                    $email=$_REQUEST['email'];
                    $txttentaikhoan=$_REQUEST["tentaikhoan"];
                    
                
                if($txttentaikhoan=="")
                {
                    header('Location: nhapthongtintaikhoan.php?email='.$email.'&txttentaikhoan='.$txttentaikhoan.'');
                }
                else{
                    $sql2="DELETE from account where tentaikhoan='$txttentaikhoan'; ";
                    mysqli_query($conn,$sql2);
                    
                    header('Location: xoathanhcong.php?email='.$email.'');    
                    
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
        
        <div class="modal">
            <div class="modal_overlay"></div>

            <div class="modal_body"> 
                
            <!-- Login form -->
                 <div class="auth-form">
                    <div class="auth-form_container">
                        <?php
                        
                            $sql1="SELECT*FROM account where id='$id'";
                            $result1=mysqli_query($conn,$sql1);
                            while ($row1=mysqli_fetch_assoc($result1)) {
                                $data1[] = $row1;
                            } 
                        ?>
                        <form action="xoataikhoan.php" method="post" >
                            <input style="border: none; color: #fff;"  type="text" name="email"  value="<?php
                            foreach ($data as $value){
                                echo ''.$value['email'].'';
                            }
                        ?>">
                        <?php   foreach ($data1 as $value1): ?>
                            <input style="border: none; color: #fff;" type="text" name="tentaikhoan"  value="<?php echo ''.$value1['tentaikhoan'].'' ; echo $txttentaikhoan; ?>">
                            <?php   endforeach ; ?>
                        
                            <div style="text-align:center;font-size:2.6rem;margin-top: 60px;">
                                Bạn có muốn xóa tài khoản này?
                            </div>

                            <div class="auth-form_controls" style="justify-content: space-between;margin-left: 50px; margin-right: 50px;">
                                <button type="submit" name="submit" class='btn btn-primary'>Có</button>
                                <?php
                                    foreach ($data as $value){
                                        echo '<a href="admin.php?email='.$value['email'].'&level='.$value['level'].'" class="back" style="font-size:1.6rem;min-width: 124px;
    height: 34px;text-align: center;border: 1px solid #adabab;padding-top:8px;background-color: #adabab;border-radius:2px"   >Không</a>';
                                    }
                                ?>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</body>
</html>
