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
        <title>Show Subject</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
        <body>
          <div class="topnav" id="myTopnav">
            
       <a href="logout.php">LOG_OUT</a>
                <a href="triggers.php">TRIGGERS</a>
                 <a href="Requested.php">USER REQUEST</a>
        <a href="external.php">MARKS</a>
         <a href="subject.php">SUBJECT</a>
         <a href="class.php">CLASS</a>
         <a href="semsec.php">SEMSEC</a>
                <a href="student.php">TEACHER INFO</a>
         <a href="student.php">STUDENT INFO</a>
    
       </div>
            <center><div class="top">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                       
                        <th scope="col">SubCode</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Semester</th>
                        
                    </tr>
                        </thead>
                    <?php
                    $sql="CALL `getSubject`()";
                    $a=$db->query($sql);
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                      ?>
                    <tbody>
                    <tr data-id='$id'>
                      
                        <td class="mid"><?=$f->subcode; ?></td>
                        <td scope="row"><?=$f->title; ?></td>
                        <td class="mid"><?=$f->sem; ?></td>
                        
                         
                    </tr>
                    <?PHP
                    }
                    ?>
                    </tbody>
                </table>
                </div>
            </center>
            
           
    </body>
</html>





            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            