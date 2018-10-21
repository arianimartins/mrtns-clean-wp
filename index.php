<?php get_header()?>

<section class="main-section">
	<section class="content-section">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<article class="min-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slide-home' ); ?>
				<?php if($image[0]){ ?>
						<?php include ('resumo-post-image.php'); ?>
					<?php }else{ ?>
						<?php include('resumo-post.php'); ?>
					<?php } ?>
			</article>
		<?php endwhile; ?>
		<?php else : ?>
			Não existem post ainda
		<?php endif; ?>
		<?php afc_paginacao(); ?>
	</section>
	
	<aside>
		<?php get_sidebar()?>
	</aside>
</section>

<?php get_footer()?>