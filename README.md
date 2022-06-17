# php-mysql
php mysql 登入系統
安裝xampp
執行php程式碼

1安裝xmapp
官網上先下載xampp執行檔
https://www.apachefriends.org/zh_tw/download.html

執行安裝解析![擷取2](https://user-images.githubusercontent.com/106506864/174240753-a83036cd-a0c3-4133-bebe-d8c9b129e14e.PNG)

執行安裝![擷取](https://user-images.githubusercontent.com/106506864/174240836-1119bcf0-b728-4671-8dc0-a8016e76b9fa.PNG)

登入首頁
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <?php 
            if($_SESSION){
                echo $_SESSION["USER"]."你好";
            }else{
                echo "訪客你好";
            }
        ?>
           
    </div>
<nav>
    <?php if($_SESSION) { ?>
        <a href="logout.php?q=true">登出</a>
    <?php }else{?>
        <a href="login.php">登入</a>
        <a href="signup.php">申請會員</a>
    <?php } ?>
</nav>

</body>
</html>




