<?php get_header()?>

<section class="main-section">
	<section class="content-section">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<article class="full-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
				<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'slide-home'); ?>
				<?php if($image[0]){ ?>
					<div class="img-destaque" style="background-image:url(<?php echo $image[0]; ?>)"></div>
					<h1 class="post-title personalFont withimg"><?php the_title(); ?></h1>
				<?php }else{ ?>
					<h1 class="post-title personalFont"><?php the_title(); ?></h1>
				<?php } ?>
				<div class="post-detail">
					<i class="fa fa-calendar-o"></i>Data: <?php echo get_the_date('d.m.Y'); ?>&nbsp;
					<i class="fa fa-folder-o"></i>Categoria: <?php the_category(', '); ?>&nbsp;
					<i class="fa fa-hourglass-o"></i><?php post_read_time(); ?>&nbsp;
					<?php edit_post_link('<i class="fa fa-pencil"></i> Editar Post'); ?>
				</div>
				<div class="post-article">
					<?php the_content(); ?>
					<div class="abrev">
						<img src="http://sites.google.com/site/arianimartinshost/imagens/Abrev1.png">
					</div>
				</div>
				<div class="comentar">
					<a href="<?php the_permalink(); ?>/#comments" title="Deixei o seu comentário!">
						<i class="fa fa-comments"></i><?php comments_number('Comente','1 comentou','% comentaram'); ?>
					</a>
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
						<div class="post-tags">
							<?php the_tags('<i class="fa fa-tags"></i>Tags: ',',',''); ?>
						</div>
					</div>
				</div>
				<div class="related-posts">
					<div class="related-title">Posts relacionados:</div>
					<?php
						$orig_post = $post;
						global $post;
						$tags = wp_get_post_tags($post->ID);

						if($tags) : $tags_ids = array();
						foreach ($tags as $individual_tag) : $tag_ids[] = $individual_tag->term_id;
						endforeach;

						$args = array(
							'tag__in' => $tag_ids,
							'post__not_in' => array($post->ID),
							'posts_per_page' => 4,
							'caller_get_posts' => 1
						);

						$my_query = new wp_query($args);

						while ($my_query->have_posts()) :
							$my_query->the_post();
						?>
							<div class="relatedthumb">
								<a rel="external" href="<?php the_permalink()?>">
									<?php if(has_post_thumbnail()) : the_post_thumbnail(array(150,100));
									else: echo '<img src="http://arianimartins.com/wp-content/uploads/2016/04/default_avatar.png">';
									endif;
									?>
									<br><?php the_title(); ?>
								</a>
							</div>
						<?php
							endwhile;
							endif;
							$post = $orig_post;
							wp_reset_query();
						?>
				</div>
			</article>
		<?php endwhile; ?>
		<?php else : ?>
			Nada encontrado
		<?php endif; ?>
		<?php comments_template(); ?>
		<?php afc_paginacao(); ?>
	</section>
	<aside>
		<?php get_sidebar()?>
	</aside>
</section>
<?php get_footer()?>