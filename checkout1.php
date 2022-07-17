<html>
<head>
    <title>Checkout</title>
    <link rel= "stylesheet" href="https:??cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        body{font-family:Georgia, Times, 'Times New Roman', serif;
        font-size:17px;
        padding:8px;
        }
        *{
            box-sizing:border-box;
        }
        .row{
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0 -16px;
        }
        .col-25{
            -ms-flex: 25%;
            flex: 25%;
        }
        .col-50{
            -ms-flex: 50%;
            flex: 50%;
        }
         .col-75{
            -ms-flex: 75%;
            flex: 75%;
        }
        .col-25, .col-50, .col-75{
            padding: 0 16px;
        }
        .container{
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgray;
            border-radius: 3px;
        }
        input[type=text]{
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        label{
            margin-bottom: 10px;
            display: block;
        }
        .icon-container{
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }
        .btn{
            background-color: #4caf50;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }
        .btn-hover{
            background-color: #45a049;
        }
        a{
            color: #2196f3;
        }
        hr{
            border:1px solid lightgray;
        }
        span.price{
            float: right;
            color: gray;
        }
        @media (max-width:800px){
            .row{
                flex-direction: column-reverse;
            }
            .col-25{
                margin-bottom: 20px;
            }
        }
        </style>
</head>
<body>
<div class="row" style="padding:100px 300px;">
<div class="col-50"><div class="container">
    <form action="payscript.php" method="post" style="padding: 25px;">
<div class="row">
    <div class="col-25">
        <h3 style="text-align: center; margin:20px 10px; font-family: Georgia, Times, 'Times New Roman', serif"> Checkout Form </h3>

        <label for="fname"><i class="fa fa-user"></i> Full Name </label>
        <input type="text" id="fname" name="name" placeholder="Enter your full name...">
        <label for="email"><i class="fa fa-envelope"></i> Email </label>
        <input type="text" id="email" name="email" placeholder="Enter your email id...">
        <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
        <input type="hidden" value="<?php echo 1;?>" name="amount">
        <label for="city"><i class="fa-fa-mobile"></i> Mobile </label>
        <input type="text" id="city" name="mobile" placeholder="Enter your Mobile Number">
        <label for="adr"><i class="fa fa-address-card-o"></i> Address </label>
        <input type="text" id="adr" name="address" placeholder="Enter Your address">

    </div>
    <input type="submit" value="Pay Now" class="btn">
</form>
</div>
</div></div>
</body>
</html>