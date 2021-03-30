<?php
    session_start();
    include_once 'includes/header.php';
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
      var from=null, start = 0, url = "http://localhost/RIA_project/includes/chat.php";
      //start page
      $(document).ready(function(){
        from = prompt("Please enter your name")
        load()
       $('form').submit(function(e){
         $.post(url, {message: $('#message').val(),
        from: from
        });
        $('#message').val("")
        return false;
       }) 
      });

      function load(){
        $.get(url + '?start=' +start, function(result){
          if(result.items){
            // get messages from each chat_id to display
            result.items.forEach(item =>{
              start = item.chat_id;
              $('#messages').append(renderMessage(item));
            });
            // make it scroll up to get the new messages
            $('#messages').animate({scrollTop: $('#messages')[0].scrollHeight});
          };
          load();
        });
      }
      // render time to a proper format
      function renderMessage(item){
        let time= new Date(item.created);
        time = `${time.getHours()}:${time.getMinutes() < 10 ? '0' : ''}${time.getMinutes()}`;
        return `<div class="msg"><p>${item.from}</p>${item.message}<span>${time}</span></div>`;
      }
    </script>
    <style>
      .msg{
        background-color: rgb(208, 172, 238);
        padding:5px 10px;
        border-radius: 5px;
        margin-bottom: 8px;
        width: fit-content;
      }
      .msg p{
        margin:0;
        font-weight: bold;
      }
      .msg span{
        font-size:0.7rem;
        margin-left: 15px;
      }
    </style>
<div class="wrapper">
    <div class="row justify-content-center align-items-center" style="margin:10px; ">
		<div class="col-sm-8">
			<div class="container-fluid pl-0 pr-0">
                <!--display all the message  -->
                <div id="messages" style="height:70vh;overflow-x:hidden;padding:10px;background-color:#FFF5EE;border-radius:20px;">
                
                </div>
                <!-- create a form and send it to store in database-->
                <form style="padding:5px;">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="message" autocomplete="off" autofocus placeholder="Type message..." aria-label="message" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Send</button>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
</div>   
<?php
    include_once 'includes/footer.php';
?> 
