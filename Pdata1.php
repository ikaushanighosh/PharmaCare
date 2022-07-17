<?php
session_start();
header('location:index.html');
$servername="localhost";
$username="root";
$password="";
$db="pharmacare";
$conn=new mysqli($servername,$username,$password,$db);
$Username=$_POST['Username'];
//$Phone_No=$_POST['Phone_No'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$sql=" select * from registration where Username='$Username' && Email='$Email' && Password='$Password' ";

$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo "duplicate data";
}else{
    $sql1=" insert into registration(Username , Email , Password) values('$Username' , '$Email' , '$Password') ";
    mysqli_query($conn, $sql1);
    $_SESSION['Username']=$Username;
}
?>