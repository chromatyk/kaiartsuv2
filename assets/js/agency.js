// Si la page fais plus de 800px de largeur

if (window.matchMedia("(min-width: 800px)").matches) {
    $('#burger').on('click', function (e) {

        e.preventDefault();
        var filterVal = 'blur(10px)';
        $('#nav-main, body, #burger').toggleClass('abrido').removeClass('test');
        $('main').toggleClass('mainBlur');

        if ($('#header-main').hasClass('arre')) { $('#header-main').removeClass('arre').addClass('arreno'); }
        else if ($('#header-main').hasClass('arreno')) {
            $('#header-main').removeClass('arreno');
            setTimeout(() => { $('#header-main').addClass('arre') }, 800);
        }

    });
// Animation loader
    $(document).ready(function () {
        $("#fadeSite").css("display", "none");
        $(".footer").css("display", "none");
        $("#contenuLoader").delay(1100).fadeOut(200);
        $("#fadeSite").delay(1300).fadeIn(200);
        $(".footer").delay(1300).fadeIn(200);
        //Script après FadeIn
        setTimeout(function () {
          /*$('.paroller-example').paroller({
            factor: -0.2,
            type: 'foreground',
            direction: 'horizontal'
          });
            $('.paroller-example2').paroller({
            factor: 1,
            type: 'foreground',
            direction: 'horizontal'
          });*/
          $('#first_background').parallax("50%", 0.8);
        }, 1310);
    })
} else {
    $('#burger').on('click', function (e) {

        e.preventDefault();
        var filterVal = 'blur(10px)';
        $('#nav-main, body, #burger').toggleClass('abrido');
        $('main').toggleClass('mainBlur');

        if ($('#header-main').hasClass('arre')) { $('#header-main').removeClass('arre').addClass('arreno'); }
        else if ($('#header-main').hasClass('arreno')) {
            $('#header-main').removeClass('arreno');
            setTimeout(() => { $('#header-main').addClass('arre') }, 800);
        }

    });

    $(document).ready(function () {
        $("#fadeSite").css("display", "none");
        $(".footer").css("display", "none");
        $("#contenuLoader").delay(1100).fadeOut(200);
        $("#fadeSite").delay(1300).fadeIn(200);
        $(".footer").delay(1300).fadeIn(200);
        setTimeout(function () {
        }, 2600);
    })
}


$(function() {
        $('.material-card > .mc-btn-action').click(function () {
            var card = $(this).parent('.material-card');
            var icon = $(this).children('i');
            icon.addClass('fa-spin-fast');

            if (card.hasClass('mc-active')) {
                card.removeClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-arrow-left')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-bars');

                }, 800);
            } else {
                card.addClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-bars')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-arrow-left');

                }, 800);
            }
        });
    });
