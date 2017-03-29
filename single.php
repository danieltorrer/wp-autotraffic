<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- <main> -->
  <!--  single cover starts -->
    <?php if( has_post_thumbnail( get_the_ID() ) ) {?>
      <section class="slide single-cover not-fixed"
      style="background: url( <?php the_post_thumbnail_url(); ?>  );
      background-size: cover;"
      >
      <?php } else { ?>
        <section class="slide single-cover not-fixed"
        style="background: url(<?php echo get_template_directory_uri();?>/images/env-b.jpg  );
        background-size: cover;"
        >

        <?php } ?>
    <div class="container">
      <div class="single-cover-container">
        <div class="single-cover-content">
          <div class="row">
            <div class="col-sm-7 col-sm-offset-2">
              <h2 class="font-text white-text wow fadeInUp"><?php the_title(); ?></h2>
              <p class="single-date font-title white-text wow fadeInUp"><?php the_time('F j, Y'); ?> | Por Autotraffic</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  single cover ends -->

  <!--  single content starts -->
  <section class="single-content">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-sm-offset-2">
          <div class="single-text wow fadeInUp">
            <?php the_content(); ?>
          </div>

          <div class="single-social wow fadeInUp">
            <span>compartir</span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/tw-icon.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/fb-icon.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  single content ends-->


<?php endwhile; else:
  ?>
<?php endif;
?>

<?php
$args = array(
	'numberposts' => 5,
	'offset' => 0,
	'category' => 0,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'include' => '',
	'exclude' => '',
	'meta_key' => '',
	'meta_value' =>'',
	'post_type' => 'post',
	'post_status' => 'draft, publish, future, pending, private',
	'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
?>


  <!--  single related starts -->
  <section class="single-related single-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-sm-offset-2">
          <h3 class="font-text">Noticias <span>Relacionadas</span></h3>

          <!--  -->
          <?php
          	$recent_posts = wp_get_recent_posts();
          	foreach( $recent_posts as $recent ){
              // var_dump($recent);
            ?>

              <div class="related-item wow fadeInUp">
                <?php if( has_post_thumbnail( get_the_ID() ) ) {?>
                <div class="solution-item" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat center center; background-size: cover;">
                  <!-- <div class="solution-img"> -->

                    <!-- <a href="<?php the_permalink();?>"><img class="full-image" src="<?php the_post_thumbnail_url('custom-size'); ?>" alt=""></a> -->
                    <?php } else { ?>
                  <div class="solution-item" style="background: url(<?php echo get_template_directory_uri(); ?>/images/banner.jpg) no-repeat center center; background-size: cover;">

                      <!-- <a href="<?php the_permalink();?>"><img class="full-image" src="http://www.placehold.it/600x200" alt=""></a> -->
                    <?php } ?>
                  <!-- <div class="solution-img">
                    <?php echo get_the_post_thumbnail( $recent['ID'], 'large' );?>
                  </div> -->
                  <div class="solution-description">
                    <h4 class="font-title"><?php echo $recent["post_title"] ?></span></h4>
                    <div class="row">
                      <div class="col-sm-6">
                        <a class="font-text single-extract transition-link" href=" <?php echo get_permalink($recent["ID"]) ?>">
                          <?php the_excerpt(); ?>
                        </a>
                      </div>
                      <div class="col-sm-6 single-see-more">
                        <a href="<?php echo get_permalink($recent["ID"]) ?>" class="button button-primary button-red transition-link">+</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php
          		// echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
          	}
          ?>


        </div>
      </div>
    </div>
  </section>

  <!--  single related ends -->
  <!--  newsletter starts -->
  <?php include "newsletter-template.php" ?>
  <!--  newsletter ends -->
  <!--  main ends -->

<?php include "footer-template.php" ?>
<!-- </div> -->
<!-- </main> -->
<?php get_footer(); ?>
