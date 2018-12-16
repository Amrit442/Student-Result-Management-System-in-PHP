<?php
include('conn.php');
session_start();
?>
<html>
    <head>
          <meta charset=utf-8>

    <title>Marks</title>
        <link rel="stylesheet" type="text/css" href="external.css">
         <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
        <body>

            <?php include("nav.php"); ?>
        
        <table border="0">
        <div class="header">
            <h1>Marks</h1>
    
        </div></table>
        
        <form action="" method="post">
              
            <div class="form1">
            <table border="0">
                <tr>
                 <td>USN</td>
                <td><input type="text" name="USN" required></td>
                </tr>
                <tr>
                 <td>Subject Code</td>
                <td><input type="text" name="subcode" required></td>
                </tr>
                 <tr>
                <td>SSID</td>
                <td><input type="text" name="ssid"></td>
                </tr>
                 <tr>
                <td>First Internal Marks</td>
                <td><input type="text" name="iamarks1"></td>
                </tr>
                 <tr>
                <td>Second Internal Marks</td>
                <td><input type="text" name="iamarks2"></td>
                </tr>
                <tr>
                <td>Third Internal Marks</td>
                <td><input type="text" name="iamarks3"></td>
                </tr>
                <tr>
                <td>External Marks</td>
                    <td> <input type="text" name="extmarks"></td>
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
                $usn=$_POST['USN'];
                $subcode=$_POST['subcode'];
                 $ssid=$_POST['ssid'];
                $iamarks1=$_POST['iamarks1'];
                $iamarks2=$_POST['iamarks2'];
                $iamarks3=$_POST['iamarks3'];
                $extmarks=$_POST['extmarks'];
                
                
                $avg=round(((int)$iamarks1+(int)$iamarks2+(int)$iamarks3)/3);
                
                $q=(int)$extmarks;
                $total=$avg+$q;
                if($total>=40)
                    $result="P";
                else
                    $result="F";
                if($extmarks==0)
                    $result="A";
                $iafull=20;
                $extfull=80;
                $full=$iafull+$extfull;
                     
                if($iamarks1<='20' && $iamarks2<='20' && $iamarks3<='20' && $extmarks<='80'){
                $a=$db->prepare("INSERT INTO external (usn,subcode,ssid,iamarks1,iamarks2,iamarks3,avg,iafull,extmarks,extfull,total,full,result) VALUES (:usn,:subcode,:ssid,:iamarks1,:iamarks2,:iamarks3,:avg,:iafull,:extmarks,:extfull,:total,
                :full,:result)");
                $a->bindValue('usn',$usn);
                $a->bindValue('subcode',$subcode);
                $a->bindValue('ssid',$ssid);
                $a->bindValue('iamarks1',$iamarks1);
                    $a->bindValue('iamarks2',$iamarks2);
                    $a->bindValue('iamarks3',$iamarks3);
                    $a->bindValue('avg',$avg);
                    $a->bindValue('iafull',$iafull);
                $a->bindValue('extmarks',$extmarks);
                     $a->bindValue('extfull',$extfull);
                 $a->bindValue('total',$total);
                       $a->bindValue('full',$full);
                $a->bindValue('result',$result);
               
                if($a->execute())
                {
                    echo "<script>alert('Marks added Successfully')</script>";
                }
                   else
                {
                     echo "<script>alert('Marks not added(may be some field missing)')</script>";
                }
                
            }
          }
        ?>
    </body>
</html>