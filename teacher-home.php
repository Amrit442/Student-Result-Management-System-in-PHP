<?php
include('conn.php');
session_start();
?>
<html>
    <head>
   <link rel="stylesheet" type="text/css" href="salary.css">
         <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" type="text/css" href="admin-home.css">
    </head>
    <body>
   
      <div class="topnav" id="myTopnav">
        
          <a href="logout.php">LOG_OUT</a>
          <a href="ttmarks.php">STUDENT MARKS</a>
        <a href="showstudent.php">SHOW STUDENT</a>
          <a href="pass-change.php">CHANGE PASSWORD</a>
    </div>
        
        
    
    
    <?php
     $User=$_SESSION['Name'];
    if(!$User)
    {
        header("location:teacher-home.php");
    }
        
   ?>
    
    <h1>Welcome Teacher</h1>
    
    </body>
</html>