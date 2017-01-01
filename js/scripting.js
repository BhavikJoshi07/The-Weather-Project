function resizeInput() {
    $(this).attr('size', $(this).val().length);
}

/*$('#currentForecastDiv').css("display", "none");
$('#navButton').css("display", "none");
$('#secondPage').css("display", "none");*/

/*$('#errorDiv').css("display", "none");*/

$('input[type="text"]')
    // event handler
    .keyup(resizeInput)
    // resize on page load
    .each(resizeInput);

$(".btn-circle").click(function() {
    $('html,body').animate({
        scrollTop: $("#secondPage").offset().top},
        'slow');
});

$('.btn-circle').tooltip();