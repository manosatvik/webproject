<?php
    require 'connectdb.php';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['mail'];   
    $address = $_POST['address'];
    $pan = $_POST['pan'];
    $pass = $_POST['pass'];
    
$sql = "insert into rttb(fname,lname,email,address,pan,password) values('$fname','$lname','$email','$address','$pan','$pass')";
$retval = mysqli_query($con,$sql);
if(! $retval ) {
      die('Could not enter data: ' . mysqli_error($con));
   }
   
   echo "<br><br><h1><center>Retailer Registered successfully\n</center></h1>";
   echo "<center>";
   echo "<h1>Click Here to sign In\t</h1>";
   echo "<form action='index.html'><input type='submit' value='signin'></form>";
   echo "</center>"   ;
       
   mysqli_close($con);
?>