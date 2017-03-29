<?php get_header(); ?>
<script type="text/javascript">
  $(document).ready(function (){
    $('body').removeClass('no-scroll');
  });
</script>
  <!-- <main> -->
  <!--  Modal vacate starts -->
  <?php include 'modal-vacante.php' ?>
  <!--  Modal vacante ends -->

  <!--  contact cover starts -->
  <section class="slide trabaja-cover not-fixed valign">
    <div class="valign-item">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/card-icon.png" alt="">
            <h2 class="font-title">Iniciemos un cambio juntos</h2>
            <p class="font-title">
              ¿Te gustaría formar parte del equipo <br> Autotraffic?
            </p>
          </div>
          <div class="col-sm-6"></div>
        </div>

      </div>
    </div>
  </section>
  <!--  contact cover ends -->

  <!--  trabajo cover starts -->
  <section class="slide nosotros-cover not-fixed valign">
    <div class="valign-item">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 wow fadeInUp">
            <h3 class="font-text text-center white-text">Trabaja con nosotros</h3>
          </div>
          <div class="col-sm-8 col-sm-offset-2 wow fadeInUp">
            <p class="font-text text-center white-text">
              En Autotraffic nos preocupamos por el bienestar no sólo físico, sino mental, <br>
              espiritual, familiar de nuestra gente. Conoce las oportunidades y beneficios que <br>
              te ofrecemos. No lo piense más y comunícate con nosotros.
            </p>
          </div>
          <div class="col-sm-12">
            <div class="perks wow fadeInUp"> <img src="<?php echo get_template_directory_uri(); ?>/images/shield-icon.png" alt=""> <p class="text-center font-title white-text">Desarrollo <br> profesional</p></div><!--
            --><div class="perks wow fadeInUp"> <img src="<?php echo get_template_directory_uri(); ?>/images/shield-icon.png" alt=""> <p class="text-center font-title white-text">Planes de <br> previsión social</p></div><!--
          --><div class="perks wow fadeInUp"> <img src="<?php echo get_template_directory_uri(); ?>/images/shield-icon.png" alt=""> <p class="text-center font-title white-text">Ambiente laboral <br>agradable y seguro</p></div><!--
        --><div class="perks wow fadeInUp"> <img src="<?php echo get_template_directory_uri(); ?>/images/shield-icon.png" alt=""> <p class="text-center font-title white-text">Estabilidad <br> laboral</p></div>
      </div>
    </div>

  </div>
</div>
</section>
<!--  contact cover ends -->


<!--  vacantes starts -->
<section class="vacantes">
  <div class="container">
    <div class="row news-title wow fadeInUp">
      <div class="col-sm-3">
        <div class="line full"></div>
      </div>
      <div class="col-sm-6 text-left wow fadeInUp">
        <h2 class="font-text"><span>Vacantes</span> disponibles</h2>
        <h4 class="font-text">Intégrate  <span class="white-text">a nuestro equipo</span></h4>
      </div>
    </div>

    <div class="row margin-90">

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

      <div class="col-sm-6 wow fadeInUp">

        <div class="vacante-item">
          <div class="row valign">

            <div class="col-sm-8 valign-item col-sm-offset-1">
              <span class="decorator"></span>
              <h5 class="font-text"> <?php the_title(); ?> </h5>
              <div class="vacante-info">
                <img src="<?php echo get_template_directory_uri(); ?>/images/clock-icon.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/clock-icon-w.png" alt="">
                <p><?php echo get('tiempo'); ?></p>
              </div>
            </div>
            <div class="col-sm-3">
              <a href="#" class="wp-link vacante-button button button-primary button-animated button-white" data-toggle="modal" data-target="#modal-<?php echo $cont;?>">+</a>
            </div>
          </div>
        </div>
      </div>
      <?php $cont++; ?>
    <?php endwhile; else : ?>
    <?php endif; ?>
      <!--  Vacante ends -->

    </div>
  </div>
</section>
<!--  form ends -->
<!--  main ends -->

<!--  newsletter starts -->
<?php include "newsletter-template.php"; ?>
<!--  newsletter ends -->

<script src="<?php echo get_template_directory_uri(); ?>/scripts/vacante.js"></script>
<script type="text/javascript">
// function initContactForm() {
//     $('div.wpcf7 > form').wpcf7InitForm();
//     $('form.wpcf7-form')
//         .each(function() {
//             $(this).find('img.ajax-loader').last().remove();
//         });
// }

// document.addEventListener( 'wpcf7mailsent', function( event ) {
//     location = 'http://autotraffic.com.mx/trabaja-con-nosotros/';
// }, false );

// $(document).ready(function(){
//   // initContactForm();
// })
</script>

<?php include "footer-template.php" ?>
<!-- </div> -->
<!-- </main> -->
<?php get_footer(); ?>
