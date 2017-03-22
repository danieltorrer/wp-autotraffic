<?php get_header(); ?>
<script type="text/javascript">
$(document).ready(function (){
  $('body').removeClass('no-scroll');
});
</script>
<!--  Modal noticia starts -->
<?php include 'modal-news-template.php'; ?>
<!--  Modal noticia ends -->

<!-- <main> -->
<!--  Modal vacate starts -->
<div id="cliente-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="">
        <button type="button" class="close button button-red button-primary" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">

        <div class="row cliente-logo">
          <div class="col-sm-4 col-sm-offset-1 col-xs-5">
            <div class="valign">
              <div class="valign-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cdmx-i.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="valign">
              <div class="valign-item">
                <h3 class="font-text">Gobierno del Estado de Puebla</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="cliente-content">

          <div class="row cliente-solucion">
            <div class="col-sm-1 col-sm-offset-1 col-xs-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/shield-icon-red.png" alt="">
            </div>

            <div class="col-sm-3 col-sm-offset-1 col-xs-8">
              <h4 class="font-title">Solucion</h4>
              <p class="font-title">Multi-infracción</p>
            </div>
          </div>

          <div class="row cliente-periodo">
            <div class="col-sm-1 col-sm-offset-1 col-xs-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/calendar-icon-red.png" alt="">
            </div>

            <div class="col-sm-3 col-sm-offset-1 col-xs-8">
              <h4 class="font-title">PERIÓDO</h4>
              <p class="font-title">Multi-infracción</p>
            </div>
          </div>

          <div class="row cliente-stats">
            <div class="col-sm-1 col-sm-offset-1 col-xs-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/graph-icon-red.png" alt="">
            </div>

            <div class="col-sm-3 col-sm-offset-1 col-xs-8">
              <h4 class="font-title">REDUCCIÓN DE MUERTES Y/O ACCIDENTES VIALES</h4>
              <p class="font-title">Multi-infracción</p>
            </div>
          </div>


        </div>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--  Modal vacante ends -->



<!--  trabajo cover starts -->
<section class="slide clientes-cover not-fixed valign">
  <div class="valign-item">
    <div class="container">
      <div class="row  wow fadeInUp">
        <div class="col-sm-12">
          <h3 class="font-text text-center white-text">Nuestros clientes</h3>
        </div>
        <div class="col-sm-8 col-sm-offset-2">
          <p class="font-text text-center white-text">
            A través de todos nuestros recursos y esfuerzos: integrando las mejores tecnologías del <br>mundo y diseñando las propias. Te presentamos algunos de nuestros clientes y las <br> soluciones que con éxito hemos realizado.
          </p>
        </div>
        <div class="col-sm-12">
          <div class="carousel">

            <div class="carousel-item">
              <div class="carrousel-content">
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/jalisco-i.jpg" alt="">
                  <a
                  data-logo="<?php echo get_template_directory_uri(); ?>/images/jalisco-i.jpg"
                  data-cliente-name="Gobierno del Estado de Jalisco"
                  data-cliente-solucion="Velocidad"
                  data-cliente-periodo="2014-2015"
                  data-cliente-stats="32%"
                  class="button button-primary button-animated button-red cliente-button" href="#">+</a>
                </div>
              </div>
              <p class="font-title"> Gobierno del Estado de Jalisco</p>
            </div>

            <div class="carousel-item">
              <div class="carrousel-content">
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/cdmx-i.jpg" alt="">
                  <a
                  data-logo="<?php echo get_template_directory_uri(); ?>/images/cdmx-i.jpg"
                  data-cliente-name="Gobierno de la CDMX"
                  data-cliente-solucion="Multi - infracción"
                  data-cliente-periodo="2016 a la fecha"
                  data-cliente-stats="18.30%"
                  class="button button-primary button-animated button-red cliente-button" href="#">+</a>

                </div>
              </div>
              <p class="font-title">Gobierno de la CDMX</p>
            </div>

            <div class="carousel-item">
              <div class="carrousel-content">
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/puebla-i.jpg" alt="">
                  <a
                  data-logo="<?php echo get_template_directory_uri(); ?>/images/puebla-i.jpg"
                  data-cliente-name="Gobierno del Estado de Puebla"
                  data-cliente-solucion="Velocidad"
                  data-cliente-periodo="2013- a la fecha"
                  data-cliente-stats="89%"
                  class="button button-primary button-animated button-red cliente-button" href="#">+</a>
                </div>
              </div>
              <p class="font-title">Gobierno del Estado de Puebla</p>
            </div>

            <div class="carousel-item">
              <div class="carrousel-content">
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pachuca-i.jpg" alt="">
                  <a
                  data-logo="<?php echo get_template_directory_uri(); ?>/images/pachuca-i.jpg"
                  data-cliente-name="Gobierno del Estado de Puebla"
                  data-cliente-solucion="Velocidad"
                  data-cliente-periodo="2013- a la fecha"
                  data-cliente-stats="89%"
                  class="button button-primary button-animated button-red cliente-button" href="#">+</a>

                </div>
              </div>
              <p class="font-title">H. Ayuntamiento de Pachuca</p>
            </div>

            <div class="carousel-item">
              <div class="carrousel-content">
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/zapotlan-i.jpg" alt="">
                  <a
                  data-logo="<?php echo get_template_directory_uri(); ?>/images/zapotlan-i.jpg"
                  data-cliente-name="H. Ayuntamiento de Zapotlán el Grande"
                  data-cliente-solucion="Velocidad"
                  data-cliente-periodo="2017"
                  data-cliente-stats="POR ARRANCAR"
                  class="button button-primary button-animated button-red cliente-button" href="#">+</a>

                </div>
              </div>
              <p class="font-title">H. Ayuntamiento de Zapotlán el Grande</p>
            </div>

            <div class="carousel-item">
              <div class="carrousel-content">
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/garcia-i.jpg" alt="">
                  <a
                  data-logo="<?php echo get_template_directory_uri(); ?>/images/garcia-i.jpg"
                  data-cliente-name="H. Ayuntamiento de García, N.L."
                  data-cliente-solucion="Movilidad 3.0"
                  data-cliente-periodo="2017"
                  data-cliente-stats="POR ARRANCAR"
                  class="button button-primary button-animated button-red cliente-button" href="#">+</a>

                </div>
              </div>
              <p class="font-title">H. Ayuntamiento de García, N.L.</p>
            </div>

            <div class="carousel-item">
              <div class="carrousel-content">
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ocotlan-i.jpg" alt="">
                  <a
                  data-logo="<?php echo get_template_directory_uri(); ?>/images/ocotlan-i.jpg"
                  data-cliente-name="H. Ayuntamiento de Ocotlán, Jalisco"
                  data-cliente-solucion="Velocidad"
                  data-cliente-periodo="2014-2015"
                  data-cliente-stats="32%"
                  class="button button-primary button-animated button-red cliente-button" href="#">+</a>

                </div>
              </div>
              <p class="font-title">H. Ayuntamiento de Ocotlán, Jalisco</p>
            </div>

            <div class="carousel-item">
              <div class="carrousel-content">
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ags-i.png" alt="#">
                  <a
                  data-logo="<?php echo get_template_directory_uri(); ?>/images/ags-i.png"
                  data-cliente-name="Gobierno del Estado de Aguascalientes"
                  data-cliente-solucion="Velocidad"
                  data-cliente-periodo="Enero a Diciembre 2013"
                  data-cliente-stats="25%"
                  class="button button-primary button-animated button-red cliente-button" href="#">+</a>                  </div>
                </div>
                <p class="font-title"> Gobierno del Estado de Aguascalientes</p>
              </div>

              <div class="carousel-item">
                <div class="carrousel-content">
                  <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/veracruz-i.jpg" alt="#">
                    <a
                    data-logo="<?php echo get_template_directory_uri(); ?>/images/veracruz-i.jpg"
                    data-cliente-name="Estado de Veracruz"
                    data-cliente-solucion="Velocidad"
                    data-cliente-periodo="2015"
                    data-cliente-stats="68%"
                    class="button button-primary button-animated button-red cliente-button" href="#">+</a>                    </div>
                  </div>
                  <p class="font-title">Estado de Veracruz</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  contact cover ends -->


    <!--  News starts -->
    <?php include 'news-template.php'; ?>
    <!--  main ends -->

    <!--  newsletter starts -->
    <?php include 'newsletter-template.php' ?>
    <!--  newsletter ends -->
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/clientes.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/news.js"></script>

    <?php include "footer-template.php" ?>
    <!-- </main> -->


    <?php get_footer(); ?>
