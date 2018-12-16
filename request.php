<?php
include('conn.php');
session_start();
?>
<html>
    <head>
          <meta charset=utf-8>

    <title>Request</title>
               <link rel="stylesheet" type="text/css" href="class.css">
         <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
        <body>
    <div class="topnav" id="myTopnav">
            
      <a href="logout.php">Log Out</a>
                <a href="request.php">Request</a>
     
    
       </div>
        <table border="0">
        <div class="header">
            <h1>Request</h1>
     
        </div></table>
        
        <form action="" method="post">
              
            <div class="form1">
            <table border="0">
                <tr>
                <td>Request:</td>
                <td><textarea rows="5" cols="40" name="comm" maxlength="240" required></textarea></td>
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
                $request=$_POST['comm'];
                 $USN=$_SESSION['Name'];
                $date=date("Y-m-d");
            
                if($request !=''){
                $a=$db->prepare("INSERT INTO request (USN,request,date) VALUES (:USN,:request,:date)");
                $a->bindValue('USN',$USN);
                $a->bindValue('request',$request);
               $a->bindValue('date',$date);
                if($a->execute())
                {
                    echo "<script>alert('Request added Successfully')</script>";
                }
                   else
                {
                     echo "<script>alert('Request not added(may be some field missing)')</script>";
                }
                
            }
          }
        ?>
    </body>
</html>