$('#burger').on('click',function(e) {
  
	e.preventDefault();
        var filterVal = 'blur(10px)';
	$('#nav-main, body, #burger').toggleClass('abrido');
        $('main').toggleClass('mainBlur');
  
	if($('#header-main').hasClass('arre'))
		{$('#header-main').removeClass('arre').addClass('arreno');}
	else if($('#header-main').hasClass('arreno'))
		{	$('#header-main').removeClass('arreno');
			setTimeout(()=>{$('#header-main').addClass('arre')},800);}

});

            $(document).ready(function () {
                $("#fadeSite").css("display", "none");
                $("#contenuLoader").delay(2000).fadeOut(200);
                $("#fadeSite").delay(2400).fadeIn(200);
                setTimeout(function () {
                    $('body').css('overflow', 'unset');
                    $('body').css('overflow-x', 'hidden');
                    ScrollReveal().reveal('.dispear', {delay: 500, useDelay: 'onload', reset: true, duration: 2000});
                    $.scrollify({section: ".sectionScroll"});
                }, 2600);
            })
            
            var scene = document.getElementById('scene');
            var parallaxInstance = new Parallax(scene, {
                relativeInput: true
            });
          