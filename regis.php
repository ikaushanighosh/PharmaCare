<?php

session_start();

?>
<DOCTYPE html>
<html>
    <head>
<title></title>
<?php include 'style.php' ?>
<?php include 'links.php' ?>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmaCare</title>
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- fancy box  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="style2.css">

</head>

<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="logo.jpg" width="160" height="36" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu food-nav-menu">
                                <li><a href="index1.html"><b>Home</b></a></li>
                                
                                
                                <li><a href="#contact"><b>Contact</b></a></li>
                            </ul>
                        </nav>
                        <div class="header-right">
                            
                            
                            <a href="regis.php" class="header-btn">
                                <i class="uil uil-user-md"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends  -->
    <br>
    <br>
    <br>
    <br>

<?php
include 'dbcon.php';

if(isset($_POST['submit'])){
 $username = mysqli_real_escape_string($con, $_POST['username']);
 $email = mysqli_real_escape_string($con,$_POST['email']);
 $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
 $password = mysqli_real_escape_string($con,$_POST['password']);
 $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

$pass = password_hash($password, PASSWORD_BCRYPT);
$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

$token = bin2hex(random_bytes(15));

$insertquery = " select * from registration where email='$email' ";
$query = mysqli_query($con,$insertquery);

$emailcount = mysqli_num_rows($query);

if($emailcount>0){
    echo "email already exists";
}else{
    if($password === $cpassword){
        $insertquery = "insert into registration ( username, email, mobile, password, cpassword, token, status) values('$username','$email','$mobile','$pass','$cpass', '$token', 'inactive')";
        $iquery = mysqli_query($con, $insertquery);

        if($iquery){
            $subject = "Email Activation";
            $body = "Hi, $username. Click here to activate your account http://localhost/signup/activate.php?token=$token ";
            $headers = "From: sabumondal97@gmail.com";
            if(mail($email, $subject, $body, $headers)){
                $_SESSION['msg'] = "check your mail to activate your account $email";
                header('location:login.php');
            }else{
            echo "Email sending failed...";
        }

    }else{
        ?>
        <script>
            alert("Not Inserted");
        </script>
        <?php
    }
    }else{
        echo "password are not matching";
    }
}
}

?>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;"> 
<p class="card-title mt-3 text-center"><b>Want to Continue? <br> Log In / Register to View More </b></p>
<h4 class="card-title mt-3 text-center">Create Account</h4>
<p class="text-center">Get started with your free account</p>


<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
<div class="form-group input-group"> 
    <div class="input-group-prepend">
<span class="input-group-text"> <i class="fa fa-user"></i> </span> 
</div>
<input name="username" class="form-control" placeholder="Full Name" type= "text" required>
</div> <!-- form-group// -->
<div class="form-group input-group"> 
    <div class="input-group-prepend">
<span class="input-group-text"> <i class="fa fa-envelope"></i> 
</span>
</div>
<input name="email" class="form-control" placeholder="Email" type="email" required> 
</div> <!-- form-group// -->

<div class="form-group input-group"> <div class="input-group-prepend">

<span class="input-group-text"> <i class="fa fa-phone"></i>
</span>
</div>

<input name="mobile" class="form-control" placeholder="Phone number" type="number" required> 
</div> 

<div class="form-group input-group"> <div class="input-group-prepend"> <span class="input-group-text"> <i class="fa fa-lock"></i > </span>

</div>

<input class="form-control" placeholder="Create password" type="password" name="password" value="" required>

</div> <!-- form-group// --> <div class="form-group input-group">

<div class="input-group-prepend"> <span class="input-group-text"> <i class="fa fa-lock" ></i> </span>

</div>

<input class="form-control" placeholder="Confirm password" type="password" name="cpassword" required>

</div> <!--form-group//-->

<div class="form-group">

<button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account </button>
</div> <!-- form-group// -->

<p class="text-center">Have an account? <a href="login.php">Log In</a> </p>

</form>

</article>

</div> <!-- card.// -->

</div>

</div>

</div>

<!-- footer starts  -->
<footer class="site-footer" id="contact">
                <div class="top-footer section">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="footer-info">
                                        <div class="footer-logo">
                                            <a href="index.html">
                                                <img src="logo.jpg" alt="">
                                            </a>
                                        </div>
                                        <p>If you’re in need of medicines-<br>we’re here by your side.<br>
Stay safe and buy online!
                                        </p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-github-alt"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="footer-flex-box">
                                        <div class="footer-table-info">
                                            <h3 class="h3-title">Availability</h3>
                                            <ul>
                                                <li><i class="uil uil-clock"></i> Business Delivery Services</li>
                                                <li><i class="uil uil-clock"></i> Slot-wise Consultations</li>
                                                <li><i class="uil uil-phone"></i> +123 456 7899</li>
                                                <li><i class="uil uil-envelope"></i> Pharmacare@gmail.com</li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu food-nav-menu">
                                            <h3 class="h3-title">Links</h3>
                                            <ul class="column-2">
                                                <li>
                                                    <a href="index1.html" class="footer-active-menu">Home</a>
                                                </li>
                                                
                                                <li><a href="#contact">Contact</a></li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu">
                                            <h3 class="h3-title">Company</h3>
                                            <ul>
                                                <li><a href="#">Terms & Conditions</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Cookie Policy</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="copyright-text">
                                    <p>Copyright &copy; 2022 <span class="name">Smarani-Kaushani-Srabani </span>All Rights Reserved.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </footer>



        </div>
    </div>



</body>
</html>