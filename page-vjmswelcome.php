<?php
/*
 Template Name: vjms Welcome page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">
			<header class="vjms-hero">
				<div class="balls">
					<div class="vjms-hero-txt"><br>
					
					<span class="bigline"><?php _e( 'From ideas to ideal', 'vjms' ); ?></span><br>
					<?php _e('Want a great website? Original logo, slogan or creative ad?', 'vjms'); ?> <br>
					<span class="intro"><?php _e('Ladies and Gentlemen...', 'vjms'); ?></span><br>&nbsp;
					</div>
				</div>
			</header>
				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


								<section class="m-all t-3of5 d-3of5 entry-content cf" itemprop="articleBody">
									
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section>
								<div class ="m-all t-2of5 d-2of5 last-col vjms-portrait-holder cf">
									<img src="<?php bloginfo('template_url'); ?>/library/images/vj-portrait-1.png" width="270" height="364" alt="Vedran Jukic - portrait" class="tooltip" title="<?php _e("Yep, that's me!", 'vjms'); ?>">
									<a href="<?php echo home_url(); ?>/contact"><btn class="vjms-green-btn tooltip" title="<?php _e('Contact me', 'vjms'); ?>"><span class="dashicons dashicons-email-alt"></span><?php _e('Contact', 'vjms');?></btn></a>
									</div>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>

		<div class="vjms-prefooter" class="m-all t-all d-all cf" role="complementary">
			<div class=" wrap cf">
				<p>
				<h4><?php _e('- I like them, and I trust them -', 'vjms') ;?></h4>
				</p>
				<div class="vjms-prefooter-logo tooltip" title="WordPress">
					<a href="https://wordpress.org/" target="_blank" rel="nofollow">
					<img src="<?php bloginfo('template_url'); ?>/library/images/wp.svg" width="50" height="50">
					</a>
				</div>
				
				<div class="vjms-prefooter-logo tooltip" title="Adobe">
					<a href="http://www.adobe.com/" target="_blank" rel="nofollow">
					<img src="<?php bloginfo('template_url'); ?>/library/images/adobe.svg" width="50" height="50">
					</a>
				</div>

				<div class="vjms-prefooter-logo tooltip" title="Google">
					<a href="http://www.google.com/about/company/" target="_blank" rel="nofollow">
					<img src="<?php bloginfo('template_url'); ?>/library/images/google.svg" width="50" height="50">
					</a>
				</div>

				<div class="vjms-prefooter-logo tooltip" title="Plus Hosting">
					<a href="http://www.plus.hr/" target="_blank" rel="nofollow">
					<img src="<?php bloginfo('template_url'); ?>/library/images/plus.svg" width="50" height="50">
					</a>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
