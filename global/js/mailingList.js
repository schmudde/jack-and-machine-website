$("#mc-embedded-subscribe-form").on('submit', function(e) {

    e.preventDefault(); // STOP default action of the button

    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
   
    $.ajax(
    {
        url: formURL,
        type: "POST",
        data: postData,
        success: function(data, textStatus, jqXHR) {
	    // TODO: Return data from server
            $("#signup").hide();
            $("#thankyou").show();
	},
        error: function(jqXHR, textStatus, errorThrown) {
	    // If it fails
            $("#signup").hide();
            $("#error").show();
	}
    });

    $(this).off(e); // Unbind the event handler after the submit to prevent multiple Ajax submissions
});


