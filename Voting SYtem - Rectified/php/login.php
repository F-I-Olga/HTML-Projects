<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'user');

$id = $_POST['id'];
$pass = $_POST['pass'];

$s = "select * from login where id = '$id' && pass = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  // For Registration page:  echo "ID already registered. Please contact your administrator!";
  header('location:Home.html');
}
else{
     // For Registration page: $reg = "insert into login (id, pass) values ('$id', '$pass')";
    // For Registration page: mysqli_query($con, $reg);
    // For Registration page: echo "Registration Successful!";
    header('location:index.html');
}

?>