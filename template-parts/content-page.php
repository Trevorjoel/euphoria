<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package euphoria
 */

?>
(CONTENT-PAGE.PHP)
<header class="entry-header">
        <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
    </header><!-- .entry-header -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    

    <div class="entry-content news">
        <?php
            the_content();

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'euphoria'),
                'after'  => '</div>',
            ));
        ?>
    </div><!-- .entry-content -->

    <?php if (get_edit_post_link()) : ?>
        <footer class="entry-footer">
            <?php
                edit_post_link(
                    sprintf(
                        /* translators: %s: Name of current post */
                        esc_html__('Edit %s', 'euphoria'),
                        the_title('<span class="screen-reader-text">"', '"</span>', false)
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
            ?>
        </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-## -->
