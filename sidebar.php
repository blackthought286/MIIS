			<div id="sidebar">

				<aside id="search" class="widget">
					<?php get_search_form(); ?>
				</aside>
			
				<aside id=list_pages class="widget">
					<?php wp_nav_menu("show_home=1"); ?>
				</aside>
			
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
				
					
					<aside id="categories" class="widget">
						<h3>Category</h3>
						<?php wp_list_categories('show_count=1&title_li='); ?>
					</aside>
					
					<aside id="archives" class="widget"> 
						<h3 class="widget-title">Archives</h3>
						<ul>
							<?php wp_get_archives(); ?>
						</ul>
					</aside>
					
					<aside id="meta" class="widget">
						<h3 class="widget-title">Meta</h3>
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<?php wp_meta();	?>
						</ul>
					</aside>
					
					<aside id="subscribe" class="widget">
						<h3>Subscribe</h3>
						<ul>
							<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
							<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
						</ul>
					</aside>
				<?php endif; ?>
			</div>