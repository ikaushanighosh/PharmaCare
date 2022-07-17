<?php
$userEmail = "";
if(isset($_POST['subscribe'])){
    $userEmail = $_POST['email'];
    if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
        $subject = "Thanks for Subscribing us - PharmaCare";
        $message = "Thanks for subscribing to our blog. You'll receive latest updates of our products and blogs from our site. Disclaimer: We strictly maintain user's privacy and information.";
        $sender = "From: sabumondal97@gmail.com";
        if(mail($userEmail, $subject, $message, $sender)){
            ?>
            <div class="alert success">Thanks for subscribing us.</div><br>
            <a href="index.html">Back to PharmaCare</a>
            <?php
            $userEmail = "";
        }else{
            ?>
            <div class="alert error">Failed while sending your email.</div>
            <?php
        }
    }else{
        ?>
        <div class="alert">Invalid Email</div>
        <?php
    }
}


