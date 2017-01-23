<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package euphoria
 */

?>

<div class="news">
	<div class="entry-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header ">
		<h2 class="title"><?php the_title (); ?></h2>
		<em>Posted On - <?php echo get_the_date(); ?></em>
		<div class="news-thumb "><?php the_post_thumbnail('news-thumbnail'); ?></div>
<br/>

	</header><!-- .entry-header -->
		<?php

			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'euphoria' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'euphoria' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php euphoria_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

