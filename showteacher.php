<?php
include('conn.php');
session_start();
?>
<html>
    <head>
        <title>Show Teachers</title>
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
                        
                        <th scope="col">TID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                         <th scope="col">Phone</th>
                        <th scope="col">Gender</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Qualification</th>
                        
                    </tr>
                        </thead>
                    <?php
                    $a=$db->query("SELECT * FROM teacher");
                    
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                       
                      ?>
                    
                   
                    <tbody>
                    <tr data-id='$id'>
                      
                        <td class="mid"><?=$f->tid; ?></td>
                        <td scope="row"><?=$f->name; ?></td>
                        <td class="mid"><?=$f->address; ?></td>
                        <td class="mid"><?=$f->phone; ?></td>
                        <td scope="row"><?=$f->gender; ?></td>
                        <td class="mid"><?=$f->dob; ?></td>
                        <td class="mid"><?=$f->qaf; ?></td>
                        
                         
                    </tr>
                   
                    </tbody>
                    <?php } ?>
                         
                </table>
                </div>
            </center>
            
           
    </body>
</html>





            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            