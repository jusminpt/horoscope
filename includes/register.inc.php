<?php

//check if user signup correctly
if(isset($_POST["signup_submit"])){
    $username = $_POST["userName"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["rePwd"];

    // include dbfile and call function to check
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //error handling
    if(emptyInputSignup($username,$email,$pwd,$pwdRepeat)!==false){
        header("location: ../register.php?error=emptyinput");
        exit();
    }
    if(invalidUsername($username)!==false){
        header("location: ../register.php?error=invalidUsername");
        exit();
    }
    if(invalidEmail($email)!==false){
        header("location: ../register.php?error=invalidEmail");
        exit();
    }
    if(pwdMatch($pwd,$pwdRepeat)!==false){
        header("location: ../register.php?error=pwddoentMatch");
        exit();
    }
    if(userNameExist($conn,$username,$email)!==false){
        header("location: ../register.php?error=usernametaken");
        exit();
    }

    //create a user in database
    createUser($conn,$username,$email,$pwd);
}
//otherwise send them back to register page
else{
    header("location: ../register.php");
    exit();
}
