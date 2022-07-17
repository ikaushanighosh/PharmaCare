<?php
session_start();
//$Name=$_POST['Name'];
//$_SESSION['Name']=$Name;
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
    <div class="container">
    <h2 class="text-center text-success"> Welcome <?php echo $_SESSION['Username']; ?></h2>
    <!--<a href="Home.html"><button type="button">Profile Details</button></a> -->
</div>
</body>
</html>