<?php

$username = $_POST['username'];
$password = $_POST['password'];

$con=mysqli_connect("localhost","login","123456","login");
$query="select username,password from name ";
$data = $con->query($query);

$row = mysqli_fetch_array($data);

if($row['username']===$username && password_verify($password,$row["password"])){
    header("location:welcome.html");
}else{
    echo "Failed to login!";
}
?>

