<?php
/*
*
* Template Name: Testimonials
*
*/

get_header(); ?>


<!-- start the loop -->
<?php while ( have_posts() ) : the_post(); ?>

<main class="main-preporuke">

    <div class='container'>
    	<div class="row">

	        <div class='col-lg-12'>
	            <div class='content'>
	                <?php the_content(); ?>
	            </div><!-- content -->
        	</div><!-- ol-lg-12 -->




              <?php 
                // WP_Query arguments
                $args = array (
                    'post_type'              => 'preporuke',
                    'posts_per_page'         => '-1',
                );

                // The Query
                $query = new WP_Query( $args );

                // The Loop
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post(); ?>






    	


                        <div class="col-md-12">
                             <div class="preporuke-box">

        
                         <h3><?php the_title() ?></h3>
                   

                          <?php $htype = get_field ('stars');

                          


                             if ( $htype == 1 ) {?> 

                                   <div class="stars-box">
                                     <img src="<?php echo get_template_directory_uri(); ?>/img/zuta-zvezda.png">
                                     <img src="<?php echo get_template_directory_uri(); ?>/img/zuta-zvezda.png">
                                     <img src="<?php echo get_template_directory_uri(); ?>/img/zuta-zvezda.png">
                                     <img src="<?php echo get_template_directory_uri(); ?>/img/zuta-zvezda.png">
                                     <img src="<?php echo get_template_directory_uri(); ?>/img/zuta-zvezda.png">
                                  </div><!-- stars box -->


                               


                               <?php } else { ?>

                                 <div class="stars-box">
                                     <img src="<?php echo get_template_directory_uri(); ?>/img/zuta-zvezda.png">
                                     <img src="<?php echo get_template_directory_uri(); ?>/img/zuta-zvezda.png">
                                     <img src="<?php echo get_template_directory_uri(); ?>/img/zuta-zvezda.png">
                                     <img src="<?php echo get_template_directory_uri(); ?>/img/zuta-zvezda.png">
                                     <img src="<?php echo get_template_directory_uri(); ?>/img/siva-zvezda.png">
                                 </div><!-- stars box -->

 
                                 <?php } ?>


                                    <p><?php the_content(); ?></p>
                               <img src="<?php echo get_template_directory_uri(); ?>/img/navodnici-sivi-ico.png">
                         </div><!-- preporuke-box -->
                     </div><!-- col-md-12 -->






                <?php }
                        } else { ?>
                            
                           'Sadržaj nije dostupan'

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();
                    ?>











		</div><!-- row -->
    </div><!-- container -->


</main>
<?php endwhile; ?>
<!-- end the loop -->


<?php get_footer(); ?>
