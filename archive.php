<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Ogitive
 */

get_header(); ?>



 <main class="aktuelnosti-main">
	<div class="container">



		<?php if ( have_posts() ) : ?>


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


 

  
  <div class="col-md-12">
      <div class="aktuelnosti-row">
         <div class="row">

	           <div class="col-md-6">
	           	    <a href="<?php the_permalink(); ?>">
	            	 	<?php the_post_thumbnail('cat-thumb'); ?>
	            	</a>
	           </div><!-- col-md-6 -->


	          <div class="col-md-6">
		    	  <a href="<?php the_permalink(); ?>">
			          <h3><?php the_title(); ?></h3>
			      </a>
		          <p><?php the_excerpt(); ?></p>
		           <a href="<?php the_permalink(); ?>" class="button btn-white">Više Informacija</a>
	         </div><!-- col-md-6 -->
         </div><!-- row -->
      </div><!-- aktuelnosti-row -->
  </div><!-- col-md-12 -->



  			<?php endwhile; endif; ?>

  
 





  </div><!-- container -->
</main><!-- aktuelnosti-main -->

			

<?php get_footer(); ?>


