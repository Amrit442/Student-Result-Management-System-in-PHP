<?php
include('conn.php');
session_start();
$admin=$_SESSION['admin'];
  if(!(isset($_SESSION['admin']))){
header("location:admin.php");
}
?>
<html>
    <head>
          <meta charset=utf-8>

    <title>Semsec</title>
        <link rel="stylesheet" type="text/css" href="semsec.css">
         <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
        <body>
          
            <?php include("nav.php"); ?>
            
        <table border="0">
        <div class="header">
            <h1>Student's Semester and Section</h1>
     
        </div></table>
        
        <form action="" method="post">
              
            <div class="form1">
            <table border="0">
                <tr>
                 <td>SSID</td>
                <td><input type="text" name="SSID" required></td>
                </tr>
                <tr>
                 <td>Semester</td>
                <td><input type="text" name="semest" required></td>
                </tr>
                 <tr>
                <td>Section</td>
                <td><input type="text" name="sect"></td>
                </tr>
                <tr>
                    <td> <button type="submit" name="registers" class="button">Add</button></td>
                </tr>
                </table>
            </div>
            </form>
            <?php
          
            if(isset($_POST['registers']))
            {   
                $ssid=$_POST['SSID'];
                $sem=$_POST['semest'];
                $sec=$_POST['sect'];
            
                if($ssid !=''||$sem !=''){
                $a=$db->prepare("INSERT INTO semsec (ssid,sem,sec) VALUES (:ssid,:sem,:sec)");
                $a->bindValue('ssid',$ssid);
                $a->bindValue('sem',$sem);
                $a->bindValue('sec',$sec);
               
                if($a->execute())
                {
                    echo "<script>alert('Semester and Section added Successfully')</script>";
                }
                   else
                {
                     echo "<script>alert('Semester and Section not added(may be some field missing)')</script>";
                }
                
            }
          }
        ?>
    </body>
</html>