<?php get_header()?>

<section class="main-section">
	<section class="content-section">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<article class="full-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
				<h1 class="post-title personalFont"><?php the_title(); ?></h1>
				<div class="post-detail">
					<i class="fa fa-calendar-o"></i>Data: <?php echo get_the_date('d.m.Y'); ?>&nbsp;
					<?php edit_post_link('<i class="fa fa-pencil"></i> Editar Página'); ?>
				</div>
				<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'slide-home'); ?>
				<?php if($image[0]){ ?>
					<div class="img-destaque" style="background:url(<?php echo $image[0]; ?>)"></div>
				<?php }else{}?>
				<div class="post-article">
					<?php the_content(); ?>
				</div>
				<div class="post-footer">
					<div class="author-avatar">
						<?php $author_email = get_the_author_meta('user_email');
						$grav_url = get_avatar_url($author_email, $args=null); ?>
						<img src="<?php echo $grav_url ?>" />
					</div>
					<div class="post-detail-footer">
						<i class="fa fa-pencil"></i>Por: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
						<br>
						<i class="fa fa-calendar"></i>Atualizado em: <?php echo get_the_modified_date('d.m.Y'); ?>
					</div>
				</div>
			</article>
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