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
    <?php
        $email=$_REQUEST['email'];
        $level=$_REQUEST['level'];
        $sodu=$_REQUEST['$sodu'];
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
                            echo '<a class="header_logo" href="admin.php?email='.$value['email'].'&level='.$value['level'].'"><img src="asset/img/logo24h.png"/></a>
                    ';
                        }
                    ?>
                    
                    <ul class="header_navbar_list">
                        
                        
                        <li class="header_navbar-item header_navbar-user">
                            <?php
                        foreach ($data as $value){
                            echo '<a href="admin.php?email='.$value['email'].'&level='.$value['level'].'" class="header_navbar-user-link">
                                <i class="fa-solid fa-user"></i>
                            </a>
                    ';
                        }
                    ?>
                            
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        
        
<div class="modal">
    <div class="modal_overlay"></div>

    <div class="modal_body"> 
                
        <!-- ????ng ky?? th????t ba??i -->
        <div class="login fail">
            <div class="login fail-icon">
                <div class="login fail-icon-check"><i class="fa-regular fa-circle-xmark"></i></div>
                
            </div>

            <div class="login fail-text">
                The?? ??a?? ????????c s???? du??ng! Xin vui lo??ng ki????m tra la??i
            </div>

            <div class="login fail-footer">
                <div class="login fail-btn">
                    <?php
                        foreach ($data as $value){

                            echo '<a href="napthe.php?email='.$value['email'].'&level='.$value['level'].'&sodu='.$value['sodu'].'" class="content-link" style="color: white;"><button class="btn-confirm">OK</button></a>';
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>