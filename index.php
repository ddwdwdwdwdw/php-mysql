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