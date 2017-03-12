<?php
/*
 * ARCHIVE PORTFOLIO TEMPLATE
 *
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<span style="text-align:center;"><h4 class="archive-title">- <?php post_type_archive_title(); ?> -</h4></span>

						<div class="vjms-portfolio-grid">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'vjms-portfolio-item cf' ); ?> role="article">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('View full project','vjms'); ?>" class="tooltip">
							<?php the_post_thumbnail('vjms-thumb-300', array('class' => 'vjms-portfolio-thumb')); ?>
							</a>
								<header class="article-header">
									<span class="dashicons dashicons-arrow-up"></span>
								</header>

								<section class="entry-content cf">

									<?php the_excerpt(); ?>
		

								</section>

								<footer class="article-footer">

								</footer>
							
							</article>

							<?php endwhile; ?>
							</div> <!-- vjms-portfolio-grid END -->
<div class="cf"> </div>
									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

							

						</main>

				</div>

			</div>

<?php get_footer(); ?>
