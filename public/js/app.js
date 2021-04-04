$(document).ready(function () {


    function theme() {
        var attr = $('body').attr('data-theme');

// For some browsers, `attr` is undefined; for others,
// `attr` is false.  Check for both.
        if (typeof attr !== 'undefined' && attr !== false) {
            $('#theme-switch').html('');
            $('#theme-switch').append("<i class='fas fa-moon' style='font-size:20px;color:#FFF;'></i>").hide().fadeIn('300');
        } else {
            $('#theme-switch').html('');
            $('#theme-switch').append("<i class='fas fa-sun' style='font-size:20px;color:#F5B212;'></i>").hide().fadeIn('300');
        }
    }

    theme();

    $(".custom-switch").click(function () {
        setTimeout(function () {
            theme();
        }, 50);
    });

});

function display_search() {
    $('.search-nav-text').hide('slow');
    $('.search-nav-form').show('slow');

}
