<?php get_header(); ?>

		<header id="main_header" role="logo">
			<a href="<?php echo esc_url(home_url('/')); ?>"><img id="logo" src="<?php bloginfo('template_url') ?>/images/title_header.gif" /></a>
			
			<p id="title_head">Just another developer, illustrator, and music geek's web site...</p>
		</header>
		<div id="content_section">
			<div id="article_section">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

		</div>

	<?php endwhile; ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
			</div>
			
			<?php get_sidebar(); ?>
<?php get_footer(); ?>