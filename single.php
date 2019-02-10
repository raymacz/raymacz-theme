<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Raymacz
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'single' );


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
                <div class="my-button">
                    <a href="<?php echo esc_url(site_url());  ?>" rel="bookmark">
                        <?php printf( '<span>' . esc_html__( '%1$s', 'raymacz' ) . '</span>', 'Top' ); ?>  
                    </a>
                </div>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
