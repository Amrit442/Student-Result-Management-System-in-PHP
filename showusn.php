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
                        
                        <th scope="col">USN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                         <th scope="col">Phone</th>
                        <th scope="col">Gender</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Delete</th>
                         <th scope="col">Edit</th>
                    </tr>
                        </thead>
                    <?php
                    $a=$db->query("SELECT * FROM student");
                    $k=0;
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                        $k++;
                      ?>
                    <form action="showusn.php" method="post">
                   
                    <tbody>
                    <tr data-id='$id'>
                      
                        <td class="mid"><?=$f->usn; ?></td>
                        <td scope="row"><?=$f->name; ?></td>
                        <td class="mid"><?=$f->address; ?></td>
                        <td class="mid"><?=$f->phone; ?></td>
                        <td scope="row"><?=$f->gender; ?></td>
                        <td class="mid"><?=$f->dob; ?></td>
                         <td class="mid"><input type="submit" class="btn btn-danger btn-xs" value="delete" name="delete<?php echo $k; ?>"></td>
                         <td class="mid"><a class="btn btn-warning btn-xs" href="editusn.php">Edit</a></td>
                    </tr>
                    <?PHP
                        
                        $usn_delete=$f->usn;
//                        echo $usn_delete;
                        if(isset($_POST['delete'.$k])){
                            $b=$db->query("DELETE FROM student where usn='$usn_delete'");
                if($b)
                {
//                    echo "<script>alert('Entry deleted')</script>";
                    header("location: showusn.php");
                }
                else
                {
                    echo "<script>alert('Enter correct user')</script>";
                }
                            
                        }
                       
                    }
                    ?>
                    </tbody>
                         </form>
                </table>
                </div>
            </center>
            
           
    </body>
</html>





            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            