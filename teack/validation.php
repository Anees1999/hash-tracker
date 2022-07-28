<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con){
    echo "Connection Successful";

}
else{
    echo "Connection not successful";
}
mysqli_select_db($con,'project');
$user=$_POST['email'];
$pass=$_POST['password'];
$sql="select * from user where username='$user' && password='$pass'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['username']=$user;
    header('location:../dashboard-tracker/monster-lite-master/index.html');
}
else{
header('locaion:login.php');
}

?>