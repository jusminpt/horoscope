<?php
    //This function can be used in any PHP framework like laravel, wordpress, drupal, cakephp etc.
    //https://github.com/sameerkumar18/aztro/blob/master/README.rst
    session_start();
	include_once 'includes/header.php';
	// get the $sign from url that passing through the link
    $sign=$_GET['sign'];
    
    function aztro($sign, $day) {
        $aztro = curl_init();
		
		$options = array(
		CURLOPT_URL => "https://aztro.sameerkumar.website/?sign=$sign&day=$day",
		CURLOPT_POST => TRUE,
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_SSL_VERIFYPEER => FALSE,
		CURLOPT_HTTPHEADER => array ( 'Content-Type: Application/json' )
		);
		
		CURL_SETOPT_ARRAY($aztro, $options);
		
        $response = curl_exec($aztro);
		
		if($response === FALSE){
            die(curl_error($aztro));
        }
        $responseData = json_decode($response, TRUE);
        		
		CURL_CLOSE($aztro);
		
		return $responseData;
		
    }

	// Setup Required Arrays Using Above Function ( aztro )

	// Yesterday
	$ytdData = aztro($sign,'yesterday');
	$ytdKeys = array_keys($ytdData);

	// Today
	$todayData = aztro($sign,'today');
	$todayKeys = array_keys($todayData);
						
	// Tomorrow
	$tmrData = aztro($sign,'tomorrow');
	$tmrKeys = array_keys($tmrData);                      
?>

<div class="wrapper" style="background-image: url(https://i.imgur.com/GCJRhiA.png); padding-top:0px;">

	<div class="row justify-content-center align-items-center" style="margin:10px; ">
		<div class="col-sm-8">
			<!-- Layout Horoscope Image & Tabs -->
			<div class="container-fluid pl-0 pr-0" style="background-color: #FFDAB9;">
			<div class="row align-items-center">
				<div class="col text-center">
					<h2><?php echo ucfirst($sign) ?> Daily horoscope</h2>
					<span><?php echo $ytdData[$ytdKeys[1]]?></span>
				</div>
				<div class="col">
					<img src="https://mk0astrostylecoa3hb9.kinstacdn.com/wp-content/uploads/2020/07/<?php echo ucfirst($sign) ?>-circle-icon.png" class="img-fluid mx-auto d-block" width="100%">
				</div>
			</div>
			</div>
			<!-- Tab Navigation <UL> -->
			<ul class="nav nav-tabs" id="myTab" role="tablist" style="overflow: hidden;">
				<li class="nav-item">
					<a class="nav-link" id="ytd-tab" data-toggle="tab" href="#ytd" role="tab" aria-controls="ytd" aria-selected="false">Yesterday</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link active" id="today-tab" data-toggle="tab" href="#today" role="tab" aria-controls="today" aria-selected="true">Today</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="tmr-tab" data-toggle="tab" href="#tmr" role="tab" aria-controls="tmr" aria-selected="false">Tomorrow</a>
				</li>
			</ul>

			<!-- Build Actual Tab Content -->
			<div class="tab-content" id="myTabContent" style="overflow: hidden;">
				
				<!-- Yesterday Tab -->
				<div id="ytd" class="tab-pane fade" role="tabpanel" aria-labelledby="tmr-tab">
			  
					<!-- Create Yesterday's Display Card -->
					<div class="card mb-3">
						<div class="card-body text-wrap">
							<H5 class="card-title"><b>Star Sign : <?php echo ucfirst($sign) ?> </b> <i></h5>
								<p class="card-text"><?php echo $ytdData[$ytdKeys[0]]?></i></p>
								<p class="card-text"><b>Your horoscope for <?php echo $ytdData[$ytdKeys[1]]?> : </b></p>
								<p class="card-text"><?php echo $ytdData[$ytdKeys[2]]?></p>
								<p class="card-text"><b>Compatibility :</b> <?php echo $ytdData[$ytdKeys[3]]?></p>
								<p class="card-text"><b>Mood :</b> <?php echo $ytdData[$ytdKeys[4]]?></p>
								<p class="card-text"><b>Lucky color :</b> <?php echo $ytdData[$ytdKeys[5]]?></p>
								<p class="card-text"><b>Lucky number :</b> <?php echo $ytdData[$ytdKeys[6]]?></p>
								<p class="card-text"><b>Lucky time :</b> <?php echo $ytdData[$ytdKeys[7]]?></p>
						</div>
					</div>
				</div>
			
			
				<!-- Today Tab -->
				<div id="today" class="tab-pane fade show active" role="tabpanel" aria-labelledby="today-tab">
				  
					<!-- Create Today's Display Card -->
					<div class="card mb-3">
						<div class="card-body text-wrap">
							<H5 class="card-title"><b>Star Sign : <?php echo ucfirst($sign) ?> </b> <i></h5>
								<p class="card-text">( <?php echo $todayData[$todayKeys[0]]?> )</i></p>
								<p class="card-text"><b>Your horoscope for <?php echo $todayData[$todayKeys[1]]?> : </b></p>
								<p class="card-text"><?php echo $todayData[$todayKeys[2]]?></p>
								<p class="card-text"><b>Compatibility :</b> <?php echo $todayData[$todayKeys[3]]?></p>
								<p class="card-text"><b>Mood :</b> <?php echo $todayData[$todayKeys[4]]?></p>
								<p class="card-text"><b>Lucky color :</b> <?php echo $todayData[$todayKeys[5]]?></p>
								<p class="card-text"><b>Lucky number :</b> <?php echo $todayData[$todayKeys[6]]?></p>
								<p class="card-text"><b>Lucky time :</b> <?php echo $todayData[$todayKeys[7]]?></p>
						</div>
					</div>
				</div>	
				
				<!-- Tomorrow's Tab -->
                <div class="tab-pane fade" id="tmr" role="tabpanel" aria-labelledby="tmr-tab">
                    
					<!-- Create Tomorrow's Display Card -->
					<div class="card mb-3">
						<div class="card-body text-wrap">
						    <H5 class="card-title"><b>Star Sign : <?php echo ucfirst($sign) ?> </b> <i></h5>
								<p class="card-text">( <?php echo $tmrData[$tmrKeys[0]]?> )</i> </p> 
								<p class="card-text"><b>Your horoscope for <?php echo $tmrData[$tmrKeys[1]]?> : </b></p>
								<p class="card-text"><?php echo $tmrData[$tmrKeys[2]]?></p>
								<p class="card-text"><b>Compatibility :</b> <?php echo $tmrData[$tmrKeys[3]]?></p>
								<p class="card-text"><b>Mood :</b> <?php echo $tmrData[$tmrKeys[4]]?></p>
								<p class="card-text"><b>Lucky color :</b> <?php echo $tmrData[$tmrKeys[5]]?></p>
								<p class="card-text"><b>Lucky number :</b> <?php echo $tmrData[$tmrKeys[6]]?></p>
								<p class="card-text"><b>Lucky time :</b> <?php echo $tmrData[$tmrKeys[7]]?></p>
						</div>
					</div>
				</div>
		<!-- END CARDS -->

			</div>
		</div>  
	</div>
</div>
<?php
    include_once 'includes/footer.php';
?>
<!--***RETURN***
    array(8) { ["date_range"]=> string(15) "Oct 23 - Nov 22" 
        ["current_date"]=> string(17) "February 13, 2021" 
        ["description"]=> string(203) "No matter what's going on, you've got to put yourself first today. If a family member needs you, balance caring for them with caring for yourself -- or you are likely to burn out when they need you most!" 
        ["compatibility"]=> string(6) "Cancer" 
        ["mood"]=> string(11) "Independent" 
        ["color"]=> string(4) "Gold" 
        ["lucky_number"]=> string(2) "25" 
        ["lucky_time"]=> string(3) "5pm" }
-->