<?php
    session_start();
    include_once 'includes/header.php';
?>

<div class="wrapper">
    <!--Main body-->
    <div class="row">
        <div class="col-sm-8">
            <div style="padding: 30px 30px 0px 30px">
                <h1>Fortune Cookie</h1>
                <p>Need a little bit of sage advice or a quick pick-me-up? Get the wisdom of your fortune cookie without the calories!</p>
            </div>
            <div class="text-center" style="background-color: rgb(255, 252, 230); margin: 40px; padding-bottom:35px;">
                <p class="result"id="cookie_result" style="position: absolute; top: 43%; left: 44%; width: 40%; height: 12%; text-align: left; font-family: Arial, Helvetica, sans-serif; font-size: 1.5vw;"></p>
                <img id="cookie_img"src="https://www.astrozodiacs.com/images/s1.png" width=80% height=80% alt=""> <br>
                <input type="submit" id="button1" onclick=checkButton(); class="btn btn-outline-danger btn-lg" value="Crack Cookie"/> 
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
    
    <!--get API & switch cookie-->
    <script>
        function checkButton(){
                var findButton = document.getElementById('button1').value;

                // check if the button name named this then execute the code
                if(findButton=="Crack Cookie"){

                    const cookie_api_url ='https://api.adviceslip.com/advice';
                    
                    // fechting data and reponse in json file
                    async function getCookieAdvice(){
                        const response = await fetch(cookie_api_url);
                        const data = await response.json();

                        // refer to website document, get only advice section from json file
                        //display the result
                        document.getElementById('cookie_result').innerHTML=data.slip.advice;
                    }

                    // change buttom value
                    document.getElementById('button1').value = "Crack Another";
                    getCookieAdvice();
                    // change cookies-img
                    document.getElementById('cookie_img').src = "https://www.astrozodiacs.com/images/s3.png";
                    
                }
                else{
                //change everything to default 
                document.getElementById('button1').value = "Crack Cookie";
                document.getElementById('cookie_result').innerHTML="";
                document.getElementById('cookie_img').src = "https://www.astrozodiacs.com/images/s1.png";
                }
      }
    </script>
</div>
<?php
    include_once 'includes/footer.php';
?> 

