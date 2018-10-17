//BOTÃO QUE NAVEGA PARA O TOPO DA PÁGINA
jQuery(document).ready(function($){
    var offset = 100;
    var speed = 250;
    var duration = 500;
	   $(window).scroll(function(){
            if ($(this).scrollTop() < offset) {
			     $('.topbutton') .fadeOut(duration);
            } else {
			     $('.topbutton') .fadeIn(duration);
            }
        });
	$('.topbutton').on('click', function(){
		$('html, body').animate({scrollTop:0}, speed);
		return false;
		});
});

/*

//ANIMAÇÕES
//FUNÇÃO PARA A LIB DE ANIMAÇÕES
jQuery.fn.extend({
	animateCss: function (animationName) {
		var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		this.addClass('animated ' + animationName).one(animationEnd, function() {
			jQuery(this).removeClass('animated ' + animationName);
		});
	}
});
//ANIMA O CONTEÚDO DAS PÁGINAS
jQuery(document).ready(function($){
	$('.menu-header').animateCss('fadeInRightBig');
	$('article').animateCss('fadeInLeft');
	$('aside *').animateCss('fadeIn');
});

//PEGA ALTURA DO FOOTER E AJUSTA MARGIM DO WRAPPER
/*jQuery(document).ready(function($){
	var $footer = $('footer');
	var $footerHeight = $footer.height();

	$('section.main-section').delay(110).css({'padding-bottom':$footerHeight + 30});
});*/