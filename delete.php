<?php
require('conn.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM student WHERE usn='$id'"; 
$b=$db->query($query);
                if($b)
                {
                   header("location:showusn.php");
                }
?>