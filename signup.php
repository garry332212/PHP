<?php 

session_start();

header("location:login.php");
require_once("./db_con.php");

$name = $_POST['user'];
$pass= $_POST['password'];


$s = "select * from users where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "user name is already Taken!!";
}

else{
    $reg ="insert into users(name , password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo "new user Created with following details: '$name' and '$pass'";
}


?>