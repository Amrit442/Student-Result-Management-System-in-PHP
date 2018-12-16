<?php
include('conn.php');
session_start();
?>
<html>
    <head>
          <meta charset=utf-8>

    <title>Show</title>
        <link rel="stylesheet" type="text/css" href="class.css">
         <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
        <body>
    <div class="topnav" id="myTopnav">
        
          <a href="logout.php">LOG_OUT</a>
          <a href="ttmarks.php">STUDENT MARKS</a>
        <a href="showstudent.php">SHOW STUDENT</a>
          <a href="pass-change.php">CHANGE PASSWORD</a>
    </div>
            
        <table border="0">
        <div class="header">
            <h1>show</h1>
    
        </div></table>
        
        <form action="showstudent1.php" method="post">
              
            <div class="form1">
            <table border="0">
                <tr>
                 <td>Semester</td>
                <td><input type="text" name="Semester" required></td>
                </tr>
                <tr>
                 <td>Section</td>
                <td><input type="text" name="Section" required></td>
                </tr>
                <tr>
                    <td> <button type="submit" name="registers" class="button">Show</button></td>
                </tr>
                </table>
            </div>
            </form>
            
          
    </body>
</html>