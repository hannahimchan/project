<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="stylelog.css"> -->
    <style>
body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: #F3F9F8;
}
.box{
    width: 300px;
    padding: 35px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #51A78A;
    text-align: center;
    border-radius: 20px;
    /* 1 */
  }
h1{
    color: white;
    font-size: 30px;
    /* text-transform: uppercase; */
    font-weight: 550;
}
.box input[type = "text"],.box input[type = "password"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #511E0D;
    padding: 14px 10px;
    width: 280px;
    outline: none;
    color: white;
    border-radius: 24px; 
    transition: 0.25s;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -40px;
    left: 140px;
}
.box input[type = "submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #12A21F;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px; 
    transition: 0.25s;
    cursor: pointer;
}
.box input[type = "submit"]:hover{
    background: #09B118;
}
.bg-modal{
    width: 100%;
    height: 100%;
    background-color: green;
    position: absolute;
    
}
</style>
</head>
<body>
    <?php
        require('db.php');
        session_start();

        if(isset($_POST['username'])) {
            // removes backslashes
            $username = stripslashes($_REQUEST['username']);
            // escapes special characters in a string
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);

            // Checking is user existing in the database ot not
            $query = "SELECT * FROM user WHERE username='$username' AND password='".md5($password)."'";            
            $result = mysqli_query($con, $query) or die(mysqli_error());
            $rows = mysqli_num_rows($result);

            if(mysqli_num_rows($result)==1){
 
                $row = mysqli_fetch_array($result);

                $_SESSION["ID"] = $row["ID"];//ประกาศตัวแปรUserIDไว้เพื่อส่งค่า
                $_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];//ประกาศตัวแปรUserไว้เพื่อส่งค่า
                $_SESSION["Userlevel"] = $row["Userlevel"];//ประกาศตัวแปรUserlevelไว้เพื่อส่งค่า

                if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                  Header("Location: index.html");

                }

                if ($_SESSION["Userlevel"]==""){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                  Header("Location: user_page.html");

                }
            // if($rows == 1) {
            //     $_SESSION['username'] = $username;
            //     // Redirect user to index1.php
            //      header("Location: index.html");
            } else {
                echo "<div class='bg-modal'>
                            <div class='modal-content'>
                        <h3>Username/Password is incorrect.</h3>
                        <br>Click here to <a href='login.php'>Login</a>
                            </div>
                    </div>";
            }
            } else {
    ?>
            <div class="box">
            <img src="12.png" class="avatar"><br>
            <form action="" method="post" name="login">
                <h1>เข้าสู่ระบบ</h1>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" name="submit" value="Login"><br>
            </form>
            <p>ยังไม่เป็นสมาชิกใช่ไหม? <a href="registration.php">ลงทะเบียนที่นี่</a></p>
            </div>
            
            <?php } ?>
</body>
</html>