$(document).ready(function () {


    function theme() {
        var attr = $('body').attr('data-theme');

// For some browsers, `attr` is undefined; for others,
// `attr` is false.  Check for both.
        if (typeof attr !== 'undefined' && attr !== false) {
            $('#theme-switch').html('');
            $('#theme-switch').append("<i class='fas fa-moon' style='font-size:20px;color:#FFF;'></i>");//.hide().fadeIn('300');
        } else {
            $('#theme-switch').html('');
            $('#theme-switch').append("<i class='fas fa-sun' style='font-size:20px;color:#F5B212;'></i>");//.hide().fadeIn('300');
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

// inc-dec
// $('#plus').click(function add() {
//     var $qtde = $("#quantity");
//     var a = $qtde.val();
//
//     a++;
//     $("#minus").attr("disabled", !a);
//     $qtde.val(a);
// });
// $("#minus").attr("disabled", !$("#quantity").val());
//
// $('#minus').click(function minusButton() {
//     var $qtde = $("#quantity");
//     var b = $qtde.val();
//     if (b > 1) {
//         b--;
//         $qtde.val(b);
//     } else {
//         $("#minus").attr("disabled", true);
//     }
// });
