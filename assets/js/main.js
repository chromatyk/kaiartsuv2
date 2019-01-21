//By @nodws



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
