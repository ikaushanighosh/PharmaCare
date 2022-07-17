<?php

session_start();
ob_start();

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
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = " select * from registration where email='$email' and status='active' ";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $_SESSION['username'] = $email_pass['username'];

        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){

            if(isset($_POST['rememberme'])){

                setcookie('emailcookie',$email,time()+86400);
                setcookie('passwordcookie',$password,time()+86400);

                header('location:index.html');
            }else{
                header('location:index.html');
            }
            
            
        }else{
            echo "password incorrect";
        }
        }else{
            echo "Invalid Email";
        }

        }
?>

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;"> 
<h4 class="card-title mt-3 text-center">Login Now!</h4>
<p class="text-center">Get started with your free account</p>

<div>
    <p class="bg-success text-white px-4"> 
        <?php 
        
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
        }else{
        echo $_SESSION['msg'] = "You are logged out. Please login again."; 
        }
        ?> </p>
    </div>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
<div class="form-group input-group"> 
    <div class="input-group-prepend">
<span class="input-group-text"> <i class="fa fa-envelope"></i> </span> 
</div>
<input name="email" class="form-control" placeholder="Email ID" type="email" value="<?php if(isset($_COOKIE['emailcookie'])) {echo $_COOKIE['emailcookie'];} ?>"> 
</div> <!-- form-group// -->

<div class="form-group input-group">
<div class="input-group-prepend"> <span class="input-group-text"> <i class="fa fa-lock" ></i> </span>
</div>
<input class="form-control" placeholder="Password" type="password" name="password" value="<?php if(isset($_COOKIE['passwordcookie'])) {echo $_COOKIE['passwordcookie'];} ?>">
</div> <!--form-group//-->

<div class="form-group">
<input type="checkbox" name="rememberme"> Remember me
</div> <!--form-group//-->


<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary btn-block"> Login Now </button>
</div> <!-- form-group// -->

<p class="text-center">Password Forgotten? Don't Worry  <a href="recover_email.php">Click Here</a> </p>

<p class="text-center">Not Have an account? <a href="regis.php">SignUp Here</a> </p>

</form>

</article>

</div> <!-- card.// -->

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