<?php
    require 'connectdb.php';
    $email = $_POST['rtmail'];
    $pass = $_POST['rtpass'];
    $sql = "select * from rttb where email='$email'";
    $res = mysqli_query($con,$sql) or die(mysqli_error($con));
   # echo "hello world";
    $row = mysqli_fetch_assoc($res);
    
       # echo "hello";
        $fname = $row['fname'];
        $lname = $row['lname'];
        $name = $fname." ".$lname;
        $password = $row['password'];
        if($pass != $password)
        {
            echo " <script> window.alert('Invalid Password'); ";
            echo "window.location.href='index.html';";
            echo "</script>";
            exit();

        }   
    
    session_start();
    $_session['fullname']=$name;
    echo "<h1> Welcome ". $_session['fullname']."</h1>";
?>




