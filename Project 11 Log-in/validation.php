<?php

session_start();

$con = mysqli_connect('localhost', 'u871469469_bereminte', 'Ssr/4318/95');

mysqli_select_db($con, 'u871469469_MinteDB');

$name = $_POST['user'];
$email = $_post['email'];
$pass = $_POST['password'];

$s = " select *  from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
} else{
    $reg= "insert into usertable(name, email, password) values ('$name', '$email', '$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}

?>