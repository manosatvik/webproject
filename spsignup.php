<?php
    require 'connectdb.php';
    $fname = $_POST['sfname'];
    $lname = $_POST['slname'];
    $email = $_POST['smail'];   
    $address = $_POST['saddress'];
    $pass = $_POST['spass'];
#echo $fname,$lname,$email,$address,$pass;
   
$sql = "insert into sptb(fname,lname,email,address,password) values('$fname','$lname','$email','$address','$pass')";
$retval = mysqli_query($con,$sql);
if(! $retval ) {
      die('Could not enter data: ' . mysqli_error($con));
   }
   
   echo "<br><br><h1><center>shopper Registered successfully\n</center></h1>";
   echo "<center>";
   echo "<h1>Click Here to sign In\t</h1>";
   echo "<form action='index.html'><input type='submit' value='signin'></form>";
   echo "</center>"   ;

   mysqli_close($con);
?>