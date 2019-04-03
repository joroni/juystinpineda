<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
get_header();

include '../modules/workshop_reg.php';

?>
<style>
  .site-featured-images {
  display:none;
}</style>

		<div id="page-wrapper">



			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-8 col-12-medium">

								<!-- Content -->
									<article id="post-<?php the_ID(); ?>"  class="box post"  <?php post_class(); ?>>
                    
                    	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>
                    <?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		?>
									
									

							</div>
							<div class="col-4 col-12-medium">

								<!-- Sidebar
									<section class="box">
										
									</section> -->

							</div>
						</div>
					</div>
          </article>
				</section>

		
  <script src="<?php
echo get_stylesheet_directory_uri();
?>/js/jquery.dropotron.min.js"></script>
    <script src="<?php
echo get_stylesheet_directory_uri();
?>/js/browser.min.js"></script>
    <script src="<?php
echo get_stylesheet_directory_uri();
?>/js/breakpoints.min.js"></script>
    <script src="<?php
echo get_stylesheet_directory_uri();
?>/js/util.js"></script>
    <script src="<?php
echo get_stylesheet_directory_uri();
?>/js/main.js"></script>

<?php get_footer ?>
      		</div>