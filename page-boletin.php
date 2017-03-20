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
        $args = array(
          'post_type' => 'post',
        );
        $the_query = new WP_Query( $args);
      ?>
      <?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
        <div class="related-item col-sm-6 wow fadeInUp">
          <div class="solution-item">
            <div class="solution-img">
              <img class="full-image" src="<?php the_post_thumbnail_url('custom-size'); ?>" alt="">
            </div>
            <div class="solution-description">
              <h4 class="font-title hidden-xs hidden-sm">Noticias</span></h4>
              <div class="row">
                <div class="col-sm-6">
                  <a class="font-text single-extract" href="<?php the_permalink();?>"><?php the_title(); ?></a>
                </div>
                <div class="col-sm-6 single-see-more">
                  <a href="<?php the_permalink();?>" class="button button-primary button-red">+</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php endwhile; else : ?>
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
