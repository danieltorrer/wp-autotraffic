<!--  Modal noticia starts -->
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => '5'
  );
  $the_query = new WP_Query( $args);
  $cont = 0;
?>
<?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<div id="modal-<?php echo $cont?>" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat center center; background-size: cover;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="" style="z-index: -1;">
        <button type="button" class="close button button-red button-primary" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">

        <div class="row cliente-logo" style="margin-bottom: 30px; margin-top: 30px;">

          <div class="col-sm-10 col-sm-offset-1">
            <div class="valign">
              <div class="valign-item">
                <h5>Noticias</h5>
                <h3 class="font-text"><?php the_title(); ?></h3>
                <p><?php the_time('F j, Y'); ?> | Por Autotraffic</p>
              </div>
            </div>
          </div>
        </div>

        <div class="cliente-content">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <?php the_excerpt(); ?>
            </div>
          </div>

        </div>

        <div class="news-more">
          <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
              <a href="<?php the_permalink(); ?>"><p class="leer-mas font-title">Leer Más +</p></a>
            </div>
            <div class="col-sm-5">
              <div class="single-social text-right">
                <span>compartir</span>
                <a href="https://twitter.com/home?status=<?php echo urlencode(get_permalink()); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/tw-icon.png" alt=""></a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/fb-icon.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--  Modal noticia ends -->
<?php $cont++; ?>

<?php endwhile; else : ?>
<?php endif; ?>
