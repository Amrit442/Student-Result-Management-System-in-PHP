<?php
include('conn.php');
session_start();
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
          <a href="ttmarks.php">STUDENT MARKS</a>
        <a href="showstudent.php">SHOW STUDENT</a>
         
    </div>
            <center><div class="top">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        
                        <th scope="col">USN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                         <th scope="col">Address</th>
                    </tr>
                        </thead>
                    
        <?php
          
            if(isset($_POST['registers']))
            {   
                $sem=$_POST['Semester'];
                $sec=$_POST['Section'];
                
    
                $a=$db->query("SELECT s.usn,s.name,s.phone,s.address FROM student s,semsec ss,class c WHERE 
                s.usn=c.usn and ss.ssid=c.ssid and ss.sem='$sem' and ss.sec='$sec'");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                      ?>
                    <tbody>
                    <tr data-id='$id'>
                      
                        <td class="mid"><?=$f->usn; ?></td>
                        <td scope="row"><?=$f->name; ?></td>
                        <td class="mid"><?=$f->phone; ?></td>
                        <td class="mid"><?=$f->address; ?></td>
                         
                    </tr>
                         <?PHP
                    }
            }
                    ?>
                   </tbody>
                </table>
                </div>
            </center>
            
           
    </body>
</html>