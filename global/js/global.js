(function() {
    function contentHeightResizer() {
        var footerHeight = $("#frontPageFooter").height() + 45;
        console.log(footerHeight);
        $("#frontPage").css("padding-bottom", footerHeight);
    }

    $(document).on("ready", contentHeightResizer);
    $(window).on("resize", contentHeightResizer);
    
})();
