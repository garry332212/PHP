<?php 

session_start();


require_once("./db_con.php");

$name = $_POST['user'];
$pass= $_POST['password'];


$s = "select * from users where name = '$name' && password ='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1 && $pass == $pass){
    $_SESSION['username'] =$name;
    header("location:index.php");
}

else{
    // header("location:index.php");
    echo "errrroor ";
}

?>