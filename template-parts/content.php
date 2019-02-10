<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Raymacz
 */

?>
<div class="wrapper">
<a href="<?php  echo esc_url( get_permalink() ); ?>" rel="bookmark">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if (has_post_thumbnail()) { ?>
        <figure class="featured-image index-img">
            <!--<a href="<?php // echo esc_url( get_permalink() ); ?>" rel="bookmark">-->
            <?php the_post_thumbnail('raymacz-index-img'); ?>
            <!--</a>-->
        </figure>
        <?php } ?>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title">', '</h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php raymacz_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<footer class="entry-footer">
		<?php raymacz_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
</a>  
</div>
