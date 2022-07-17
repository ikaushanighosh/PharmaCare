<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$db="pharmacare";
$conn=new mysqli($servername,$username,$password,$db);
$Username=$_POST['Username'];
//$Phone_No=$_REQUEST['Phone_No'];
//$Email_Id=$_POST['Email_Id'];
$Password=$_POST['Password'];
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$sql=" select * from registration where Username='$Username' && Password='$Password' ";

$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['Username']=$Username;
    header('location:index.html');
}else{
    header('location:sign_in.html');
}
?>