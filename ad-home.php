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
   
        <?php include("nav.php"); ?>
        
    <h1>WELCOME ADMIN</h1>
    
    <?php
     $User=$_SESSION['admin'];
    if(!$User)
    {
        header("location:ad-home.php");
    }
        
   ?>
    
    
    
    </body>
</html>