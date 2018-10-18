//BOTÃO QUE NAVEGA PARA O TOPO DA PÁGINA
	jQuery(document).ready(function($){
	    var offset = 100;
	    var speed = 250;
	    var duration = 500;
		   $(window).scroll(function(){
	            if ($(this).scrollTop() < offset) {
				     $('.topbutton').fadeOut(duration);
	            } else {
				     $('.topbutton').fadeIn(duration);
	            }
	        });
		$('.topbutton').on('click', function(){
			$('html, body').animate({scrollTop:0}, speed);
			return false;
			});
	});


//PEGA ALTURA DO FOOTER E AJUSTA MARGIM DO WRAPPER
	jQuery(document).ready(function($){
		var $footer = $('footer');
		var $footerHeight = $footer.height();

		$('section.main-section').delay(110).css({'padding-bottom':$footerHeight + 30});
	});


//---------------------------------------ANIMAÇÕES
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
		$('.menu-header').animateCss('fadeInDown');
		$('.logo-image').animateCss('fadeInDownBig');
		$('article').animateCss('fadeInLeft');
		$('aside *').animateCss('fadeInRight');
	});


//EFEITO CLICK DE MENU
	jQuery(document).ready(function($){
		$('.hvr-sweep-to-bottom').on('click', function(e){
			e.preventDefault();
			var url = $(e.currentTarget.innerHTML).attr('href');
			var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			$(e.currentTarget).addClass('animated slideOutUp').one(animationEnd, function(){
				window.location.href = url;
			});
		});
	});

//EFEITO FOCUS BUSCA
	jQuery(document).ready(function($){
		$('#search').focus(function(){
			$(this).val('');
		});
	});


