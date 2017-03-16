<?php get_header(); ?>
<script type="text/javascript">
$(document).ready(function (){
  $('body').removeClass('no-scroll');
});
</script>
<!-- <main> -->
<!--  Modal vacate starts -->
<div id="vacante-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img src="<?php echo get_template_directory_uri(); ?>/images/modal-header.jpg" alt="">
        <button type="button" class="close button button-red button-primary" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <h3 class="font-text">Subdirector de recursos humanos</h3>
            <div class="vacante-info">
              <img src="<?php echo get_template_directory_uri(); ?>/images/clock-icon.png" alt="">
              <p>Tiempo completo</p>
            </div>
          </div>

          <div class="col-sm-10 col-sm-offset-1">
            <h4>Requisitos</h4>
            <p>
              •	Edad: 24 – 35 años <br>
              •	Escolaridad: Carrera Técnica, TSU. en  electrónica, eléctrica, mecatrónica, computación, o afín. <br>
              •	Sexo: Masculino <br>
              •	Experiencia: Deseable 1 año en instalación y operación de equipos electrónicos. <br>
              •	Conocimientos requeridos: Nivel usuario intermedio en Paquetería Office, conocimientos básicos <br>
              de electrónica y mecánica. <br>
            </p>
            <br><br>
            <h4>Principales actividades a realizar</h4>
            <p>
              •	Trasladar e instalar los equipos de monitoreo. <br>
              •	Configurar y operar los equipos tecnológicos de monitoreo en las vialidades designadas. <br>
              •	Dar seguimiento a los programas de mantenimiento preventivo y correctivo de los equipos de
              monitoreo.
            </p>
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
              <form action="">

                <div class="row">

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-title" for="nombre">Nombre completo</label>
                      <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-title" for="correo">correo electrónico </label>
                      <input type="email" class="form-control" id="correo" placeholder="ejemplo@ejemplo.com">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-title" for="nombre">número Telefónico</label>
                      <input type="text" class="form-control" placeholder="01-222">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-title" for="">Lugar de residencia </label>
                      <input type="text" class="form-control" placeholder="¿Dónde vives?">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-title" for="">Vacante a aplicar</label>
                      <input type="text" class="form-control" placeholder="Operador">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="font-title" for="">años de experiencia en el área </label>
                      <input type="text" class="form-control" placeholder="Mínimo 1 año de experiencia">
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group">
                      <button class="button button-default button-big inverse" value="Enviar">
                        Enviar
                      </button>
                    </div>
                  </div>
                </div>


              </form>
            </div>

          </div>

        </div>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--  Modal vacante ends -->

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
              <h4 class="font-title">Noticias</span></h4>
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
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
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
