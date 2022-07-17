<?php

include 'pcon.php';

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $age = $_POST['age'];
    $file = $_FILES['photo'];

    // print_r($file);

    $filename = $file['name'];
    $filepath = $file['name'];
    $fileerror = $file['error'];

    if($fileerror == 0){

        $destfile = 'upload/'.$filename;
        //echo "$destfile";
        move_uploaded_file($filepath, $destfile);

        $insertquery = "insert into verify(username,age,pic) values('$username', '$age', '$destfile')";

        $query = mysqli_query($connn,$insertquery);

        if($query){
            ?>
            <script>
            setTimeout(function(){
            window.location.href = 'verify.html';
                }, 5000);
            </script> 
            <?php 
        }else{
            echo "Not Inserted";
        }
        }

    }else{
    echo "No button has been clicked";
}

?>