
// Bootstrap defaults
var screen_sm_min = 768;
var screen_md_min = 992;
var screen_lg_min = 1200;

(function() {
    function contentHeightResizer() {
	if ($(window).width() >= screen_sm_min) {
            var footerHeight = $("#frontPageFooter").height() + 45;
            $(".mainContent").css("padding-bottom", footerHeight);
	} else {
	    $(".mainContent").css("padding-bottom", 15);
	}
    }

    $(document).on("ready", contentHeightResizer);
    $(window).on("resize", contentHeightResizer);
    
})();
