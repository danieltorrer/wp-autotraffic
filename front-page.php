<?php get_header(); ?>


  <nav class="nav-home" aria-hidden="true">
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
    <img class="bike-icon" src="<?php echo get_template_directory_uri(); ?>/images/bike-icon.png" alt="">
  </div>
  <!--  icons preload-->


    <div class="scroll-body fixed">

      <!--  Home starts -->
      <section id="home" class="z-10 home valign skrollr-deck slide fixed " data-slide="0">
        <div class="tilt-backup"></div>
        <canvas id="nodes" data-tilt></canvas>
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
            <p>
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
        <div class="zoom-image-1 hide"></div>
        <div class="zoom-image-2 hide"></div>
        <div class="zoom-image-3 hide"></div>
        <div class="zoom-image zoom-image-1 zoom-animate" data-zoom="1"></div>
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

                  <div class="movilidad-descripcion">
                    <a class="button button-primary button-animated" href="seguridad.html">+</a>
                  </div>
                </div>


              </div>

              <div class="col-sm-4 text-center">
                <div class="movilidad-categoria" data-category="2">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/hand-icon.png" alt="">
                  <p class="font-title">eficiencia</p>

                  <div class="movilidad-descripcion">
                    <a class="button button-primary button-animated" href="eficiencia.html">+</a>
                  </div>
                </div>


              </div>

              <div class="col-sm-4 text-center">
                <div class="movilidad-categoria" data-category="3">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/leaf-icon.png" alt="">
                  <p class="font-title">Medio ambiente</p>

                  <div class="movilidad-descripcion">
                    <a class="button button-primary button-animated" href="medio-ambiente.html">+</a>
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
                  <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/world.png" alt="">
                  </div>
                  <div class="line line-margin"></div>
                  <h4 class="font-text">LíDER en soluciones de <br>movilidad urbana </h4>
                  <p>
                    <a href="#" class="button button-default">
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
              <a class="button button-default" href="#">Ver todos</a>
            </div>
          </div>

          <div class="row news-container">
            <div class="col-sm-5 news-item medium-item">
              <div>
                <h5 class="font-title">Noticias</h5>
                <p>Lorem ipsum quasi repellat ipsam.</p>
              </div>
              <a href="#" class="news-button button button-primary button-red button-animated">+</a>

            </div>

            <div class="col-sm-7">
              <div class="row">

                <div class="col-sm-12 news-item small-item">
                  <div>
                    <h5 class="font-title">Noticias</h5>
                    <p>Lorem ipsum! Consequuntur rerum, deserunt.</p>
                    <a href="#" class="news-button button button-primary button-red button-animated">+</a>
                  </div>
                </div>

                <div class="col-sm-6 news-item small-item no-bg">
                  <div>
                    <h5 class="font-title">Noticias</h5>
                    <p>Lorem ipsum, quae accusamus officia.</p>
                    <a href="#" class="news-button button button-primary button-red button-animated button-white">+</a>
                  </div>
                </div>

                <div class="col-sm-6 news-item small-item no-bg no-bg-white">
                  <div>
                    <h5 class="font-title">Noticias</h5>
                    <p>Lorem ipsum Unde eligendi, molestias deserunt quia.</p>
                    <a href="#" class="news-button button button-primary button-red button-animated">+</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!--  modal news -->
      </div>
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
