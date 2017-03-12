<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="vjms-wrap-narrow wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (is_category()) { ?>
								<h4 class="archive-title">
									<span><?php _e( 'Posts Categorized:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?>
								</h4>

							<?php } elseif (is_tag()) { ?>
								<h4 class="archive-title">
									<span><?php _e( 'Posts Tagged:', 'bonestheme' ); ?></span> <?php single_tag_title(); ?>
								</h4>

							<?php } elseif (is_author()) {
								global $post;
								$author_id = $post->post_author;
							?>
								<h4 class="archive-title">

									<span><?php _e( 'Posts By:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>

								</h4>
							<?php } elseif (is_day()) { ?>
								<h4 class="archive-title">
									<span><?php _e( 'Daily Archives:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
								</h4>

							<?php } elseif (is_month()) { ?>
									<h4 class="archive-title">
										<span><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?>
									</h4>

							<?php } elseif (is_year()) { ?>
									<h4 class="archive-title">
										<span><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?>
									</h4>
							<?php } ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'vjms-archive-article cf' ); ?> role="article">

								<header class="entry-header article-header">

									<h1 class="entry-title"><a href="<?php the_permalink() ?>" class="tooltip" rel="bookmark" title="<?php _e( 'View full story', 'vjms-article' ); ?>"><?php the_title(); ?></a></h1>
									<p class="byline entry-meta vcard">
										<?php printf( __( 'Posted %1$s by %2$s', 'bonestheme' ),
                  							     /* the time the post was published */
                  							     '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       								/* the author of the post */
                       								'<span class="by">-</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    							); ?>
									</p>

								</header>

								<section class="entry-content cf">
								<div class="m-all t-1of2 d-1of2">
									<div class="vjms-archive-thumb">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'View full story', 'vjms-article' ); ?>" class="tooltip">
											<?php the_post_thumbnail( 'vjms-archivethumb-300' ); ?>
										</a>
									</div>
								</div>
								<div class="m-all t-1of2 d-1of2 last-col">
									<?php the_excerpt(); ?>
									
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'View full story', 'vjms-article' ); ?>" class="tooltip">
									<btn class="vjms-green-btn">
										<span class="dashicons dashicons-controls-play"></span>
										<?php _e( 'More...', 'vjms-article' ); ?></btn></a>
									
								</div>
								</section>

								<footer class="article-footer">

								</footer>

							</article>

							<?php endwhile; ?>

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
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
