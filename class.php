<?php
include('conn.php');
session_start();
?>
<html>
    <head>
          <meta charset=utf-8>

    <title>Class</title>
        <link rel="stylesheet" type="text/css" href="class.css">
         <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
        <body>
   
            <?php include("nav.php"); ?>
        
        <table border="0">
        <div class="header">
            <h1>Student's Class</h1>
     
        </div></table>
        
        <form action="" method="post">
              
            <div class="form1">
            <table border="0">
                <tr>
                 <td>USN</td>
                <td><input type="text" name="USN" required></td>
                </tr>
                <tr>
                 <td>SSID</td>
                <td><input type="text" name="SSID" required></td>
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
                $usn=$_POST['USN'];
                $ssid=$_POST['SSID'];
            
                if($usn !=''||$ssid !=''){
                $a=$db->prepare("INSERT INTO class (usn,ssid) VALUES (:usn,:ssid)");
                $a->bindValue('usn',$usn);
                $a->bindValue('ssid',$ssid);
               
                if($a->execute())
                {
                    echo "<script>alert('Class added Successfully')</script>";
                }
                   else
                {
                     echo "<script>alert('Class not added(may be some field missing)')</script>";
                }
                
            }
          }
        ?>
    </body>
</html>