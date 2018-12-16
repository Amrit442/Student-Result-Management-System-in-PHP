<?php
include('conn.php');
session_start();
?>
<html>
    <head>
    <title>Change Password</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" type="text/css" href="mobileno.css">
    </head>
        <body>
            <div class="bg">

         <div class="topnav" id="myTopnav">
        
          <a href="logout.php">LOG_OUT</a>
          <a href="ttmarks.php">STUDENT MARKS</a>
        <a href="showstudent.php">SHOW STUDENT</a>
          <a href="pass-change.php">CHANGE PASSWORD</a>
    </div>
        <div class="header">
            <h1>PASSWORD CHANGE</h1>
        </div>
        
        <form action="" method="post">
            <div class="form1">
                <label>Old Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="form1">
                <label> New Password</label>
                <input type="password" name="password1" required>
            <div class="form1">
                <div class="form1">
                <label> Confirm New Password</label>
                <input type="password" name="password2" required>
            <div class="form1" id="but">
             <center> <button type="submit" name="login" class="button">Login</button></center>
            </div>
                </form>
       <?php
            if(isset($_POST['login']))
            {
                $ps=$_POST['password'];
                $nps=$_POST['password1'];
                $cps=$_POST['password2'];
                $a=$db->query("SELECT pass FROM teacher WHERE 
                pass='$ps'");
                if(!$a)
                {
                    echo "The username you entered does not exist";
                }
                if($nps==$cps)
                $b=$db->query("UPDATE teacher SET pass='$nps' where 
                    pass='$ps'");
                if($b)
                {
                    echo "<script>alert('Congratulations You have successfully changed your password')</script>";
                }
                else
                {
                    echo "<script>alert('Passwords do not match')</script>";
                }
            }
        ?>
                </div>
    </body>
</html>
            