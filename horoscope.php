<?php
    session_start();
    include_once 'includes/header.php';
?>
<div class="wrapper">
      <!--Main body-->
    <div class="row">
        <div class="col-sm-9">
            <div class="zodiac">
                <h2>Choose your zodiac sign</h2><br>
                <p>By clicking on your zodiac sign you can see your complete zodiac profile, 
                the element to which you belong and the planets that rule your zodiac sign!</p>
                
              <!--Zodiac sign-->
              <!-- passing the sign into url -->
                <div class="row">
                    <div class="col">
                        <a href="daily_horoscope.php?sign=aries">
                            <img src="https://mk0astrostylecoa3hb9.kinstacdn.com/wp-content/uploads/2020/07/Aries-circle-icon.png" alt=""><br>
                            <h3>Aries</h3>
                            <span>Mar 21-Apr 19</span>
                        </a>
                    </div>
                    <div class="col">
                        <a href="daily_horoscope.php?sign=taurus">
                            <img src="https://mk0astrostylecoa3hb9.kinstacdn.com/wp-content/uploads/2020/07/Taurus-circle-icon.png" alt=""><br>
                            <h3>Taurus</h3>
                            <span>Apr 20-May 20</span>
                        </a>
                    </div>
                    <div class="col">
                        <a href="daily_horoscope.php?sign=gemini">
                            <img src="https://mk0astrostylecoa3hb9.kinstacdn.com/wp-content/uploads/2020/07/Gemini-circle-icon.png" alt=""><br>
                            <h3>Gemini</h3>
                            <span>May 21-June 20</span>
                        </a>
                    </div>
                    <div class="col">
                        <a href="daily_horoscope.php?sign=cancer">
                            <img src="https://mk0astrostylecoa3hb9.kinstacdn.com/wp-content/uploads/2020/07/Cancer-circle-icon.png" alt=""><br>
                            <h3>Cancer</h3>
                            <span>June 21-July 22</span>
                        </a>
                    </div>
                    <div class="col">
                        <a href="daily_horoscope.php?sign=leo">
                            <img src="https://mk0astrostylecoa3hb9.kinstacdn.com/wp-content/uploads/2020/07/Leo-circle-icon.png" alt=""><br>
                            <h3>Leo</h3>
                            <span>July 23-Aus 22</span>
                        </a>
                    </div>
                    <div class="col">
                        <a href="daily_horoscope.php?sign=virgo">
                            <img src="https://mk0astrostylecoa3hb9.kinstacdn.com/wp-content/uploads/2020/07/Virgo-circle-icon.png" alt=""><br>
                            <h3>Virgo</h3>
                            <span>Aug 23-Sep 22</span>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <a href="daily_horoscope.php?sign=libra">
                            <img src="https://mk0astrostylecoa3hb9.kinstacdn.com/wp-content/uploads/2020/07/Libra-circle-icon.png" alt=""><br>
                            <h3>Libra</h3>
                            <span>Sep 23-Oct 22</span>
                        </a>
                    </div>
                    <div class="col">
                        <a href="daily_horoscope.php?sign=scorpio">
                            <img src="https://mk0astrostylecoa3hb9.kinstacdn.com/wp-content/uploads/2020/07/Scorpio-circle-icon.png" alt=""><br>
                            <h3>Scorpio</h3>
                            <span>Oct 23-Nov 21</span>
                        </a>
                    </div>
                    <div class="col">
                        <a href="daily_horoscope.php?sign=sagittarius">
                            <img src="https://mk0astrostylecoa3hb9.kinstacdn.com/wp-content/uploads/2020/07/Sagittarius-circle-icon.png" alt=""><br>
                            <h3>Sagittarius</h3>
                            <span>Nov 22-Dec 21</span>
                        </a>
                    </div>
                    <div class="col">
                        <a href="daily_horoscope.php?sign=capricorn">
                            <img src="https://mk0astrostylecoa3hb9.kinstacdn.com/wp-content/uploads/2020/07/Capricorn-circle-icon.png" alt=""><br>
                            <h3>Capricorn</h3>
                            <span>Dec 22-Jan 19</span>
                        </a>
                    </div>
                    <div class="col">
                        <a href="daily_horoscope.php?sign=aquarius">
                            <img src="https://mk0astrostylecoa3hb9.kinstacdn.com/wp-content/uploads/2020/07/Aquarius-circle-icon.png" alt=""><br>
                            <h3>Aquarius</h3>
                            <span>Jan 20-Feb 18</span>
                        </a>
                    </div>
                    <div class="col">
                        <a href="daily_horoscope.php?sign=pisces">
                            <img src="https://mk0astrostylecoa3hb9.kinstacdn.com/wp-content/uploads/2020/07/Pisces-circle-icon.png" alt=""><br>
                            <h3>Pisces</h3>
                            <span>Feb 19-Mar 20</span>
                        </a>
                    </div>
                </div>
            </div>

            <form class="zodiac-form form-inline">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Your birthday : </label>
                <!-- validate day and month before submit the form -->
                <select class="custom-select my-1 mr-sm-2" id="day" required>
                  <option value=""selected>Day</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
                <select class="custom-select my-1 mr-sm-2" id="month" required>
                    <option value=""selected>Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                  </select>
                <button onclick="findSign()"class="btn btn-primary my-1">Find my sign</button>
            </form>
        </div>

        <!-- call this function when user submit birthday -->
        <script>
            function findSign() {
                var day = document.getElementById("day").value;
                var month = document.getElementById("month").value;
                
                if(day != "" && month!=""){
                    var sign = getZodiacSign(day, month);

                    //use this to alert the sign when user select day and month
                    if (window.confirm('You are '+sign+"!\nClick ok to see your daily horoscope."))
                    {
                        //redirect to daily horoscope
                        window.open('daily_horoscope.php?sign='+sign, '_blank');
                    };
                }
                else{
                    alert("Please select all field!");
                }
            }
            // get parameter to return zodiac as a string
            function getZodiacSign(day, month) {
               
                if((month == 1 && day <= 20) || (month == 12 && day >=22)) {
                return 'capricorn';
                } else if ((month == 1 && day >= 21) || (month == 2 && day <= 18)) {
                return 'aquarius';
                } else if((month == 2 && day >= 19) || (month == 3 && day <= 20)) {
                return 'pisces';
                } else if((month == 3 && day >= 21) || (month == 4 && day <= 20)) {
                return 'aries';
                } else if((month == 4 && day >= 21) || (month == 5 && day <= 20)) {
                return 'taurus';
                } else if((month == 5 && day >= 21) || (month == 6 && day <= 20)) {
                return 'gemini';
                } else if((month == 6 && day >= 22) || (month == 7 && day <= 22)) {
                return 'cancer';
                } else if((month == 7 && day >= 23) || (month == 8 && day <= 23)) {
                return 'leo';
                } else if((month == 8 && day >= 24) || (month == 9 && day <= 23)) {
                return 'virgo';
                } else if((month == 9 && day >= 24) || (month == 10 && day <= 23)) {
                return 'libra';
                } else if((month == 10 && day >= 24) || (month == 11 && day <= 22)) {
                return 'scorpio';
                } else if((month == 11 && day >= 23) || (month == 12 && day <= 21)) {
                return 'sagittarius';
                }
            }
        </script>

        <!--get a google top headline news-->
        <?php
            $url = 'https://newsapi.org/v2/top-headlines?country=us&apiKey=c7b83876ecf14359925815d9c9e9e049';
            $response = file_get_contents($url);
            $NewsData = json_decode($response);
        ?>
            <div class="col-sm-3 justify-content-center" id="news" style="align-item:center;">
                <div class="row align-items-center">
                    <div class="container-fluid pl-0 pr-0">
                        <?php
                        // use counter to get only top2 news
                        $counter=0;
                        
                            foreach($NewsData->articles as $News)
                            {
                                $counter++;
                        ?>
                        <!-- insert each data into card -->
                        <div class="card"  id="news" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo $News->urlToImage ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $News->title ?></h5>
                                <span><a href="<?php echo $News->url ?>">Read more</a></span>
                            </div>
                        </div>
                        
                        <?php
                        if($counter==2) break;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--4 element of Astrology-->
    <div class="row">
        <div class="col-sm-9">
            <div style="margin:40px">
                <h2>Four elements of Astrology</h2>
                <p>
                    Each of the 12 horoscope signs belongs to one of the four elements – Air, Fire, Water and Earth. 
                    These elements represent an essential type of energy that acts in each of us. Astrology aims to help us focus 
                    these energies on the positive aspects and to gain a better understanding of our potential and our positive traits 
                    and deal with negative ones.

                    These four elements help describe the unique personality types associated with astrological signs. 
                    The four zodiac elements exhibit profound influence on basic character traits, emotions, behavior and thinking.</p>
            </div>
            <div class="card-group" style="margin: 40px;">
                <div class="card">
                  <img class="card-img-top" src="https://cms.astrology.com/wp-content/uploads/2019/06/element-water-astrology.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Water Signs</h5>
                    <p class="card-text">
                        Water signs are exceptionally emotional and ultra-sensitive. They are highly intuitive and 
                        they can be as mysterious as the ocean itself. Water signs love profound conversations and intimacy. 
                        They rarely do anything openly and are always there to support their loved ones.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">The Water Signs are: Cancer, Scorpio and Pisces.</small>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="https://cms.astrology.com/wp-content/uploads/2019/06/element-fire-astrology.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Fire Signs</h5>
                    <p class="card-text">Fire signs tend to be passionate, dynamic, and temperamental. 
                        They get angry quickly, but they also forgive easily. They are adventurers with immense energy. 
                        They are physically very strong and are a source of inspiration for others. Fire signs are intelligent, 
                        self-aware, creative and idealistic people, always ready for action.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">The Fire Signs are: Aries, Leo and Sagittarius.</small>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="https://cms.astrology.com/wp-content/uploads/2019/06/element-earth-astrology.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Earth Signs</h5>
                    <p class="card-text">Earth signs are “grounded” and the ones that bring us down to earth. 
                        They are mostly conservative and realistic, but they can also be very emotional. 
                        They are connected to our material reality and can be turned to material goods. 
                        They are practical, loyal and stable and they stick by their people through hard times.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">The Earth Signs are: Taurus, Virgo and Capricorn.</small>
                  </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="https://cms.astrology.com/wp-content/uploads/2019/06/element-air-astrology.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Air Signs</h5>
                      <p class="card-text">Air signs are rational, social, and love communication and relationships with other people. 
                          They are thinkers, friendly, intellectual, communicative and analytical. They love philosophical discussions, 
                          social gatherings and good books. They enjoy giving advice, but they can also be very superficial. </p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">The Air Signs are: Gemini, Libra and Aquarius.</small>
                    </div>
                  </div>
              </div>
        </div>
        <!--get a google business news-->
        <?php
            $url = 'http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=c7b83876ecf14359925815d9c9e9e049';
            $response = file_get_contents($url);
            $NewsData = json_decode($response);
        ?>
        <div class="col-sm-3 justify-content-center" id="news" style="align-item:center;">
            <div class="row align-items-center">
                <div class="container-fluid pl-0 pr-0">
                        <?php
                        // use counter to get only top2 news
                        $counter=0;
                        
                            foreach($NewsData->articles as $News)
                            {
                                $counter++;
                        ?>
                        <!-- insert each data into card -->
                        <div class="card"  id="news" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo $News->urlToImage ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $News->title ?></h5>
                                <span><a href="<?php echo $News->url ?>">Read more</a></span>
                            </div>
                        </div>
                        
                        <?php
                        if($counter==2) break;
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>   
<?php
    include_once 'includes/footer.php';
?> 
