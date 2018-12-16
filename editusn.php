<?php
include('conn.php');
session_start();
?>
<html>
    <head>
    <title>UPDATE</title>
        <link rel="stylesheet" type="text/css" href="mobileno.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
       <style>
           #in{
    display: inline;
}</style>
    </head>
        <body>
            <div class="bg">
        
        <div class="header">
            <h1>Update Student Information</h1>
        </div>
        
        <form action="" method="post">
            <div class="form1">
                <label>USN</label>
                <input type="text" name="USN" required>
            </div>
            <div class="form1">
                <label>Address</label>
                <input type="text" name="addr" required>
            </div>
            <div class="form1">
                <label>Phone</label>
                <input type="text" name="phn" required>
            </div>
            <div class="form1" id="in">
                <button type="submit" name="login" class="button">Update</button>  <a href="showusn.php" type="submit" class="button">Back</a>
            </div>
            </form>
       <?php
            if(isset($_POST['login']))
            {
                 $usn=$_POST['USN'];
                 $address=$_POST['addr'];
                 $phone=$_POST['phn'];
                $a=$db->query("SELECT usn FROM student WHERE 
                usn='$usn'");
                if(!$a)
                {
                    echo "The username you entered does not exist";
                }
                $b=$db->query("UPDATE student SET address='$address',phone='$phone' where 
                    usn='$usn'");
                echo "<script>alert('Student Data Updated Successfully')</script>";
            }
        ?>
            </div>
    </body>
</html>
            