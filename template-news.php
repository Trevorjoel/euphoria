<?php

/**
 *Template Name: News and events
 *
 */
?>

    <div class="entry-content news">
   
(TEMPLATE-NEWS.PHP)
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header ">
        <h2 class="title"><?php the_title(); ?></h2>
        <em>Posted On - <?php echo get_the_date(); ?></em>
        <div class="news-thumb "><?php the_post_thumbnail('news-thumbnail'); ?></div>
<br/>