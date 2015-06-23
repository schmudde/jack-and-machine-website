$(document).ready(function() {

    $("#mc-embedded-subscribe-form").parsley({
	errorsContainer: function(ParsleyField) {
	    return ParsleyField.$element.attr("title");
	},
	errorsWrapper: false
    });

    $("#mc-embedded-subscribe-form").parsley().on('field:error', function(fieldInstance) {
	var messages = ParsleyUI.getErrorsMessages(fieldInstance);
        fieldInstance.$element.tooltip('destroy');
	fieldInstance.$element.tooltip({
	    animation: false,
	    container: 'body',
	    placement: 'top',
	    title: messages
	});
    });

    $("#mc-embedded-subscribe-form").parsley().on('field:success', function(fieldInstance) {
	fieldInstance.$element.tooltip('destroy');
    });
});    

$("#mc-embedded-subscribe-form").on('submit', function(e) {

    e.preventDefault(); // STOP default action of the button

    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");

    // IF Parsley validates the data (backup to HTML5 validation) THEN
    if ($(this).parsley().isValid()) {   
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
    };

    $(this).off(e); // Unbind the event handler after the submit to prevent multiple Ajax submissions
});


