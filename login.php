<?php
    session_start();
    include_once 'includes/header.php';
?> 

    <!--Log-in-->
    <div class="wrapper">
        <div class="row justify-content-center align-items-center" style="margin-top:40px;">
            <div class="col-sm8 ">
                <div class="container-fluid pl-0 pr-0">
                    <!-- create a form and validate it -->
                    <form action="includes/login.inc.php" method="post" class="shadow p-5 mb-5 bg-white rounded">
                        <h3 style="text-align:center; text-transform:uppercase; padding-bottom:10px">Sign in</h3>
                        <?php
                        //check error data in url
                        if(isset($_GET["error"])){
                            if($_GET["error"] == "emptyinput"){
                        ?>
                                <p style="text-align:center;font-size:10px; color:red;">Fill in all fields!</p>
                        <?php
                            }
                            else if($_GET["error"] == "wronglogin"){
                        ?>
                                <p style="text-align:center;font-size:10px; color:red;">Please try to log-in again!</p>
                        <?php
                            }
                        }
                        ?>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="userName" placeholder="Enter username or email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <label style="float: right; font-size:1vw"><a href="#">Forget password?</a></label>
                            <input type="password" class="form-control" name="pwd" placeholder="Password" required>
                        </div>
                        <p style="text-align:center">or sign in with</p>
                        <!-- future develop -->
                        <div class="social-login text-center">
                            <a href=""><i class="fa fa-facebook circle"style="border-radius: 50%; margin: 0.15em; font-size: 3em; background: #A9A9A9; color: #FFFFFF; padding: 0.05em 0.3em;"></i></a>
                            <a href=""><i class="fa fa-google-plus circle" style="border-radius: 50%; margin: 0.15em; font-size: 3em; color: #FFFFFF; background: #A9A9A9; padding: 0.1em 0.1em;"></i></a>
                            <a href=""><i class="fa fa-twitter circle" style="border-radius: 50%; margin: 0.15em; font-size: 3em; background: #A9A9A9; color: #FFFFFF;padding: 0.05em 0.07em;"></i></a>
                        </div>
                        <div class="form-footer border-top-0 d-flex justify-content-center">
                            <button type="submit" name="login_submit" class="btn btn-success">Log in</button>
                        </div>
                        <div style="padding-top:20px">
                        <p style="text-align:center; font-size:70%">Don’t have an account?<a href="register.php">&nbsp;Register</a></p>
                        </div>
                    </form>
                </div>    
            </div>  
        </div> 
    </div>
<?php
    include_once 'includes/footer.php';
?> 
