<div id="news" class="news skrollr-deck slide not-fixed">

  <div class="container">

    <div class="row news-title">
      <div class="col-sm-3">
        <div class="line full"></div>
      </div>
      <div class="col-sm-6 text-left">
        <h2 class="font-text"><span>Más de</span> nosotros</h2>
        <h4 class="font-text">Noticias <span class="white-text">destacadas</span></h4>
      </div>

      <div class="col-sm-2">
        <a class="button button-default transition-link" href="<?php echo site_url() ?>/boletin">Ver todos</a>
      </div>
    </div>

    <div class="row news-container">
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
      <?php if($cont == 0) {?>
      <div class="col-sm-5 news-item medium-item wow fadeInLeft" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
        <div>
          <h5 class="font-title">Noticias</h5>
          <p><?php the_title(); ?></p>
        </div>
        <a href="#" class="news-button wp-link button button-primary button-red button-animated" data-toggle="modal" data-target="#modal-<?php echo $cont;?>">+</a>

      </div>

      <?php } ?>

      <?php if($cont == 1) {?>
        <div class="col-sm-7">
          <div class="row">

          <div class="col-sm-12 news-item small-item wow fadeInRight" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
            <div>
              <h5 class="font-title">Noticias</h5>
              <p><?php the_title(); ?></p>
              <a href="#" class="news-button wp-link button button-primary button-red button-animated" data-toggle="modal" data-target="#modal-<?php echo $cont;?>">+</a>
            </div>
          </div>

        <?php } ?>

          <?php if($cont == 2) {?>
          <div class="col-sm-6 news-item small-item no-bg wow fadeInUp">
            <div>
              <h5 class="font-title">Noticias</h5>
              <p><?php the_title(); ?></p>
              <a href="#" class="news-button wp-link button button-primary button-red button-animated button-white" data-toggle="modal" data-target="#modal-<?php echo $cont;?>">+</a>
            </div>
          </div>

          <?php } ?>

          <?php if($cont == 3) {?>
          <div class="col-sm-6 news-item small-item no-bg no-bg-white  wow fadeInUp">
            <div>
              <h5 class="font-title">Noticias</h5>
              <p><?php the_title(); ?></p>
              <a href="#" class="news-button wp-link button button-primary button-red button-animated" data-toggle="modal" data-target="#modal-<?php echo $cont;?>">+</a>
            </div>
          </div>

        </div>
      </div>
      <?php } ?>

      <?php $cont++; ?>

      <?php endwhile; else : ?>
      <?php endif; ?>
    </div>
  </div>

</div>

<script type="text/javascript">
  $(document).ready(function(){
    //Imprimir los 4 modales?
  });
</script>
