<?php get_header()?>

<section class="main-section">
	<section class="content-section">
		<?php if(isset($_GET['author_name'])) : $curauth = get_userdatabylogin($author_name); else : $curauth = get_userdata(intval($author)); endif;?>
		<h1 class="page-title page-archive">
			<?php
				if(is_category()){echo 'Categoria: '; single_cat_title();}
				if(is_tag()){echo 'Tag: '; single_tag_title();}
				if(is_author()){echo 'Autor: '.get_the_author();}
				if(is_day()){the_time('j \d\e F \d\e Y');}
				if(is_month()){the_time('F \d\e Y');}
				if(is_year()){the_time('Y');}
				//if(isset($_GET['paged']) && !empty('paged')){echo 'Arquivos do Blog';} 
			?>
		</h1>

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<article class="min-article">
				<?php include('resumo-post.php'); ?>
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