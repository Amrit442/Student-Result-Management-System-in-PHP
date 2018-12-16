<?php
include('conn.php');
session_start();
?>
<html>
    <head>
    <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
        <body>
        <div class="header">
            <h1>Teacher Log In</h1>
 <div class="imgcontainer">
  <img src="images.png" alt="images" class=imug>
 </div> 
</div></h1>
        </div>
        
        <form action="" method="post">
            
            <div class="form1">
                <label>Teacher's Name</label>
                <input type="text" name="Name" required>
            </div>
            <div class="form1">
                <label>Password</label>
                <input type="password" name="password1" required>
            <div class="form1">
                <button type="submit" name="login" class="button">Login</button>
            </div>
                </form>
            <?php
            if(isset($_POST['login']))
            {
            $User=$_POST['Name'];
            $pwd=$_POST['password1'];
            $a=$db->prepare("SELECT * FROM teacher where name='$User' && pass='$pwd'");
            $a->execute();
            $res=$a->fetchAll(PDO::FETCH_OBJ);
            if($res)
            {
                $_SESSION['Name']=$User;
                header("location:teacher-home.php");
                
            }else
            {
                echo "<script>alert('Wrong User')</script>";
            }
            }
            ?>
            </body>
    </html>
            