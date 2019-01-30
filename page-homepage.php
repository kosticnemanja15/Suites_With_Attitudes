<?php
/*
*
* Template Name: Homepage
*
*/

get_header(); ?>




<main class="main-home">
    <div class="container">

           <div class="col-md-12">
              <div class="main-text">  
                 <h2><?php the_field('ap_naslov'); ?></h2>
                 <p><?php the_field('ap_opis'); ?></p>
              </div> <!-- main text -->
           </div> <!-- col-md-12 -->




                         <div class="apartmani-boxes">
                               <div class="col-md-12">
      

         <?php

                    // check if the repeater field has rows of data
                    if( have_rows('single_apartman') ):

                        // loop through the rows of data
                        while ( have_rows('single_apartman') ) : the_row(); ?>



         



                  <?php $opt = get_sub_field ('dizajn');


                   if ( $opt == 1 ) {?> 




                                      <div class="apartman-box">
                                             <div class="apartman-box-img">
                                                <img src="<?php the_sub_field('single_ap_foto'); ?>">
                                             </div><!-- apartman-box-img -->
                                     

                                              <div class="apartman-box-text">
                                                  <div class="apartman-box-text-info">
                                                    <h3><?php the_sub_field('single_ap_ime'); ?></h3>
                                                    <p><?php the_sub_field('single_ap_opis'); ?></p>
                                                     <a href="<?php the_sub_field('single_apartman_link'); ?>" class="button">Više Informacija</a>
                                                  </div><!-- apartman-box-text-info -->
                                              </div><!-- apartman-box-text -->
                                        </div><!-- apartman-box -->
                              






                    



                   <?php } else if ( $opt == 0 ) {?>


                       

                        





                                    <div class="apartman-box reverse">

                                        <div class="apartman-box-text">
                                          <div class="apartman-box-text-info">
                                              <h3><?php the_sub_field('single_ap_ime'); ?></h3>
                                              <p><?php the_sub_field('single_ap_opis'); ?></p>
                                               <a href="<?php the_sub_field('single_apartman_link'); ?>" class="button">Više Informacija</a>
                                          </div><!-- apartman-box-text-info -->
                                        </div><!-- apartman-box-text -->
                                        
                                         <div class="apartman-box-img">
                                            <img src="<?php the_sub_field('single_ap_foto'); ?>">
                                        </div><!-- apartman-box-img -->
                                   </div><!-- apartman-box -->


                                
 

                        
              
            

              
                  <?php } ?>  





              
                            
 
                 


                 <? endwhile;
                else :
                    echo 'Sadržaj nije dostupan';
                endif;
                ?>      


                              </div> <!-- col-md-12 -->
                         </div><!-- apartmani-boxes -->





  		
    </div><!-- container -->
</main>

<section class="o-nama">
  
    <img src="<?php echo get_template_directory_uri(); ?>/img/oNamaImg.jpg">
        
           <div class="o-nama-text-box">
            <div class="container">
              <div class="col-md-12">
               <h2><?php the_field('on_naslov'); ?></h2>
               <p><?php the_field('on_opis'); ?></p>
               <a href="http://withattitude.ogitive.info/o-nama/" class="button">Više Informacija</a>
              </div>
            </div>   
           </div><!-- o-nama-text-box -->
      
</section>




<section class="aktuelnosti">
    <div class="container">
      <div class="col-md-12">
        <h2>Aktuelnosti</h2>



           <?php 
                // WP_Query arguments
                $args = array (
                  'category_name'          => 'aktuelnosti',
                  'posts_per_page'         => '1',
                );

                // The Query
                $query = new WP_Query( $args );

                // The Loop
                if ( $query->have_posts() ) {
                  while ( $query->have_posts() ) {
                    $query->the_post(); ?>






        <div class="aktuelnosti-box">
            <div class="aktuelnosti-box-left">
                 <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('cat-thumb'); ?>
                </a>
            </div><!-- aktuelnosti-box-left -->
             <div class="aktuelnosti-box-right">
                <div class="aktuelnosti-box-right-text">

                     <a href="<?php the_permalink(); ?>">
                      <h3><?php the_title(); ?></h3>
                    </a>
                    <p><?php the_excerpt(); ?></p>
                     <a href="<?php the_permalink(); ?>" class="button btn-white">Više Informacija</a>    
                 </div><!-- aktuelnosti-box-right-text -->
             </div><!-- aktuelnosti-box-right -->
         </div><!-- aktuelnosti box -->

         

         <?php }
          } else { ?>
            
            Page is not reachable.

          <?php }

          // Restore original Post Data
          wp_reset_postdata();
        ?>




      </div>
    </div><!-- container -->
</section>







<section class="preporuke">
  <img src="<?php echo get_template_directory_uri(); ?>/img/preporuke-img@2x.jpg">
  <h2>Preporuke</h2>
    <div class="preporuke-box-home">
     <div class="container">
      <div class="slider-home">






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

















        <div>
           <div class="slide-box">      
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

             <img src="<?php echo get_template_directory_uri(); ?>/img/navodnici-ico.png">
           </div><!-- slide-box -->
        </div>


             

        
                      
                
                <?php }
                        } else { ?>
                            
                           'Sadržaj nije dostupan'

                        <?php }

                        // Restore original Post Data
                        wp_reset_postdata();
                    ?>





      </div>
     </div>
    </div><!-- preporuke box -->
</section>













<?php get_footer(); ?> 
