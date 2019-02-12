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
        <title>Show Marks</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
        <body>
            <div class="topnav" id="myTopnav">
            
       <a href="logout.php">LOG_OUT</a>
                <a href="triggers.php">TRIGGERS</a>
                 <a href="Requested.php">USER REQUEST</a>
                  <a href="showstudent.php">SHOW STUDENT</a>
        <a href="external.php">MARKS</a>
         <a href="subject.php">SUBJECT</a>
         <a href="class.php">CLASS</a>
         <a href="semsec.php">SEMSEC</a>
         <a href="student.php">STUDENT INFO</a>
    
       </div>
            <center><div class="top">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        
                        <th scope="col">USN</th>
                        <th scope="col">SubCode</th>
                        <th scope="col">SSID</th>
                         <th scope="col">First Internal Marks</th>
                        <th scope="col">Second Internal Marks</th>
                        <th scope="col">Third Internal Marks</th>
                        <th scope="col">Final Internal Marks</th>
                        <th scope="col">Full Internal Marks</th>
                        <th scope="col">External Marks</th>
                        <th scope="col">Full External Marks</th>
                        <th scope="col">Total</th>
                        <th scope="col">Full Marks</th>
                        <th scope="col">Results</th>
                        
                    </tr>
                        </thead>
                    <?php
                    $a=$db->query("SELECT * FROM external");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                      ?>
                    <tbody>
                    <tr data-id='$id'>
                      
                        <td class="mid"><?=$f->usn; ?></td>
                        <td scope="row"><?=$f->subcode; ?></td>
                        <td class="mid"><?=$f->ssid; ?></td>
                        <td class="mid"><?=$f->iamarks1; ?></td>
                        <td class="mid"><?=$f->iamarks2; ?></td>
                        <td class="mid"><?=$f->iamarks3; ?></td>
                        <td class="mid"><?=$f->avg; ?></td>
                        <td class="mid"><?=$f->iafull; ?></td>
                        <td scope="row"><?=$f->extmarks; ?></td>
                        <td scope="row"><?=$f->extfull; ?></td>
                        <td class="mid"><?=$f->total; ?></td>
                        <td scope="row"><?=$f->full; ?></td>
                        <td class="mid"><?=$f->result; ?></td>
                         
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





            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            