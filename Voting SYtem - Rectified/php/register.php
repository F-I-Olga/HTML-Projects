<?php

    session_start();
    
    //Database connection
    $con = mysqli_connect('localhost','root', '');
    mysqli_select_db($con, 'user');

    $id=$_POST['id'];  
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $s=" select * from login where id = '$id'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "User ID already registered, please contact your administrator";
    }
    else{
        $reg= "insert into login (id, fname, lname, email, pass) values ('$id','$fname','$lname','$email','$pass')";
        mysqli_query($con, $reg);
        echo "Registration Successful!";
    }

?>