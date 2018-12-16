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
            <h1>Enter USN</h1> 
</div></h1>
        </div>
        
        <form action="" method="post">
            
            <div class="form1">
                <label>USN</label>
                <input type="text" name="Name" required>
            </div>
           
            <div class="form1">
                <button type="submit" name="login" class="button">Submit</button>
            </div>
                </form>
            <?php
            if(isset($_POST['login']))
            {
            $USN=$_POST['Name'];
            $a=$db->prepare("SELECT * FROM external where usn='$USN' ");
            $a->execute();
            $res=$a->fetchAll(PDO::FETCH_OBJ);
            if($res)
            {
                $_SESSION['Name']=$USN;                                                                                                                                                                                                                                                             
                header("location:marks.php");
                
            }else
            {
                echo "<script>alert('Wrong User')</script>";
            }
            }
            ?>
            </body>
    </html>
            