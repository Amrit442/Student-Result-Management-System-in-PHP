<?php
include('conn.php');
session_start();
?>
<html>
    <head>
    <title> registration</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" type="text/css" href="mobileno.css">
    </head>
        <body>
            <div class="bg">

            <div class="topnav" id="myTopnav">
        <div class="topnav1" id="myTopnav"> </div>
         <a href="logout.php">Log Out</a>
         <a href="showstudent.php">Show Student</a>
        <a href="external.php">Marks</a>
         <a href="subject.php">Subject</a>
         <a href="class.php">Class</a>
         <a href="semsec.php">SemSec</a>
         <a href="student.php">Student Info</a>
         
       </div>
        <div class="header">
            <h1>Delete User</h1>
        </div>
        
       
        <form action="" method="post">
            <div class="form1">
                <label>USN</label>
                <input type="text" name="Name" required>
            </div>
            <div>
             <center><button type="submit" name="del" class="button">Delete</button><p>    </p><a href="showusn.php" type="submit" class="button">Back</a></center>
            </div>
            
                </form>
       <?php
            if(isset($_POST['del']))
            {
                $USN=$_POST['Name'];
                $a=$db->query("SELECT usn FROM student WHERE 
                usn='$USN'");
                if(!$a)
                {
                    echo "error";
                }
            
                $b=$db->query("DELETE FROM student where usn='$USN'");
                if($b)
                {
                    echo "<script>alert('Entry deleted')</script>";
                }
                else
                {
                    echo "<script>alert('Enter correct user')</script>";
                }
            }
        ?>
                </div>
    </body>
</html>
            