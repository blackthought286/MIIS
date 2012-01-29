<?php get_header(); ?>
	
	
			<header id="main_header" role="logo">
			<a href="<?php echo esc_url(home_url('/')); ?>"><img id="logo" src="<?php bloginfo('template_url') ?>/images/title_header.gif" /></a>
			
			<p id="title_head">Just another developer, illustrator, and music geek's web site...</p>
		</header>
		<div id="content_section">
			<div id="article_section">
	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>


				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</div>

		<?php endwhile; ?>


	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
