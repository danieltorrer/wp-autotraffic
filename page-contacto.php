<?php get_header(); ?>
  <!-- <main> -->
  <script type="text/javascript">
    $(document).ready(function (){
      $('body').removeClass('no-scroll');
    });
  </script>
  <!--  contact cover starts -->
  <section class="slide contact-cover not-fixed">
    <div class="container">
      <div class="contact-cover-container">
        <div class="contact-cover-content">
          <div class="row">
            <div class="col-sm-12">
              <img src="<?php echo get_template_directory_uri(); ?>/images/phone-icon.png" alt="">
              <h2>Contáctanos</h2>
              <p> ¿Te gustaría comunicarte con <br> nosotros?</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  contact cover ends -->
  <!-- address starts -->
  <section class="address">
    <div class="container">

      <div class="col-sm-6 address-image">
        <img class="full-image" src="<?php echo get_template_directory_uri(); ?>/images/puebla-img.jpg" alt="puebla">
      </div>

      <div class="col-sm-6 address-text">

        <p class="font-text addres-item"><strong>Circuito del sol poniente  <br>
          No. 3905 of.202 <br>
          Colonia Nuevo amanecer <br>
          </strong>
        </p>
        <p class="font-title">contacto@autotraffic.com.mx | +52 222 404 32 06</p>


        <a href="#" class="google-maps font-title">ir a google maps +</a>

      </div>
    </div>
  </section>
  <!--  address ends -->

  <!--  form starts -->
  <section class="contact-form">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h3 class="font-text">¿Tienes alguna <br> <span>duda?</span></h3>
        </div>
      </div>

      <div class="row margin-90">
        <div class="col-sm-6">
          <?php echo do_shortcode('[contact-form-7 id="265" title="contacto" html_class="no-smoothState"]') ?>

        </div>
        <div class="col-sm-5 col-sm-offset-1 contact-lider">
          <div class="line"></div>
          <h5>Líder en sistemas <br> de control de movilidad </h5>

          <ul>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/images/check-icon-w.png" alt="check">
              Sistemas multiinfracción
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/images/check-icon-w.png" alt="check">
              Movilidad segura
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/images/check-icon-w.png" alt="check">
              Sensores de flujo vehicular
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/images/check-icon-w.png" alt="check">
              Sensores medioambientales
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/images/check-icon-w.png" alt="check">
              Reductor de partículas contaminantes
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/images/check-icon-w.png" alt="check">
              Intersecciones medioambientalmente limpias y eficientes
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/images/check-icon-w.png" alt="check">
              Parque de movilidad
            </li>
          </ul>

        </div>
      </div>
    </div>
  </section>
  <!--  form ends -->
  <!--  main ends -->


  <!--  newsletter starts -->
  <?php include "newsletter-template.php" ?>
  <!--  newsletter ends -->

<?php include "footer-template.php" ?>
<!-- </div> -->
<!-- </main> -->

<?php get_footer(); ?>
