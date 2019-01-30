<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WP_Ogitive
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>
            <?php wp_title(''); ?>
            <?php
            if (wp_title('', false)) {
                echo ' | ';
            }
            ?>
            <?php bloginfo('name'); ?> 
        </title>

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>


       

         <?php if ( is_page('homepage') ) { ?>
          <header class="header-home">
            <div class="gradient"></div>

                    <div class="top-menu-home">
                      <div id="menu-button"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        <div class="container">
                         <div class="col-md-12">
                            <div class="top-menu-home-flex">
                                <div class="top-menu-home-left">
                                         <div class="nav-holder">
                                              <?php get_template_part('navigation'); ?>          
                                              <!-- <div id="menu-button"><i class="fa fa-bars" aria-hidden="true"></i></div> -->
                                        </div><!-- nav-holder -->
                                </div><!-- top menu left -->



                            <div class="top-menu-home-right right-icon-menu">
                                <a href="<?php the_field('facebook','options') ?>" target="_blank" class="white-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-ico.svg"></a>
                                <a href="<?php the_field('instagram','options') ?>" target="_blank" class="white-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram-ico.svg"></a>

                                <a href="<?php the_field('facebook','options') ?>" target="_blank" class="blue-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/fb-solid-ico.svg"></a>
                                <a href="<?php the_field('instagram','options') ?>" target="_blank" class="blue-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/insta-solid-ico.svg"></a>

                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/srb-flag.png"></a>
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/gb-flag.png"></a>

                            </div><!-- top menu home right -->
                          </div><!-- top-menu-home-flex -->
                         </div>
                        </div><!-- container -->
                    </div><!-- top menu -->



                        
                        <div class="back-img-home">
                           <img src="<?php the_field('header_image_home'); ?>" alt='<?php wp_title(); ?>'>
                        </div><!-- back img -->
                      


                        <div class="header-info-box">
                          <div class="container">
                            <div class="main-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pr3.png">
                            </div><!-- main logo -->    
                                <h1><?php the_field('header_naslov'); ?></h1>
                                <p><?php the_field('header_text'); ?></p>
                                 <a href="<?php the_field('header_link'); ?>" class="button btn-blue">Više Informacija</a>
                          </div><!-- container -->
                        </div><!-- header-info-box -->

            </header>


          <?php }  elseif  ( ! (is_page('homepage'))  ) { ?>

        <header class="header-top">
            <div class="top-menu">
               <div id="menu-button"><i class="fa fa-bars" aria-hidden="true"></i></div>
                  <div class="top-menu-left">
                    <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/pr3.png"></a>
                  </div><!-- top-menu-left -->

                  <div class="top-menu-center">
                                <div class="nav-holder">
                                   <?php get_template_part('navigation'); ?>                     
                                    <!-- <div id="menu-button"><i class="fa fa-bars" aria-hidden="true"></i></div> -->
                                </div><!-- nav-holder -->
                  </div><!-- top-menu-center -->

                   <div class="top-menu-right right-icon-menu">
                        <a href="<?php the_field('facebook','options') ?>" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/fb-solid-ico.svg"></a>
  
                        <a href="<?php the_field('instagram','options') ?>" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/img/insta-solid-ico.svg"></a>

                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/srb-flag.png"></a>
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/gb-flag.png"></a>
                   </div><!-- top-menu-right -->

             </div><!-- top-menu -->



                <div class="back-img">
                  <img src="<?php the_field('header_image'); ?>" alt='<?php wp_title(); ?>'>
                </div>



                <?php if (is_page_template()) { ?>
                   <div class="container">
                     <div class="col-md-12">
                        <h1 class="top-menu-h1"><?php the_title(); ?></h1>
                     </div> 
                  </div>
              <?php  } ?>
                <?php if (is_page()) { ?>
                   <div class="container">
                     <div class="col-md-12">
                        <h1 class="top-menu-h1"><?php the_title(); ?></h1>
                     </div> 
                  </div>
              <?php  } ?>


                <?php if (is_single()) { ?>
                   <div class="container">
                     <div class="col-md-12">
                        <h1 class="top-menu-h1"><?php the_title(); ?></h1>
                     </div> 
                  </div>
              <?php  } ?>





                <?php if (is_archive()) { ?>
                   <div class="container">
                     <div class="col-md-12">
                        <h1 class="top-menu-h1"><?php the_archive_title(); ?></h1>
                     </div> 
                  </div>
              <?php  } ?>

              
                

      </header>



            <?php } ?>












        <!-- <div class="main-nav">
            <?php //get_template_part('navigation'); ?>
        </div> -->