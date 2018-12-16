<?php
include('conn.php');
session_start();
?>
<html>
    <head>
        <title>Show Triggers</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
        <body>
            <div class="topnav" id="myTopnav">
            
      <a href="logout.php">LOG_OUT</a>
                <a href="triggers.php">TRIGGERS</a>
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
                        
                        <th scope="col">ID</th>
                        <th scope="col">USN</th>
                        <th scope="col">Action</th>
                         <th scope="col">Created Date</th>
                      
                    </tr>
                        </thead>
                    <?php
                    $a=$db->query("SELECT * FROM logs");
                    while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                      ?>
                    <tbody>
                    <tr data-id='$id'>
                      
                        <td class="mid"><?=$f->id; ?></td>
                        <td scope="row"><?=$f->usn; ?></td>
                        <td class="mid"><?=$f->action; ?></td>
                        <td class="mid"><?=$f->cdate; ?></td>
                      
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

<!--

INSERT INTO logs VALUES(null,NEW.usn,'Inserted',NOW());
CREATE TRIGGER `insertLog` BEFORE INSERT ON `student` FOR EACH ROW INSERT INTO logs VALUES(null,NEW.usn,'Inserted',NOW());

INSERT INTO logs VALUES(null,NEW.usn,'Updated',NOW());
CREATE TRIGGER `updateLog` AFTER UPDATE ON `student` FOR EACH ROW INSERT INTO logs VALUES(null,NEW.usn,'Updated',NOW());

INSERT INTO logs VALUES(null,OLD.usn,'Deleted',NOW());
CREATE TRIGGER `deleteLog` BEFORE DELETE ON `student` FOR EACH ROW INSERT INTO logs VALUES(null,OLD.usn,'Deleted',NOW());

DROP TRIGGER IF EXISTS `insertLog`;CREATE DEFINER=`root`@`localhost` TRIGGER `insertLog` AFTER INSERT ON `student` FOR EACH ROW INSERT INTO logs VALUES(null,NEW.usn,'Inserted',NOW());
-->



            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            