<style>
    *{margin: 0; padding: 0; box-sizing: border-box; font-family: Georgia, 'Times New Roman', Times, serif;}

    
    .main-div{
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .center-div{
        width: 90%;
        height: 80vh;
        background: -webkit-linear-gradient(left, #f6b162, #ff9101);
        padding: 20px 0 0 0 ;
        box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
        border-radius: 10px;
    }
    h1{
        font-size: 18px;
        color: #000;
        text-align: center;
    }



    th,td{
        border: 1px solid #f2f2f2;
        padding: 8px 30px;
        text-align: center;
        color: #000;
    }
    th{
        text-transform: uppercase;
        font-weight: 500;
    }
    td{font-size: 13px;}
    .email-style{
        font-size: 14px;
        color: grey;
        display: inline-block;
        background: #f2f2f2;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        line-height: 30px;
        padding: 0 14px;
    }
    .post-class{
        text-decoration: uppercase;
    }
    .fa{
        font-size: 18px;
    }
    .fa-edit{color: #63c76a;}
    .fa-trash{color: #ff0000;}
    a {text-decoration: none; display: flex; justify-content: center; text-align: center;}
    .register{
        background: -webkit-linear-gradient(left, #ff7700, #f8b33b);
        margin-top: 3%;
        padding: 3%;
        box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
    }
    .register-left{
        text-align: center;
        color: #fff;
        margin-top: 4%;
    }

    .register-left a{
        text-decoration: none;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin: auto;
        cursor: pointer;
    }
    .register-right{
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
        box-shadow: 0 10px 20px 0 rgba(0,0,0,0);
        
    }
    .register-left img{
        margin-top: 15%;
        margin-bottom: 5%;
        width: 55%;
        -webkit-animation: mover 2s infinite alternate;
        animation: mover 1s infinite alternate;
    }
    .register-leftimg{
        margin-top: 15%;
        margin-bottom: 5%;
        width: 55%;
        -webkit-animation: mover 2s infinite alternate;
        animation:  mover 1s infinite alternate;
    }
    @-webkit-keyframes mover{
        0% { transform: translateY(0);}
        100% {transform: translateY(-20px);}
    }
    @keyframes mover{
        0% { transform: translateY(0);}
        100% {transform: translateY(-20px);}
    }
    .register-left p{
        font-weight: lighter;
        padding: 12%;
        margin-top: -5%;
    }
    .register .register-form{
        
        padding: 10%;
        padding-left: 30%;
        margin-top: 10%;
    }
    .btnRegister{
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 3%;
        background: #ff9101;
        color: #fff;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
        
    }
    .register .nav-tabs .nav-links:hover{
        border: none;
    }
    .register .nav-tabs .nav-links.active{
        width: 100px;
        color: #0062cc;
        border: 2px solid #0062cc;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }
    .register-heading{
        font-size: 20px;
        
        margin-top: 8%;
        margin-bottom: -15%;
        color: #495057;
    }
    ::placeholder{
        font-size: 14px;
    }

</style>