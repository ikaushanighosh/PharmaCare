<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "prescription";

$connn = mysqli_connect($server,$user,$password,$db);

if($connn){
   // echo "Connection Succesful";
}else{
   // echo "No Connection";
}
?>