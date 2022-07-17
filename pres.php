<!DOCTYPE html>
<html>
    <head>
        <title>PharmaCare</title>
        <?php include 'prescss.php'; ?>
        <?php include 'preslinks.php'; ?>
    </head>
    <body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="logo.jpg">
                <h3>Welcome</h3>
                <p>Please Share your details and upload your prescription</p>
                <a href="display.php">Go to Home Page</a><br/>
            </div>

            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload your prescription Here</h3>
                        
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="enter your name *" name="username" value="" required/>    
                                    </div>

                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="your age *" name="age" value="" required/>    
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="file" name="photo" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btnRegister" name="submit" value="Submit"/> 
                                          
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>