<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package euphoria
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="jquery-1.12.4.min.js"></script>
<!-- Latest compiled and minified CSS-->
<link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
    crossorigin="anonymous">
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"
    type="text/javascript"></script>
    <!--    Latest compiled and minified JavaScript-->
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
    crossorigin="anonymous" type="text/javascript">
    
</script>
<link href='https://fonts.googleapis.com/css?family=Lobster'
    rel='stylesheet' type='text/css'>
<link rel="stylesheet" href=style.css?v=<?=time();?>> 
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'euphoria'); ?></a>

   <!--  <header id="masthead" class="site-header navbar navbar-inverse navbar-fixed-top" role="banner">

    
    
    <div class="navbar navbar-inverse navbar-fixed-top">
        
        
            
        <div class="navbar-header">
                <div class="logo">          

                    <a class="nav-bar-brand" href="/home"> <img class="logo-img"
                        src="/images/euphorialogosm1.png" alt="" width="" height=""><br />Home</a>

        </div>
            
            <button class="navbar-toggle" data-toggle="collapse"
                    data-target=".navHeaderCollapse">
                <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
            </button>

        </div>
            <div class="collapse navbar-collapse navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">

            <li><a href="/book-now/"><img class="logo-img"
                        src="/images/book.png" alt="Home" width="" height="" syle="float:right;">
                            
                        </a></li>
            <li><a href="/wordpress/facilities/">Facilities</a></li>
            <li><a href=" /wordpress/location/">Location</a></li>   
            
                
                    
        <li><a href="#">Tours</a></li>
                    <li><a href="/wordpress/news/ ">News & Events</a></li>
                    
                    


        <!-- <li class="eesti">
        <a  class="">                           
<img src="http://localhost:1234/dinosophy/wordpress/images/flag-heart-3d-250sm.png"></a>
        </li>
        -->
        <!--

                    <li class="dropdown"><a href="#" class="dropdown-toggle"
                        data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">More!<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="images/shutterstock_99784436.jpg">Our Staff</a></li>
                            <li><a href="#">Our friends</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a
                                href="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Rooster_silhouette.svg/962px-Rooster_silhouette.svg.png">Pictures
        of hippies</a></li>
        
        
</ul>
</li>
    

        
</div>
    </div>
    -->

        
            <?php
          /*
        if (is_front_page() && is_home()) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <?php                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     else : ?>
                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
            <?php
endif;
*/
                    $description = get_bloginfo('description', 'display');
            if ($description || is_customize_preview()) : ?>
                                                        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                                                        <?php
            endif;  ?>
        
        
         
        
               <div class="navbar navbar-inverse navbar-fixed-top">

        
            
        
        <button class="navbar-toggle" data-toggle="collapse"
                        data-target=".navHeaderCollapse">
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
                    </button>
                    <div class="navbar-header">
        
            
            <div class="logo"> 
               <a class="nav-bar-brand"href="<?php bloginfo('url')?>"> <img class="logo-img"
                        src="/images/euphorialogosm1.png" alt="" width="" height="">Home</a>

               </div>
               
                    </div>
<div class="collapse navbar-collapse navHeaderCollapse">
            

                    <?php /* Primary navigation */
                    wp_nav_menu(array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu','menu_class' => 'nav navbar-nav navbar-right',
                    'container' => false ));
                        /*
                        wp_nav_menu( array(
                          'menu' => 'top_menu',
                          'depth' => 2,
                          'container' => false,
                          'menu_class' => 'nav',
                          //Process nav menu using our custom nav walker
                          'walker' => new wp_bootstrap_navwalker())
                        );
                        */
    ?>
         <!-- End logo -->  
                    
        </div>
            
        </div>
        

        </div>
        
    </div>

     
<div class="container_content">
    <div id="content" class="site-content">

