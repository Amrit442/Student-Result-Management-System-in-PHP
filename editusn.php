<?php
include("conn.php");
session_start(); 
$id=$_REQUEST['id'];
$admin=$_SESSION['admin'];
  if(!(isset($_SESSION['admin']))){
header("location:admin.php");
}
$a=$db->query("SELECT * FROM student where usn='$id'");
while($f=$a->fetch(PDO::FETCH_OBJ))
                    {
                     
                   $usn1=$f->usn;
                   $name1=$f->name;
                   $address1=$f->address;
                   $phone1=$f->phone;
                   $gender1=$f->gender;
                   $dob1=$f->dob;
                 
                    }

?>
<html>
    <head>
    <title>UPDATE</title>
        <link rel="stylesheet" type="text/css" href="mobileno.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
       <style>
           #in{
    display: inline;
}</style>
    </head>
        <body>
            <div class="bg">
        
        <div class="header">
            <h1>Update Student Information</h1>
        </div>
        
      
       <?php
           if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$usn =$_REQUEST['usn'];
$name =$_REQUEST['name'];
$address =$_REQUEST['address'];
$phone =$_REQUEST['phone'];
$gender=$_REQUEST['gender'];
$dob =$_REQUEST['dob'];

$update="UPDATE student SET usn='$usn',name='$name',address='$address',phone='$phone',gender='$gender',dob='$dob' WHERE usn='$id'";
$b=$db->query($update);
                if($b)
                {
                   header("location:showusn.php");
                }

}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $usn1; ?>" />
<div class="form1">
<p><input type="text" name="usn" placeholder="Enter USN" 
required value="<?php echo $usn1; ?>" /></p>
</div>
<div class="form1">
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $name1; ?>" /></p>
</div>
<div class="form1">
<p><input type="text" name="address" placeholder="Enter Address" 
required value="<?php echo $address1; ?>" /></p>
</div>
<div class="form1">
<p><input type="text" name="phone" placeholder="Enter Phone" 
required value="<?php echo $phone1; ?>" /></p>
</div>
<div class="form1">
<p><input type="text" name="gender" placeholder="Enter Gender" 
required value="<?php echo $gender1; ?>" /></p>
</div>
<div class="form1">
<p><input type="text" name="dob" placeholder="Enter DOB" 
required value="<?php echo $dob1; ?>" /></p>
</div>
<div class="form1" id="in">
<p><button type="submit" name="submit" class="button">Update</button></p>
</div>
</form>
<?php } ?>
</div>
</div>
            </div>
    </body>
</html>
            