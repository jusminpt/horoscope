<?php
    session_start();
    include_once 'includes/header.php';
?>
<!--sign up-->
    <div class="wrapper">
        <div class="row justify-content-center align-items-center" style="margin:40px; ">
            <div class="col-sm8">
                <div class="container-fluid pl-0 pr-0">
                    <!-- create a form that take all the input and validate it -->
                    <form action="includes/register.inc.php" method="post" class="shadow p-3 mb-5 bg-white rounded">
                        <h3 style="text-align:center; text-transform:uppercase; padding-bottom:10px">Register</h3>
                        <?php
                        //check error data in url
                        if(isset($_GET["error"])){
                            if($_GET["error"] == "emptyinput"){
                                echo "<p>Fill in all fields!</p>";
                            }
                            else if($_GET["error"] == "invalidUsername"){
                                echo "<p>Choose a proper username!</p>";
                            }
                            else if($_GET["error"] == "invalidEmail"){
                                echo "<p>Choose a proper email!</p>";
                            }
                            else if($_GET["error"] == "pwddoentMatch"){
                                echo "<p>Password doesn't match!</p>";
                            }
                            else if($_GET["error"] == "stmtfailed"){
                                echo "<p>Something went wrong, try again!</p>";
                            }
                            else if($_GET["error"] == "usernametaken"){
                                echo "<p>This username is taken!</p>";
                            }
                            else if($_GET["error"] == "none"){
                                echo "<p>You have register!</p>";
                            }
                        }
                        ?>
                        <div class="form-group">
                            <label for="user">Username</label>
                            <input type="text" class="form-control" name="userName" placeholder="Enter username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email address" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="pwd" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="password2">Repeat Password</label>
                            <input type="password" class="form-control" name="rePwd" placeholder="Password" required>
                        </div>
                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button type="submit" name="signup_submit" class="btn btn-success">Register</button>
                        </div> 
                        <div style="padding-top:20px">
                        <p style="text-align:center; font-size:70%">Already have an account?<a href="login.php">&nbsp;Log in</a></p>
                        </div>               
                    </form>
                </div>    
            </div>
        </div>
    </div>

<?php
    include_once 'includes/footer.php';
?> 
