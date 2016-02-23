/* hide last dots */
$( "body" ).delegate( ".dots", "mousedown", function() {
    $(this).last().hide();
});

$(document).delegate("div", "click", function (e) {
    $('.dots').last().hide();
});

