<?php
	//Início - Não deletar estas linhas (padrão em todo arquivo comments.php)
	if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
		die("Por favor, não carregue esta página diretamente. Obrigada!");
	}
	if(post_password_required()){ ?>
        <p class="nocomments">Esta página está protegida por senha. Faça o login para visualizar.</p>
    <?php return; }
	//Fim - Não deletar estas linhas
?>

<div class="area-comentarios">
	<div class="comment-area">
		<h1 class="commentTitle">Comentários</h1>
		<h2 class="commentSub">Be kind / Be nice</h2>
	</div>

	<div class="view-comentarios">
		<?php if(have_comments()) : ?>
			<?php wp_list_comments(); ?>
		<?php else : ?>
			<h1 class="commentTitle">Seja o primeiro a comentar!</h1>
		<?php endif; ?>
	</div>

	<div class="form-comentarios">
		<?php if(comments_open()) : ?>
			<?php if(get_option('comment_registration') && !$user_ID) : ?>
				<p>Você precisa estar logado para comentar!
				<br><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">Login</a>
				</p>
			<?php else : ?>
				<?php comment_form(); ?>
			<?php endif; ?>
		<?php else : ?>
			<p> Os comentários estão fechados</p>
		<?php endif; ?>
	</div>
	
</div>