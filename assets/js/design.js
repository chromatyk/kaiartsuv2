if (window.matchMedia("(min-width: 800px)").matches) {
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
            $('body').css('overflow', 'unset');
            $('body').css('overflow-x', 'hidden');
            ScrollReveal().reveal('.dispear', { delay: 500, useDelay: 'onload', reset: true, duration: 2000 });

        }, 2600);
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
            $('body').css('overflow', 'unset');
            $('body').css('overflow-x', 'hidden');
        }, 2600);
    })

}


