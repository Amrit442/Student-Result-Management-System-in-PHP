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

    <title>Student</title>
        <link rel="stylesheet" type="text/css" href="salary.css">
         <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
        <body>
            
   <?php include("nav.php"); ?>
    
        
        <table border="0">
        <div class="header">
            <h1>STUDENT INFORMATION</h1>
 
        </div></table>
        
        <form action="" method="post">
              
            <div class="form1">
            <table border="0">
                <tr>
                 <td>USN</td>
                <td><input type="text" name="USN" required></td>
                </tr>
                <tr>
                 <td>Name</td>
                <td><input type="text" name="Name" required></td>
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
                    <td> <button type="submit" name="registers" class="button">Add</button></td>
                </tr>
                </table>
            </div>
            </form>
            <?php
          
            if(isset($_POST['registers']))
            {   
                $usn=$_POST['USN'];
                $name=$_POST['Name'];
                 $address=$_POST['addr'];
                $phone=$_POST['phn'];
                $gender=$_POST['gender'];
                $dob=$_POST['dat'];
            
                if($usn !=''||name !=''){
                $a=$db->prepare("INSERT INTO student (usn,name,address,phone,gender,dob) VALUES (:usn,:name,:address,:phone,:gender,:dob)");
                $a->bindValue('usn',$usn);
                $a->bindValue('name',$name);
                $a->bindValue('address',$address);
                $a->bindValue('phone',$phone);
                $a->bindValue('gender',$gender);
                $a->bindValue('dob',$dob);
               
                if($a->execute())
                {
                    echo "<script>alert('Student added Successfully')</script>";
                }
                   else
                {
                     echo "<script>alert('Student not added(may be some field missing)')</script>";
                }
                
            }
          }
        ?>
    </body>
</html>