
$("#btnLearnMore").click(function () {
    $("#personalDesc").toggle("blind", [], 500);
    $("#mainContainer").width()
    if ($("#btnLearnMore:contains('About Me')").length > 0)
    {
        $("#btnLearnMore").html('&laquo; Hide');
        $("#btnLearnMore").animate({
            left: "+=" + ($("#mainContainer").width() - $("#btnLearnMore").width()) * 0.99 
        }, 500, function () { $("#btnLearnMore").removeClass("btn-info").addClass("btn-primary"); });
    }
    else 
    {
        $("#btnLearnMore").html('About Me &raquo;');
        $("#btnLearnMore").animate({
            left: "-=" + ($("#mainContainer").width() - $("#btnLearnMore").width()) * 0.99 
        }, 500, function () {$("#btnLearnMore").removeClass("btn-primary").addClass("btn-info");});
    }


});