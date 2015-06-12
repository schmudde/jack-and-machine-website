(function() {
    function contentHeightResizer() {
        var footerHeight = $("#frontPageFooter").height() + 45;
        $("#frontPage").css("padding-bottom", footerHeight);
    }

    $(document).on("ready", contentHeightResizer);
    $(window).on("resize", contentHeightResizer);
    
})();
