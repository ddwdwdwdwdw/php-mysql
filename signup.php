<?php
    require_once("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user">
        <input type="password" name="pw">
        <input type="text" name="mail">
        <input type="submit" value="申請會員" name="submit">
    </form>
    <?php
        if(isset($_POST["submit"])){
            $user = $_POST["user"];
            $pw = $_POST["pw"];
            $mail = $_POST["mail"];

            $sql = "INSERT INTO members(user,pw,mail)VALUE('$user','$pw','$mail')";
            mysqli_query($conn,$sql);
            echo "<script>alert('申請完成，請重新登入');location.href='login.php';</script>";

        }
    ?>
</body>
</html>