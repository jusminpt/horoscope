<?php
    session_start();
    // check if user log-in before post topic
    require_once 'includes/auth_check.php';
    include_once 'includes/header.php';
    //connection to database
    $serverName ="localhost";
    $dBUserName ="root";
    $dBPassword ="";
    $dBName ="RIAproject_data";
    $conn = mysqli_connect($serverName,$dBUserName,$dBPassword,$dBName);

    // call userId
    $userid = $_SESSION["userId"];

    //check if user submit correctly
    if(isset($_POST["topic_submit"])){
        
        $topic = $_POST["topicInput"];
        $topicType = $_POST["topicTypeOptions"];
        $content = $_POST["content"];

        //create a topic in database
        $sql = "INSERT INTO `topics`(`userId`,`topic_head`,`topic_type`,`topic_content`) 
        VALUES('".$userid."','".$topic."','".$topicType."','".$content."');";
        // $result = mysqli_query($conn,$sql);
        $result = $conn->query($sql);

        // check if insert data correct or not->alert
        if($result)
        {
            echo '<script>alert("Topic created!")</script>'; 
        }
        else{
            echo '<script>alert("Something went wrong. Try again!")</script>';
        }
    }
?>
<div class="wrapper">
    <div class="row d-flex justify-content-center align-items-center" style="text-transform:uppercase; padding:20px;">
        <h3>Create topic</h3>
    </div>
<!-- main body -->
    <div class="row d-flex justify-content-center align-items-center shadow p-3 mb-5 bg-white rounded" style="margin-left:40px;margin-right:40px; ">
        <div class="col-sm8">
            <form  method="post">
            <!-- create form -->
                <div class="form-group">
                    <label for="topicInput">Topic</label>
                    <input type="text" class="form-control" name="topicInput" placeholder="Enter topic..." required>
                </div>
                <fieldset class="form-group" required>
                    <label for="topicType">Topic Type</label>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="topicTypeOptions" value="Step(How to)">
                            <label class="form-check-label" for="inlineRadio1">Step(How to)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="topicTypeOptions" value="Review">
                            <label class="form-check-label" for="inlineRadio2">Review</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="topicTypeOptions" value="Haul">
                            <label class="form-check-label" for="inlineRadio3">Haul</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="topicTypeOptions" value="Storytelling">
                            <label class="form-check-label" for="inlineRadio2">Storytelling</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="topicTypeOptions" value="Q&A">
                            <label class="form-check-label" for="inlineRadio3">Q&A</label>
                        </div>
                    </div>
                </fieldset>
                <!-- <fieldset class="form-group">
                    <label for="topicKey">Topic Keyword</label>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="skinType" value="option1">
                            <label class="form-check-label">Combination Skin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="skinType" value="option2">
                            <label class="form-check-label">Dry Skin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="skinType" value="option3">
                            <label class="form-check-label">Oily Skin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="skinType" value="option2">
                            <label class="form-check-label">Acne Skin</label>
                        </div>
                    </div>
                </fieldset> -->
                <div class="form-group">
                    <label for="contentInput">Content</label>
                    <textarea id="summernote" name="content" class="form-control" required></textarea>        
                </div>
                <button type="submit" name="topic_submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>  
    </div>
</div>

<script>
      $('#summernote').summernote({
        placeholder: 'Share with us...',
        tabsize: 2,
        height: 100
      });
</script>
<?php
    include_once 'includes/footer.php';
?>