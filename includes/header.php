<!doctype html>
<html lang="en">
  <head>
    <title>Beauty Community</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- 2. GOOGLE JQUERY JS v3.2.1  JS !-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- 3. BOOTSTRAP v4.0.0         JS !-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--summernote-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>
<body>
    
    <div class="jumbotron jumbotron-fluid" style="padding-top: 10px !important;padding-bottom: 10px !important; margin-bottom:0px;">
        <div class="container" >
          <h1 class="display-4">BeautyComminuty.com</h1>
          <p class="lead">Welcome to the beauty world to discuss topics related to all things beauty,
            and discuss the world of influencers and their content.</p>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" >
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapse_target" >
            <a href="navbar-brand"><img></img></a>
            <span class="navbar-text"></span>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link"href="index.php"><span class="fas fa-home"></span>  Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"href="webboard.php">Webboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"href="horoscope.php">Horoscope</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Game
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu collapse">
                        <a class="dropdown-item" href="fortune_cookies.php">Fortune cookie</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="genie.php">Ask the Genie</a>
                        <!-- Future project since there is no free emoji API -->
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="how_your_day.php">How's your day?</a> -->
                    </div>
                </li>
                <!--use this and collapse class to show-->
                <script>
                    $('.dropdown').click(function(){
                        $('.dropdown-menu').toggleClass('show');
                    });
                </script>
            </ul>
            <ul class="nav navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link" href="create.php"><span class="fas fa-pen"></span> Create</a>
                </li>
            </ul>
            <!-- Check if log-in or not -->
            <?php
                if(isset($_SESSION["userName"])){
            ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size: 12px;"><span class="fas fa-user"></span>&nbsp;<?php echo 'Welcome '.$_SESSION["userName"]?></a>
                        </li>
                    </ul>
                    <button class="btn btn-danger navbar-btn navbar-right" onclick="location.href = 'includes/logout.inc.php';">Logout</button>
            <?php
                }
                else{
            ?>
                    <button class="btn btn-danger navbar-btn ml-auto" onclick="location.href = 'login.php';" ><span class="fas fa-user"></span>&nbsp;Sign in/Register</button>
            <?php
                }
            ?>
        </div>
    </nav>
                 