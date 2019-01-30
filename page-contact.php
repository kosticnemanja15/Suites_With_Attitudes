<?php
/*
*
* Template Name: Contact page
*/

get_header(); ?>


<!-- start the loop -->
<?php while ( have_posts() ) : the_post(); ?>

	<main class="kontakt-main">
     <div class="container">
       <div class="col-md-12">
        <div class="kontakt-row">
          <div class="row">

           <div class="col-md-6">
	             <p><?php the_field('opis'); ?></p>

	              <div class="kontakt-info">

	                <div class="kontakt-info-line row">
	                  <div class="kontakt-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/kontakt-pin.png"></div>
	                  <p><?php the_field('adresa'); ?></p>
	                </div><!-- kontakt-info-line row -->

	                <div class="kontakt-info-line row">
	                  <div class="kontakt-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/kontakt-email.png"></div>
	                  <p><?php the_field('mail'); ?></p>
	                </div><!-- kontakt-info-line row -->

	                <div class="kontakt-info-line row">
	                  <div class="kontakt-info-line-img"><img src="<?php echo get_template_directory_uri(); ?>/img/kontakt-slusalica.png"></div>
	                  <p><?php the_field('telefon'); ?></p>
	                </div><!-- kontakt-info-line row -->

	              </div><!-- kontakt info -->
           </div><!-- col-md-6 -->


             <div class='col-md-6 col-sm-12'>
         	    <div class="kontakt-form-box">
	              <div class='content'>
	                 <?php the_content(); ?>
	              </div><!-- content -->
                </div><!-- contact_form -->
	 	    </div><!-- col-md-6 -->
		        


         </div><!-- row -->
       </div><!-- kontakt-row -->
      </div>
    </div><!-- container -->
</main><!-- kontakt main -->



<?php endwhile; ?>
<!-- end the loop -->




<?php get_footer(); ?>
