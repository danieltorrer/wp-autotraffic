<!-- Vacante item starts -->
<?php
  $args = array(
    'post_type' => 'vacante',
  );
  $the_query = new WP_Query( $args);
  $cont = 1;
?>
<?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<div id="modal-<?php echo $cont ?>" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img src="<?php echo get_template_directory_uri(); ?>/images/modal-header.jpg" alt="">
        <button type="button" class="close button button-red button-primary" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h3 class="font-text"><?php the_title(); ?></h3>
            <div class="vacante-info">
              <img src="<?php echo get_template_directory_uri(); ?>/images/clock-icon.png" alt="">
              <p><?php echo get('tiempo'); ?></p>
            </div>
          </div>

          <div class="col-sm-10 col-sm-offset-1">
            <h4>Requisitos</h4>
            <?php echo get('requisitos'); ?>
            <br><br>
            <h4>Principales actividades a realizar</h4>
            <?php echo get('actividades'); ?>
          </div>

        </div>

        <div class="vacante-form">
          <div class="row margin-90">
            <div class="col-sm-10 col-sm-offset-1">
              <h4 class="font-text">si te interesa este puesto, déjanos tus datos</h4>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row no-smoothState">
                  <?php echo do_shortcode('[contact-form-7 id="39" title="Contact form 1" html_class="no-smoothState"]'); ?>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php $cont++; ?>

<?php endwhile; else : ?>
<?php endif; ?>
