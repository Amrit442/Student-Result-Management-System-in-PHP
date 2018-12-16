
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
            
      <a href="logout.php">Log Out</a>
                <a href="request.php">Request</a>
     
    
       </div>
            <div class="container">
            <div class="jumbotron">
                <button type="button" class="btn btn-secondary btn-lg active btn-block">BMSIT RESULT</button>
            <br>
            <div class="top">
                
                       <?php
                      $USN=$_SESSION['Name'];
                    $a=$db->query("SELECT * FROM student where usn='$USN'");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                     
                   echo "<strong>University Seat Number :</strong> ".$usn=$f->usn;
                        echo "<br>"; 
                     echo "<strong>Name :</strong> ".$name=$f->name;
                    }
                    ?>
                    <?php
                      $USN=$_SESSION['Name'];
                    $a=$db->query("SELECT sem,sec FROM student,semsec,class where student.usn=class.usn and semsec.ssid=class.ssid and student.usn='$USN'");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                   echo "<br>";  
                   echo "<strong>Semester :</strong> ".$sem=$f->sem;
                        echo "<br>"; 
                     echo "<strong>Section :</strong> ".$sec=$f->sec;
                    }
                    ?>
                    <div class="container">
                        <div class="container">
                            <div class="container">
                    <table class="table table-sm">
                           <table class="table table-sm table table-hover table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        
                        <th scope="col">SubCode</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Internal Marks</th>
                        <th scope="col">Full Internal Marks</th>
                        <th scope="col">External Marks</th>
                         <th scope="col">Full External Marks</th>
                        <th scope="col">Total</th>
                         <th scope="col">Full Marks</th>
                        <th scope="col">Results</th>
                        
                    </tr>
                        </thead>
                    <?php
                    $USN=$_SESSION['Name'];
                    
                    $a=$db->query("SELECT subject.subcode,title,avg,iafull,extmarks,extfull,total,full,result FROM subject,external where subject.subcode=external.subcode && usn='$USN'");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                      ?>
                    <tbody>
                    <tr data-id='$id'>
                      
                        <td scope="row"><?=$f->subcode; ?></td>
                        <td class="mid"><?=$f->title; ?></td>
                        <td class="mid"><?=$f->avg; ?></td>
                        <td class="mid"><?=$f->iafull; ?></td>
                        <td scope="row"><?=$f->extmarks; ?></td>
                        <td scope="row"><?=$f->extfull; ?></td>
                        <td class="mid"><?=$f->total; ?></td>
                        <td scope="row"><?=$f->full; ?></td>
                        <td class="mid"><?=$f->result; ?></td>
                        
                    
                    </tr>
                        <tr>
                            
                        </tr>
                       
                    <?PHP
                    }
                     if(!$USN)
                     {
                        header("location:user.php");
                     }
                    ?>
                    </tbody>
                </table>
                       <br>
                        <table class="table table-sm table table-bordered">
                      <thead><tr>
                        <td>W->WITHELD</td>
                        <td>P->PASS</td>
                        <td>F->FAIL</td>
                        <td>A->ABSENT</td>
                       
                    </tr>
                        <tr><td><strong>Note : Withheld result to be announced later</strong></td></tr>
                          </thead>
                     
                </table>
                        </div>
            </div>
            </div>
                         
                </div>
               <br>
            <center>
                <div> 
                          <?php
                      $USN=$_SESSION['Name'];
                    $a=$db->query("SELECT SUM(full) as Full FROM external where usn='$USN'");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                     
                   $Full=$f->Full;
                 
                    }
                    $a=$db->query("SELECT SUM(total) as Total FROM external where usn='$USN'");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                     
                   echo "Total Marks Scored : " .$Total=$f->Total. " out of " .$Full;
                        echo "<br>";
                     echo "Percentage : ".$Percentage=($Total/$Full)*100 ."%";
                        echo "<br>";
                        echo $cgpa=round(($Percentage/9.50),2). " cgpa";
                    }
                    ?></div>
           </center>
               <div class="rsm">
                   <Strong><center>Sd/-</center></Strong>
                   <br>
                   <strong>REGISTRAR(EVALUATION)</strong>
                </div>
                <br><br><br><br>
                <a href="user.php" type="submit" class="btn btn-secondary btn-lg btn-block">BACK</a>
                <a href="#" type="submit" class="btn btn-secondary btn-lg btn-block">PRINT</a>


            </div>
           </div>  
                <div id="footer">
  <div class="container text-center">
    <p>&copy; 2018 Student Result Management System . Design by Amrit Raj</p>
  </div>
</div>
    </body>
</html>





            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            