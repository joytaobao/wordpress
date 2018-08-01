<?php get_header(); global $themename; global $shortname; ?>
<!-- #Container Area -->
<div id="container" class="clearfix">
	<div class="clearfix">
		<!-- .content_wrap -->
		<div class="content_wrap">
			<!-- #Content -->
			<div id="content">
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
				<div <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
					<h2 class="entry-title champlimbld">
						<a href="<?php the_permalink(); ?>" class="champlimbld" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>
					<?php
						  if ((class_exists('analytical_lite_breadcrumb_class'))) {$ana_breadcumb->analytical_lite_custom_breadcrumb();}
						?>
					<div class="entry clearfix">
						<?php the_content(); ?>
						<?php wp_link_pages(__('<p><strong>Pages:</strong> ','analytical-lite'), __('</p>','analytical-lite'), __('number','analytical-lite')); ?>
						<?php edit_post_link(__('Edit','analytical-lite'), __('<p class="clearfix">','analytical-lite'), __('</p>','analytical-lite')); ?>
					</div>
					<!--Start Comment box-->
					  <?php comments_template(); ?>
					<!--End comment Section-->
				</div>
				<?php endwhile; ?>
				<!-- Pagination -->
				<div class="pagination clearfix">
					<?php if(function_exists('analytical_lite_pagenavi') && get_theme_mod('_show_pagenavi', 'on') == 'on' ) { analytical_lite_pagenavi();} else { ?>
								<div class="alignleft"><?php previous_posts_link(__( '&larr;Previous', 'analytical-lite' )) ?></div>
								<div class="alignright"><?php next_posts_link(__('Next&rarr;', 'analytical-lite' )) ?></div>
					<?php } ?>
				</div>
				<!-- Pagination -->
				<?php else : ?>
				<div class="post"><h2><?php _e('Not Found','analytical-lite'); ?></h2></div>
				<?php endif; ?>		
			</div>
			<!-- #Content --->
		</div>
		<!-- .content_wrap -->
    </div>
</div>
<!-- #Container Area -->
<?php get_footer(); ?>