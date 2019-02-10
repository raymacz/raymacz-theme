<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Raymacz
 */

//Query global variable
// get molecule 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$default_posts_per_page = get_option( 'posts_per_page' );
// get denominator
$thisCat = (get_query_var('cat')) ? get_category(get_query_var('cat'),false) : 1;
$published_post_count = $thisCat->count;
$total_pages = ceil( $published_post_count / $default_posts_per_page );

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                        
		<?php
		if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
                                $headline = '<h1 class="page-title">Page %1$s/%2$s</h1>';
                                $headline = sprintf($headline, esc_html__($paged, 'raymacz'), esc_html__($total_pages, 'raymacz'));
                                echo $headline;
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_pagination( array(
				'prev_text' => __( '', 'raymacz' ),
				'next_text' => __( '', 'raymacz' ),
				'before_page_number' => '<span class="screen-reader-text">' . __( 'Page ', 'raymacz' ) . '</span>',
			));

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
