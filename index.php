<?php
    session_start();
    include_once 'includes/header.php';
?> 

      <!--Main body-->
<div class="wrapper">
   <!--content filter by recent content-->
  <div class="container">
    <!--get infinity date-->
    <h3 class="text-center">Recent</h3>
    <!--get infinity content on web-->
    <div class="row">
      <?php
        include_once 'includes/dbh.inc.php';

        $sql = "SELECT users.userName,topic_head, topic_type, topic_content FROM `topics`
        inner join users
        on users.userId = topics.userId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            
      ?>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <?php echo $row['topic_head'];?>
            </h4>
            <p class="card-text" style="font-size: 25px;">
              <?php echo $row['topic_type'];?>
            </p>
            <hr>
            <i class="" style="font-size: 23px;">
              <?php echo $row['topic_content'];?>
            </i>
          </div>
        </div>
      </div>
      <?php
        }
        } else {
          echo "0 results";
        }
        $conn->close();
      ?>
    </div>  
  </div>
</div>
<?php
    include_once 'includes/footer.php';
?> 