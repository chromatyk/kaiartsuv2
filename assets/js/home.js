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
              $.scrollify({
		section:".panel",
                interstitialSection: ".footer",
    scrollbars:false,
    before:function(i,panels) {

      var ref = panels[i].attr("data-section-name");

      $(".pagination .active").removeClass("active");

      $(".pagination").find("a[href=\"#" + ref + "\"]").addClass("active");
    },
    afterRender:function() {
      var pagination = "<ul class=\"pagination\">";
      var activeClass = "";
      $(".panel").each(function(i) {
        activeClass = "";
        if(i===0) {
          activeClass = "active";
        }
        pagination += "<li><a class=\"" + activeClass + "\" href=\"#" + $(this).attr("data-section-name") + "\"><span class=\"hover-text\">" + $(this).attr("data-section-name").charAt(0).toUpperCase() + $(this).attr("data-section-name").slice(1) + "</span></a></li>";
      });

      pagination += "</ul>";

      $(".home").append(pagination);
      /*

      Tip: The two click events below are the same:

      $(".pagination a").on("click",function() {
        $.scrollify.move($(this).attr("href"));
      });

      */
      $(".pagination a").on("click",$.scrollify.move);
    }
  });
}, 1400);
    })

    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene, {
        relativeInput: true
    });
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
        }, 1400);
    })

    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene, {
        relativeInput: true
    });
}
