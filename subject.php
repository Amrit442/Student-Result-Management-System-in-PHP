<?php
include('conn.php');
session_start();
?>
<html>
    <head>
          <meta charset=utf-8>

    <title>Subject</title>
        <link rel="stylesheet" type="text/css" href="subject.css">
         <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
        <body>
            
  <?php include("nav.php"); ?>
        
        <table border="0">
        <div class="header">
            <h1>Subjects</h1>
 
        </div></table>
        
        <form action="" method="post">
              
            <div class="form1">
            <table border="0">
                <tr>
                 <td>Subject Code</td>
                <td><input type="text" name="subcode" required></td>
                </tr>
                <tr>
                 <td>Subject's Name</td>
                <td><input type="text" name="title" required></td>
                </tr>
                 <tr>
                <td>Semester</td>
                <td><input type="text" name="sem"></td>
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
                $subcode=$_POST['subcode'];
                $title=$_POST['title'];
                 $sem=$_POST['sem'];
            
                if($subcode !=''||sem !=''){
                $a=$db->prepare("INSERT INTO subject (subcode,title,sem) VALUES (:subcode,:title,:sem)");
                $a->bindValue('subcode',$subcode);
                $a->bindValue('title',$title);
                $a->bindValue('sem',$sem);
               
                if($a->execute())
                {
                    echo "<script>alert('Subject added Successfully')</script>";
                }
                   else
                {
                     echo "<script>alert('Subject not added(may be some field missing)')</script>";
                }
                
            }
          }
        ?>
    </body>
</html>


            
<!--
CREATE PROCEDURE GET_ALL_SUBJECTS()
BEGIN
SELECT * FROM `subject`;
END

CREATE PROCEDURE `getSubject`() NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER SELECT * FROM subject;

$sql="CALL `getSubject`()"; -->
