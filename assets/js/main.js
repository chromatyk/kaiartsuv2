//By @nodws

$(window).scroll(function(){
  
  let oppai = $(this).scrollTop(); 
  
  $('#content article').css({opacity:100/oppai,filter: 'blur('+oppai/100+'px)'});  
    $('#content').css({opacity: 100/oppai}); 
  
if(oppai>190){
	if(!$('body').hasClass('abrido'))
		$('#header-main').addClass('arre'); 
  }
else{
  $('#header-main').removeClass('arre');
    }
});

$('#burger').on('click',function(e) {
  
	e.preventDefault();
  
	$('#nav-main, body, #burger').toggleClass('abrido');
  
	if($('#header-main').hasClass('arre'))
		{$('#header-main').removeClass('arre').addClass('arreno');}
	else if($('#header-main').hasClass('arreno'))
		{	$('#header-main').removeClass('arreno');
			setTimeout(()=>{$('#header-main').addClass('arre')},800);}

});
