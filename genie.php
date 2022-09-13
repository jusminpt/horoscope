<?php
    session_start();
    include_once 'includes/header.php';
?>

<div class="wrapper">
    <!--Main body-->
    <div class="row">
        <div class="col-sm-8">
            <div style="padding: 30px 30px 0px 30px">
                <h1>Ask the genie</h1>
                <p>
                The mystical witch takes your wishes very seriously. 
                He contemplates them with intense consideration... and a bit of attitude! 
                Ask he a "yes" or "no" question, and see what he has to say!
                </p>
            </div>
            <div class="text-center" style="background-color: rgb(255, 252, 230); margin: 40px; padding-bottom:35px;">
                <img id="genie-img"src="https://www.horoscope.com/images-US/games/game-ask-genie-default.png" width=100% height=100% alt=""> <br>
                <input type="submit" id="button1" onclick=checkButton(); class="btn btn-info btn-lg" value="Ask the Genie"> 
            </div>
        </div>
        <div class="col-sm-4" id="videos" style="padding-top: 150px;">
            <label style="text-transform: uppercase; font-weight: bold;">tips for thought...</label>
            <div style="padding: 30px; border-style: solid; border-color:#CD5C5C; border-radius:5px;">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="480" height="315" src="https://www.youtube.com/embed/78nsxRxbf4w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>        
    </div>
    
    <!--get genie advise-->
    <script>
        function checkButton(){
                var findButton = document.getElementById('button1').value;
                var ans = document.getElementById('genie-img').src;

                // change img when click 
                if(findButton==="Ask the Genie"){
                        switch (Math.floor(Math.random() * 7)) {
                            case 0:
                                document.getElementById('genie-img').src = "https://www.horoscope.com/images-US/games/game-ask-genie-yes.png";
                                break;
                            case 1:
                                document.getElementById('genie-img').src = "https://www.horoscope.com/images-US/games/game-ask-genie-no.png";
                                break;
                            case 2:
                                document.getElementById('genie-img').src = "https://www.horoscope.com/images-US/games/game-ask-genie-definitely.png";
                                break;
                            case 3:
                                document.getElementById('genie-img').src = "https://www.horoscope.com/images-US/games/game-ask-genie-only-time-will-tell.png";
                                break;
                            case 4:
                                document.getElementById('genie-img').src = "https://www.horoscope.com/images-US/games/game-ask-genie-maybe.png";
                                break;
                            case 5:
                                document.getElementById('genie-img').src = "https://www.horoscope.com/images-US/games/game-ask-genie-not-advisable.png";
                                break;
                            case 6:
                                document.getElementById('genie-img').src = "https://www.horoscope.com/images-US/games/game-ask-genie-probably.png";
                                break;
                            }
                    //change button name when click 
                    document.getElementById('button1').value = "Ask the Genie again";
                    }
                else{
                    //change button name&img to default when click 
                    document.getElementById('button1').value = "Ask the Genie";
                    document.getElementById('genie-img').src="https://www.horoscope.com/images-US/games/game-ask-genie-default.png";
                }
        }
    </script>
</div>
    

<?php
    include_once 'includes/footer.php';
?> 

