<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-3of5 d-3of5 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<article id="post-not-found" class="hentry cf">

							<header class="article-header">

								<h1><?php _e( 'Epic 404 - Article Not Found', 'bonestheme' ); ?></h1>

							</header>

							<section class="entry-content">

								<p><?php _e( 'The content you were looking for was not found, but maybe try looking again.', 'bonestheme' ); ?></p>

								<div class="search vjms-search404">

									<p><?php get_search_form(); ?></p>

								</div>
							</section>

							<footer class="article-footer">

									<p><?php // _e( 'This is the 404.php template.', 'bonestheme' ); ?></p>

							</footer>

						</article>

					</main>

					<div class ="m-all t-2of5 d-2of5 last-col vjms-portrait-404 cf">
									<img src="<?php bloginfo('template_url'); ?>/library/images/vj-portrait-404.png" width="270" height="364" alt="Vedran Jukic - portrait" class="tooltip" title="<?php _e("What happened here?", 'vjms'); ?>">
									</div>

				</div>

			</div>

<?php get_footer(); ?>
