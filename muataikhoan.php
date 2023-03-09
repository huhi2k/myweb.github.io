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
    $email=$_REQUEST['email'];
    $level=$_REQUEST['level'];
    $sql="SELECT*FROM user_dangnhap where email='$email'";
    $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    } 
?>
<?php
                        
    $sql1="SELECT*FROM account where id='$id'";
    $result1=mysqli_query($conn,$sql1);
    while ($row1=mysqli_fetch_assoc($result1)) {
        $data1[] = $row1;
    } 
    
?>
<?php   
        $txtemail="";
        $giahientai="";
        $sodu="";
        $solanmua="";
        if(isset($_REQUEST["giahientai"]) && isset($_REQUEST["sodu"]) && isset($_REQUEST["email"]) && isset($_REQUEST["solanmua"]))
        {
            if(isset($_REQUEST["submit"]))
        {
            $email=$_REQUEST['email'];
            $level=$_REQUEST['level'];
            $id=$_REQUEST["id"];
            $giahientai=$_REQUEST["giahientai"];
            $sodu=$_REQUEST["sodu"];
            $txtemail=$_REQUEST['email'];
            $solanmua=$_REQUEST['solanmua'];
        
        if($sodu<$giahientai)
        {
            header('Location: muathatbai.php?email='.$email.'&level='.$level.'&id='.$id.'');
        }
        else{
            $soduconlai=$sodu-$giahientai;
            $solanmua=$solanmua+1;
            $sql3="INSERT into account_sold (email,id,tentaikhoan,matkhau,giahientai,sotuong,sotrangphuc,rank) select '$email',id,tentaikhoan,matkhau,giahientai,sotuong,sotrangphuc,rank from account where id='$id';";
            
            
            $sql2="DELETE from account where id='$id'; ";
            $sql5="UPDATE user_dangnhap set sodu='$soduconlai', solanmua='$solanmua' where email='$email'";
            mysqli_query($conn,$sql3);
            
            mysqli_query($conn,$sql2);
            mysqli_query($conn,$sql5);
            header('Location: muathanhcong.php?email='.$email.'&level='.$level.'&id='.$id.'');    
            
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
                        
                        <form action="muataikhoan.php" method="post" >
                            <input style="border: none; color: #fff;"  type="text" name="email"  value="<?php
                                foreach ($data as $value){
                                    echo ''.$value['email'].'';echo $txtemail;
                                }
                            ?>">
                            <input style="border: none; color: #fff;"  type="text" name="level"  value="<?php
                                foreach ($data as $value){
                                    echo ''.$value['level'].'';
                                }
                            ?>">
                            <input style="border: none; color: #fff;"  type="text" name="sodu"  value="<?php
                                foreach ($data as $value){
                                    echo ''.$value['sodu'].''; echo $sodu;
                                }
                            ?>">
                            <input style="border: none; color: #fff;"  type="text" name="solanmua"  value="<?php
                                foreach ($data as $value){
                                    echo ''.$value['solanmua'].''; echo $solanmua;
                                }
                            ?>">
                            <input style="border: none; color: #fff;"  type="text" name="id"  value="<?php
                                foreach ($data1 as $value1){
                                    echo ''.$value1['id'].'' ;
                                }
                            ?>">
                            <?php   foreach ($data1 as $value1): ?>
                            <input style="border: none; color: #fff;" type="text" name="giahientai"  value="<?php echo ''.$value1['giahientai'].'' ; echo $giahientai; ?>">
                            <?php   endforeach ; ?> 
                        
                            <div style="text-align:center;font-size:2.6rem;margin-top: 60px;">
                                Bạn có muốn mua tài khoản này?
                            </div>

                            <div class="auth-form_controls" style="justify-content: space-between;margin-left: 50px; margin-right: 50px;">
                                <button type="submit" name="submit" class='btn btn-primary'>Có</button>
                                <?php   foreach ($data1 as $value1): ?>
                                <?php
                                    foreach ($data as $value){
                                        echo '<a href="chitiettaikhoanlogin.php?email='.$value['email'].'&level='.$value['level'].'&id='.$value1['id'].'" class="back" style="font-size:1.6rem;min-width: 124px;
    height: 34px;text-align: center;border: 1px solid #adabab;padding-top:8px;background-color: #adabab;border-radius:2px"   >Không</a>';
                                    }
                                ?>
                                <?php   endforeach ; ?>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</body>
</html>
