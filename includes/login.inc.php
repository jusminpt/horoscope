<?php

//check if user log-in correctly
if(isset($_POST['login_submit'])){

    $username = $_POST["userName"];
    $pwd = $_POST["pwd"]; 

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username,$pwd)!==false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    
    loginUser($conn,$username,$pwd);
}
else{
    header("location: ../login.php");
    exit();
}