<?php get_header()?>

<section class="main-section">
	<section class="content-section">
			<article class="full-article">
				<form role="search" method="get" id="searchform" class="four-oh-four-form" action="<?php echo get_site_url(); ?>">
					<input type="text" placeholder="Buscar..." class="field 404-input" name="s" id="search" value="" autocomplete="off" autofocus/>
				</form>
				<div class="terminal">
					<p class="prompt erro404">ERRO 404</p>
					<p class="prompt">A pagina que você está procurando não foi encontrada, tente acessar uma das opções abaixo.</p>
					<p class="prompt"><a href="http://arianimartins.com">HOME</a></p>
					<p class="prompt">Se a página deveria existir, entre em contato através do formulário de contato <a href="http://arianimartins.com/contato/">aqui</a></p>
					<p class="prompt">Você também fazer uma nova busca utilizando o campo abaixo.<br>Basta digitar e apertar 'Enter'.</p>
					<p class="prompt output new-output"></p>		
				</div>
			</article>
	</section>
	<aside>
		<?php get_sidebar()?>
	</aside>
	<script>
		var inputReady = true;
		var input = jQuery('.404-input');
		input.focus();
		jQuery('.container').on('click', function(e){ input.focus(); });
		input.on('keyup', function(e){ jQuery('.new-output').text(input.val()); });
	</script>
</section>
<?php get_footer()?>