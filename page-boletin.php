<?php get_header(); ?>
<script type="text/javascript">
$(document).ready(function (){
  $('body').removeClass('no-scroll');
});
</script>
<!-- <main> -->

<!--  contact cover starts -->
<section class="slide boletin-cover not-fixed valign">
  <div class="valign-item">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 wow fadeInUp">
          <img class="wow fadeInLeft" src="<?php echo get_template_directory_uri(); ?>/images/boletin-icon.png" alt="">
          <h2 class="font-title">Boletín</h2>
          <p class="font-title">
            Manténte informado de noticias de <br> movilidad sustentable.
          </p>
        </div>
        <div class="col-sm-6"></div>
      </div>

    </div>
  </div>
</section>
<!--  contact cover ends -->

<!--  contact cover ends -->

<!--  related -->
<section class="single-related boletin-related">
  <div class="container">
    <div class="row">
      <!--  -->
      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 8,
          'paged'          => $paged
        );
        $the_query = new WP_Query( $args);
      ?>
      <?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
        <div class="related-item col-sm-6 wow fadeInUp">
          <?php if( has_post_thumbnail( get_the_ID() ) ) {?>
          <div class="solution-item" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat center center; background-size: cover;">
            <!-- <div class="solution-img"> -->

              <!-- <a href="<?php the_permalink();?>"><img class="full-image" src="<?php the_post_thumbnail_url('custom-size'); ?>" alt=""></a> -->
              <?php } else { ?>
            <div class="solution-item" style="background: url(<?php echo get_template_directory_uri(); ?>/images/banner.jpg) no-repeat center center; background-size: cover;">

                <!-- <a href="<?php the_permalink();?>"><img class="full-image" src="http://www.placehold.it/600x200" alt=""></a> -->
              <?php } ?>
            <!-- </div> -->
            <div class="solution-description">
              <h4 class="font-title hidden-xs hidden-sm">Noticias</span></h4>
              <div class="row">
                <div class="col-sm-6">
                  <a class="font-text single-extract transition-link" href="<?php the_permalink();?>"><?php the_title(); ?></a>
                </div>
                <div class="col-sm-6 single-see-more">
                  <a href="<?php the_permalink();?>" class="button button-primary button-red transition-link">+</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php endwhile; ?>
      <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
      <div class="col-sm-6 text-center">
        <div class="nav-next alignright">
          <?php echo get_previous_posts_link( '< Entradas recientes' ); // display newer posts link ?>
          <br><br>
        </div>
      </div>
      <div class="col-sm-6 text-center">
        <div class="nav-previous alignleft">
          <?php echo get_next_posts_link( 'Entradas antiguas >', $the_query->max_num_pages ); // display older posts link ?>
        </div>
      </div>
      <?php } ?>

      <?php else : ?>
      <?php endif; ?>


    </div>
  </div>
</section>
<!--  single related ends -->

<!--  main ends -->


<!--  newsletter starts -->
<?php include "newsletter-template.php" ?>
<!--  newsletter ends -->



<?php include "footer-template.php" ?>
<!-- </div> -->
<!-- </main> -->
<?php get_footer(); ?>
