
<header class="entry-header">       
            (CONTENT-NEWS.PHP)
    </header><!-- .entry-header -->
<?php  ;
    ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="entry-content news">
<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<em>Posted On - <?php echo get_the_date(); ?></em>
<div class="news-thumb "><?php the_post_thumbnail('news-thumbnail'); ?></div>

<?php the_excerpt(); ?>

<em>Written By - <?php the_author(); ?></em>
<?php the_tags(); ?><br />
<em>Categories: <?php the_category(); ?></em>
<br>
</div>


