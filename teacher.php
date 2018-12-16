<?php
include('conn.php');
session_start();
?>
<html>
    <head>
          <meta charset=utf-8>

    <title>Teacher</title>
        <link rel="stylesheet" type="text/css" href="teacher.css">
         <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
        <body>
            
   <?php include("nav.php"); ?>
    
        
        <table border="0">
        <div class="header">
            <h1>TEACHER INFORMATION</h1>
 
        </div></table>
        
        <form action="" method="post">
              
            <div class="form1">
            <table border="0">
                <tr>
                 <td>Tid</td>
                <td><input type="text" name="tid" required></td>
                </tr>
                <tr>
                 <td>Name</td>
                <td><input type="text" name="Name" required></td>
                </tr>
                <tr>
                <td>Password</td>
                    <td> <input type="password" name="password" required></td>
                </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="cpassword" required></td>
            </tr>
                 <tr>
                <td>City</td>
                <td><input type="text" name="addr"></td>
                </tr>
                <tr>
                <td>Phone</td>
                <td><input type="text" name="phn" maxlength="10" required></td>
                </tr>
                <tr>
                <td>Gender</td>
                    <td><input type="radio" name="gender" value="male"checked> M<input type="radio" name="gender" value="female">F</td>
                </tr>
                  <tr>
                <td>Date-of-Birth</td>
                <td><input type="date" name="dat"></td>
                </tr>
                <tr>
                 <td>Qualification</td>
                <td><input type="text" name="qaf" required></td>
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
                $tid=$_POST['tid'];
                $name=$_POST['Name'];
                $pass=$_POST['password'];
                 $cpass=$_POST['cpassword'];
                 $address=$_POST['addr'];
                $phone=$_POST['phn'];
                $gender=$_POST['gender'];
                $dob=$_POST['dat'];
                $qaf=$_POST['qaf'];
            
                if(($tid !=''||name !='')&&($pass==$cpass)){
                $a=$db->prepare("INSERT INTO teacher (tid,name,pass,address,phone,gender,dob,qaf) VALUES (:tid,:name,:pass,:address,:phone,:gender,:dob,:qaf)");
                $a->bindValue('tid',$tid);
                $a->bindValue('name',$name);
                    $a->bindValue('pass',$pass);
                $a->bindValue('address',$address);
                $a->bindValue('phone',$phone);
                $a->bindValue('gender',$gender);
                $a->bindValue('dob',$dob);
                     $a->bindValue('qaf',$qaf);
               
                if($a->execute())
                {
                    echo "<script>alert('Teacher added Successfully')</script>";
                }
                   else
                {
                     echo "<script>alert('Teacher not added(may be some field missing)')</script>";
                }
                
            }
          }
        ?>
    </body>
</html>