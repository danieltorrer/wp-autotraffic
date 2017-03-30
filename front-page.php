<?php get_header(); ?>


<nav class="nav-home  hidden-sm hidden-xs" aria-hidden="true">
  <ul>
    <li data-slide="0" class="active" data-href="#home"><span>Home</span></li>
    <li data-slide="1" data-href="#movilidad"><span>Movilidad</span></li>
    <li data-slide="2" data-href="#about"><span>About</span></li>
    <li data-slide="3" data-href="#news"><span>News</span></li>
  </ul>
</nav>

<!--  Modal noticia starts -->
<?php include "modal-news-template.php" ?>
<!--  Modal noticia ends -->
<!--  icons preload -->
<div class="hide">
<img src="<?php echo get_template_directory_uri(); ?>/images/peaton.svg" alt="" class="bike-icon">
<img src="<?php echo get_template_directory_uri(); ?>/images/moto.svg" alt="" class="network-icon">
<img src="<?php echo get_template_directory_uri(); ?>/images/carga.svg" alt="" class="bus-icon">
<img src="<?php echo get_template_directory_uri(); ?>/images/camion.svg" alt="" class="car-icon">
<img src="<?php echo get_template_directory_uri(); ?>/images/bici.svg" alt="" class="cel-icon">
<img src="<?php echo get_template_directory_uri(); ?>/images/auto.svg" alt="" class="laptop-icon">
<img src="<?php echo get_template_directory_uri(); ?>/images/silla.svg" alt="" class="silla-icon">
</div>
<!--  icons preload-->


<div class="scroll-body fixed">

  <!--  Home starts -->
  <?php
    $clase = 0;
    $numero = rand(1, 100);
    var_dump ($numero);
    if($numero <= 20){
      $clase = 3;
    }
    if($numero > 20 && $numero <= 45){
      $clase = 2;
    }
    if($numero > 45){
      $clase = 1;
    }
   ?>
  <section id="home" class="z-10 home valign skrollr-deck slide fixed" data-slide="0">
    <div class="tilt-backup gradient-<?php echo $clase?>"></div>
    <canvas id="nodes" data-tilt data-tilt-reset="false" data-tilt-max="20"  data-tilt-perspective="1000" data-tilt-scale="1.2"></canvas>
    <div class="valign-item">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-4">
            <div class="text-left">
              <p><img class="logo-icon" src="<?php echo get_template_directory_uri(); ?>/images/logo-icon.png" alt=""></p>
              <h2>Movilidad <br> <span class="font-title">segura, eficiente y sustentable</span></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="scroll-item text-center">
        <p class="scroll-slide-arrow">
            <img class="scale-img flecha-icon flecha-icon-4" src="<?php echo get_template_directory_uri(); ?>/images/flecha-icon.png" alt="scroll">
            <img class="scale-img flecha-icon flecha-icon-3" src="<?php echo get_template_directory_uri(); ?>/images/flecha-icon.png" alt="scroll">
            <img class="scale-img flecha-icon flecha-icon-2" src="<?php echo get_template_directory_uri(); ?>/images/flecha-icon.png" alt="scroll">
            <img class="scale-img flecha-icon flecha-icon-1" src="<?php echo get_template_directory_uri(); ?>/images/flecha-icon.png" alt="scroll">
        </p>
      </div>

    </div>
  </section>
  <!--  Home ends  -->

  <!--  Movilidad starts -->
  <section class="z-15 skrollr-deck valign slide" id="movilidad" data-slide="1" style="transform: translateY(100%);">
    <div class="zoom-image zoom-image-1 zoom-animate"></div>
    <div class="zoom-image zoom-image-2 hide-image zoom-animate"></div>
    <div class="zoom-image zoom-image-3 hide-image zoom-animate"></div>
    <!-- <div class="zoom-image zoom-image-2" data-zoom="2"></div> -->
    <!-- <div class="zoom-image zoom-image-3" data-zoom="3"></div> -->
    <div class="valign-item">
      <div class="container">
        <div class="row">

          <div class="col-sm-6 col-sm-offset-3 text-center movilidad-title">
            <h2 class="font-text">Movilidad 3.0</h2>
            <p class="font-title">Integra los 3 ejes principales de una política pública que mejore la movilidad en las urbes del mundo a través de un modelo de servicio autofinanciable para los entes de gobierno.</p>
          </div>

          <div class="col-sm-4 text-center">
            <div class="movilidad-categoria" data-category="1">
              <img src="<?php echo get_template_directory_uri(); ?>/images/shield-icon.png" alt="">
              <p class="font-title">Seguridad</p>

              <div class="movilidad-descripcion ">
                <a class="button button-primary button-animated transition-link" href="<?php echo site_url()?>/seguridad">+</a>
              </div>
            </div>


          </div>

          <div class="col-sm-4 text-center">
            <div class="movilidad-categoria" data-category="2">
              <img src="<?php echo get_template_directory_uri(); ?>/images/hand-icon.png" alt="">
              <p class="font-title">eficiencia</p>

              <div class="movilidad-descripcion">
                <a class="button button-primary button-animated transition-link" href="<?php echo site_url()?>/eficiencia">+</a>
              </div>
            </div>


          </div>

          <div class="col-sm-4 text-center">
            <div class="movilidad-categoria" data-category="3">
              <img src="<?php echo get_template_directory_uri(); ?>/images/leaf-icon.png" alt="">
              <p class="font-title">Medio ambiente</p>

              <div class="movilidad-descripcion">
                <a class="button button-primary button-animated transition-link" href="<?php echo site_url()?>/medio-ambiente">+</a>
              </div>
            </div>


          </div>

        </div>
      </div>

    </div>
  </section>
  <!--  Movilidad ends-->

  <!--  About starts -->
  <section id="about" class="z-20 about valign skrollr-deck slide" data-slide="2" style="transform: translateY(100%);">
    <div class="valign-item">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <div class="text-left">
              <div class="gif-overlay">
                  <img src="<?php echo get_template_directory_uri()?>/images/mundo.gif" alt="" class="mundo-gif">
                  <img class="trazando"  src="<?php echo get_template_directory_uri()?>/images/trazando.png" alt="">
              </div>
              <div class="line line-margin"></div>
              <h4 class="font-text">LíDER en soluciones de <br>movilidad urbana </h4>
              <p>
                <a href="<?php echo site_url(); ?>/nosotros" class="transition-link button button-default">
                  Nosotros
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>



    </div>
  </section>
  <!--  About ends  -->
</div>

<div class="relative-wrapper fixed">

  <!--  News starts -->
  <?php include 'news-template.php'; ?>
  <!--  modal news -->
  <!-- </div> -->
  <!-- News ends -->

  <!--  newsletter starts -->
  <?php include "newsletter-template.php" ?>
  <!--  newsletter ends -->

  <script src="<?php echo get_template_directory_uri(); ?>/scripts/home.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/news.js"></script>
  <?php
  include 'footer-template.php';
  ?>


</div>


<!--  News ends  -->

<!-- </main> -->




<?php get_footer(); ?>
