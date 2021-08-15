<?php
$email = $_POST['email'];

$con=mysqli_connect("localhost","login","123456","login");
$query ="select username,password,email from name";
$data = $con->query($query);
$row = mysqli_fetch_array($data);

if ($email === $row['email']){
    header("location:reset.php");
    exit();
} else {
    echo"不存在此邮箱a";
}
?>
