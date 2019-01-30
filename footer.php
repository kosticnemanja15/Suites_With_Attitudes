<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WP_Ogitive
 */
?>




<footer>
      <div class="footer-logo">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/pr3.png"></a>
      </div><!-- footer-logo -->

      <div class="footer-box">
        <div class="footer-box-left">
          <div class="footer-box-left-img-1"><img src="<?php the_field('slika1','options'); ?>"></div><!-- footer-box-left-img-1 -->
          <div class="footer-box-left-img-2"><img src="<?php the_field('slika2','options'); ?>"></div><!-- footer-box-left-img-2 -->
        </div><!-- footer-box-left -->
        <div class="footer-box-right">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mapa-futer-v.jpg">
          
          <div class="footer-box-right-info">
            <h3><?php the_field('ime','options'); ?></h3>
            <p>adresa: <span> <?php the_field('adresa','options'); ?> </span></p>
            <p>tel: <span><?php the_field('telefon','options'); ?> </span></p>
            <p>email: <span><?php the_field('mail','options'); ?> </span></p>
          </div><!-- footer-box-right-info -->
          <div class="footer-box-right-pin">
           
          </div>
        </div><!-- footer-box-right -->
      </div><!-- footer-box -->
      
      <div class="footer-box-right-info mobile">
            <h3><?php the_field('ime','options'); ?></h3>
            <p>adresa: <span> <?php the_field('adresa','options'); ?> </span></p>
            <p>tel: <span><?php the_field('telefon','options'); ?> </span></p>
            <p>email: <span><?php the_field('mail','options'); ?> </span></p>
      </div><!-- footer-box-right-info mobile -->

      <div class="footer-social-links">
          <a href="<?php the_field('facebook','options') ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/img/facebook-ico.svg"></a>

          <a href="<?php the_field('instagram','options') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram-ico.svg"></a>
      </div><!-- footer-social-links -->

</footer>


<?php wp_footer(); ?>


</body>
</html>
