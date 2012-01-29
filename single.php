<?php get_header(); ?>
			<header id="main_header" role="logo">
			<a href="<?php echo esc_url(home_url('/')); ?>"><img id="logo" src="<?php bloginfo('template_url') ?>/images/title_header.gif" /></a>
			
			<p id="title_head">Just another developer, illustrator, and music geek's web site...</p>
		</header>
		<div id="content_section">
			<div id="article_section">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
			
			<?php// include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
	</div><!-- end of the main-content #id -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>