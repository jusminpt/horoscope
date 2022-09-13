$( ".likeButton" ).click(function() {
    //get post id
    var id=$(this).data("id");
    $.ajax({
        url: "includes/like.php",
        method: "POST",
        dataType: "json",
        data: {
            "id" : id
        }
        //ajax post input
        // context: document.body
    }).done(function(response) {
        alert(response);
    });
});