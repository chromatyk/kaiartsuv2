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
                    $('body').css('overflow', 'unset');
                    $('body').css('overflow-x', 'hidden');
                    ScrollReveal().reveal('.dispear', {delay: 500, useDelay: 'onload', reset: true, duration: 2000});
                    $.scrollify({section: ".sectionScroll"});

            })
            
            $('.boxOffer').click(function() {
  $(this).toggleClass('selected');
  
});
          /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


