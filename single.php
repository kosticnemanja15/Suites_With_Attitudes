<?php
/**
 * The template for displaying all single posts.
 *
 * @package WP_Ogitive
 */
get_header();
?>




<!-- start the loop -->
<?php while (have_posts()) : the_post(); ?>

   <div class='container'>
        <div class="row">
            <div class='col-lg-12'>
                <div class='content'>
                    <?php the_content(); ?>
                </div><!-- content -->
            </div><!-- ol-lg-12 -->
        </div><!-- row -->
    </div><!-- container -->

<?php endwhile; ?>


<?php get_footer(); ?>
