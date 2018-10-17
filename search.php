<?php get_header()?>

<section class="main-section">
	<section class="content-section">
		<h1 class="page-title page-archive">
			<?php
				$allsearch = new WP_Query("s=$s&showposts=-1");
	    		$key = esc_html($s, 1);
	    		$count = $allsearch->post_count;
	    		_e('', 'ariani-martins'); _e('', 'ariani-martins');
	    		echo $count . ' ';
	    		_e('resultado(s) para ', 'ariani-martins');
	    		_e('<strong>&#8220;', 'ariani-martins');
	    		echo $key;
	    		_e('&#8221;</strong>', 'ariani-martins');
	    		wp_reset_query();
	    	?> 
		</h1>

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php if(has_post_format('quote')) : ?>
				<article class="quote-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
					<div class="quote-title"><?php the_title(); ?></div>
					<div class="quote-content"><?php the_content(); ?></div>
				</article>
			<?php else : ?>
				<article class="min-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php include('resumo-post.php'); ?>
				</article>
			<?php endif; ?>
		<?php endwhile; ?>
		<?php else : ?>
			Nada encontrado
		<?php endif; ?>
		<?php afc_paginacao(); ?>
	</section>
	<aside>
		<?php get_sidebar()?>
	</aside>
</section>
<?php get_footer()?>