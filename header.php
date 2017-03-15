<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Autotraffic</title>

  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/animate.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/clientes.css">

  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery.smoothState.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/plugins.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/wow.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>

</head>

<?php if( is_front_page()){ ?>
  <body>
<?php } else { ?>
  <body>
<?php } ?>

  <!--[if lt IE 10]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <div id="page">

  <nav class="menu-container">
    <ul class="menu-list ">
      <li class="menu-item font-text"><a href="<?php echo site_url(); ?>">Inicio</a></li>
      <li class="menu-item font-text"><a href="<?php echo site_url(); ?>/nosotros">Nosotros</a></li>
      <li class="menu-item font-text">
        <a href="#" class="item-sub-menu">Movilidad 3.0 <span>&#x25BC;</span></a>
        <ul class="menu-item-list" style="display: none;">
          <li class="menu-item"><a href="<?php echo site_url(); ?>/seguridad">Seguridad</a></li>
          <li class="menu-item"><a href="<?php echo site_url(); ?>/eficiencia">Eficiencia</a></li>
          <li class="menu-item"><a href="<?php echo site_url(); ?>/medio-ambiente">Medio ambiente</a></li>
        </ul>
      </li>
      <li class="menu-item font-text"><a href="<?php echo site_url(); ?>/clientes">Clientes</a></li>
      <li class="menu-item font-text"><a href="<?php echo site_url(); ?>/boletin">Boletín</a></li>
      <li class="menu-item font-text"><a href="<?php echo site_url(); ?>/contacto">Contacto</a></li>
      <li class="menu-item font-text"><a href="<?php echo site_url(); ?>/trabaja-con-nosotros">Trabaja con nosotros</a></li>
      <li class="menu-item social-icons">
        <a href="" target="_blank"> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="31" viewBox="0 0 14.9 30.7"><defs><rect width="14.9" height="30.7"/></defs><clipPath><use xlink:href="#SVGID_1_"/></clipPath><path d="M14.3 15.4h-4.4v15.4H3.3V15.4H0v-5.3h3.3V6.9C3.3 2.6 5.2 0 10.5 0h4.4v5.3h-2.7c-2.1 0-2.2 0.7-2.2 2.1l0 2.7h5L14.3 15.4z" style="clip-path:url(#SVGID_2_);"/></svg></a>
        <a href="" target="_blank"> <svg xmlns="http://www.w3.org/2000/svg" width="34" height="27" viewBox="0 0 34.4 26.9"><defs><rect width="34.4" height="26.9"/></defs><clipPath><use xlink:href="#SVGID_1_"/></clipPath><path d="M30.8 6.7c0 0.3 0 0.6 0 0.9 0 9-7.1 19.3-20.1 19.3 -4 0-7.7-1.1-10.8-3 0.6 0.1 1.1 0.1 1.7 0.1 3.3 0 6.3-1.1 8.8-2.9 -3.1-0.1-5.7-2-6.6-4.7 0.4 0.1 0.9 0.1 1.3 0.1 0.6 0 1.3-0.1 1.9-0.2 -3.2-0.6-5.7-3.4-5.7-6.7V9.4c1 0.5 2 0.8 3.2 0.8C2.7 9.1 1.4 7 1.4 4.6c0-1.2 0.4-2.4 1-3.4 3.5 4.1 8.7 6.8 14.5 7.1 -0.1-0.5-0.2-1-0.2-1.6C16.7 3 19.9 0 23.8 0c2 0 3.9 0.8 5.1 2.1 1.6-0.3 3.1-0.9 4.5-1.6 -0.5 1.6-1.6 2.9-3.1 3.8 1.4-0.2 2.8-0.5 4-1.1C33.4 4.5 32.2 5.7 30.8 6.7" style="clip-path:url(#SVGID_2_);"/></svg></a>
<a href=""  target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="73" height="73" viewBox="0 0 73.3 73.4"><style>.a{clip-path:url(#SVGID_2_);}</style><defs><rect width="73.3" height="73.4"/></defs><clipPath><use xlink:href="#SVGID_1_"/></clipPath><path d="M36.7 0c5.7 0.2 11.3 0.1 17 0.5 7.1 0.5 12.9 3.4 16.6 9.8 1.7 3 2.6 6.2 2.7 9.6 0.2 8.4 0.3 16.8 0.3 25.2 0 3.8-0.1 7.6-0.7 11.4 -1.5 9.9-8.7 16.2-18.6 16.6 -11.4 0.5-22.9 0.4-34.4 0.1C8.6 72.9 0.6 65 0.3 53.9c-0.4-11.5-0.4-23.1 0.1-34.6C0.8 9.3 7.4 2.3 16.9 0.9c4.1-0.6 8.4-0.6 12.6-0.8 2.4-0.1 4.8 0 7.2 0C36.7 0.1 36.7 0 36.7 0M36.2 67.1c5.6-0.2 11-0.3 16.4-0.5 2.8-0.1 5.5-0.8 7.9-2.3 4-2.6 5.7-6.7 5.8-11.2 0.2-10.8 0.2-21.7 0-32.5 -0.2-7.9-5.2-13.2-13.1-13.4 -11.1-0.3-22.1-0.3-33.2 0C12.3 7.4 7.2 12.4 7 20 6.6 31.2 6.8 42.4 6.9 53.7c0.1 3.8 1.6 7.2 4.6 9.8 2.5 2.1 5.4 3 8.6 3.1C25.5 66.9 31 67 36.2 67.1" class="a"/><path d="M36.5 55.7c-10.4 0-18.8-8.4-18.8-18.8 0-10.5 8.3-18.9 18.9-18.9 10.4 0 18.9 8.4 18.9 18.9C55.5 47.4 47.1 55.7 36.5 55.7M48.8 36.9c0-6.9-5.4-12.2-12.2-12.2 -6.8 0-12.2 5.4-12.2 12.2 0 6.8 5.4 12.2 12.3 12.2C43.4 49 48.8 43.6 48.8 36.9" class="a"/><path d="M56.3 12.9c2.5 0 4.4 2 4.3 4.5 -0.1 2.4-2.1 4.3-4.5 4.3 -2.4 0-4.4-2.1-4.4-4.6C51.9 14.7 53.8 12.8 56.3 12.9" class="a"/></svg>
</a>
    <a href=""  target="_blank">    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40.2 28.3"><defs><rect width="40.2" height="28.3"/></defs><clipPath><use xlink:href="#SVGID_1_"/></clipPath><path d="M39.8 6.1c0 0-0.4-2.8-1.6-4C36.7 0.5 35 0.5 34.2 0.4 28.5 0 20.1 0 20.1 0H20.1c0 0-8.4 0-14.1 0.4C5.2 0.5 3.5 0.5 2 2.1c-1.2 1.2-1.6 4-1.6 4S0 9.4 0 12.6v3c0 3.3 0.4 6.5 0.4 6.5S0.8 24.9 2 26.2c1.5 1.6 3.5 1.6 4.4 1.7 3.2 0.3 13.7 0.4 13.7 0.4s8.4 0 14.1-0.4c0.8-0.1 2.5-0.1 4-1.7 1.2-1.2 1.6-4 1.6-4s0.4-3.3 0.4-6.5v-3C40.2 9.4 39.8 6.1 39.8 6.1M15.9 19.4L15.9 8.1l10.9 5.7L15.9 19.4z" style="clip-path:url(#SVGID_2_);"/></svg>
</a>
      </li>
    </ul>
  </nav>

  <header>
    <h1><a href="<?php echo site_url(); ?>">
      <?php if(!is_page("clientes")) $clase = "logo-vector" ?>
      <svg class="<?php echo $clase ?> logo-colors" xmlns="http://www.w3.org/2000/svg" width="287" height="56" viewBox="0 0 287.5 55.8"><style>.a{fill:#D22937;}</style><path d="M110 40.2c0.5 1.9 0.2 2.4-1.8 2.4h-0.8c-2 0-2.6-0.5-3.1-2.4l-1.1-4.4H91.8l-1.1 4.4c-0.5 1.9-1.1 2.4-3.1 2.4h-0.8c-2 0-2.4-0.5-1.8-2.4l4.8-17.8c0.9-3.2 1.3-4.5 2.5-6.1 1.2-1.5 2.7-2.1 5.3-2.1 2.6 0 4.1 0.5 5.3 2.1 1.2 1.5 1.6 2.9 2.5 6.1L110 40.2zM93.1 30.7h8.6l-2.1-8c-0.4-1.4-0.7-2.3-0.9-2.7 -0.2-0.4-0.7-0.6-1.3-0.6 -0.6 0-1.1 0.2-1.3 0.6 -0.2 0.4-0.5 1.2-0.9 2.7L93.1 30.7zM118.4 34.4c0 2.4 0.9 3.4 4.2 3.4 3.3 0 4.1-1 4.1-3.4V23.5c0-1.9 0.5-2.4 2.4-2.4h0.8c1.9 0 2.4 0.5 2.4 2.4v10.9c0 5.8-3 8.7-9.7 8.7 -6.5 0-9.8-3-9.8-8.7V23.5c0-1.9 0.5-2.4 2.4-2.4h0.8c1.9 0 2.4 0.5 2.4 2.4V34.4zM147.8 37.5c-0.9 0.2-1.8 0.3-3 0.3 -1.8 0-2.7-0.9-2.7-2.9v-8.5h4.9c1.9 0 2.4-0.5 2.4-2.4v-0.5c0-1.9-0.5-2.4-2.4-2.4h-4.9v-3.3c0-1.8-0.4-2.2-2.2-2.2h-0.3c-1.8 0-2.4 0.4-2.6 2.2l-0.5 3.4v5.3 8.5c0 5.4 2.7 8.2 8.3 8.2 1.2 0 2.3-0.1 3-0.3 1.8-0.4 2.4-1.1 2.4-3v-0.5C150.2 37.4 149.8 37.2 147.8 37.5M152.5 33.6v-3.4c0-6.1 3.6-9.5 10.3-9.5 7 0 10.2 3.1 10.2 9.5v3.4c0 6.2-3.5 9.5-10.2 9.5C155.8 43.1 152.5 40 152.5 33.6M167.4 30.2c0-3-0.9-4.2-4.6-4.2 -3.6 0-4.7 1.3-4.7 4.2v3.4c0 3 1 4.2 4.7 4.2 3.6 0 4.6-1.3 4.6-4.2V30.2zM171.7 17.2c0-1.9 0.5-2.5 2.5-2.5h17.3c1.9 0 2.5 0.6 2.5 2.5v0.4c0 2-0.6 2.5-2.5 2.5h-5.7v20c0 1.9-0.6 2.5-2.5 2.5h-0.8c-2 0-2.5-0.6-2.5-2.5V20.1h-5.7c-2 0-2.5-0.5-2.5-2.5V17.2zM199.9 40.2c0 1.9-0.5 2.4-2.4 2.4h-0.8c-1.9 0-2.4-0.5-2.4-2.4V28.4c0-5.1 3.1-7.8 8.9-7.8h0.5c1.7 0 2.2 0.7 2.2 2.7v0.5c0 1.9-0.4 2.2-2.2 2.1h-0.5c-2.6 0-3.3 0.9-3.3 3V40.2zM225.4 36.2c0 4.6-2.8 6.9-9.3 6.9 -6.5 0-9.3-2.3-9.3-6.8 0-4.5 2.9-6.7 8.7-6.7h4.3v-1.6c0-2.1-1.5-2.6-4.5-2.6 -1.2 0-2.4 0.1-3.7 0.3 -1.9 0.3-2.4-0.1-2.4-2v-0.2c0-1.8 0.5-2.3 2.3-2.6 1.1-0.1 2.2-0.2 3.5-0.2 6.7 0 10.4 2.1 10.4 7.4V36.2zM219.8 33.8h-4.4c-2 0-3 0.8-3 2.4 0.2 2.1 1.5 2.3 3.6 2.2 2.2 0 3.6-0.2 3.8-2.5V33.8zM255.1 16.5c0.6 0 1.2 0 1.8 0.1 2 0.2 2.4 0 2.4-1.9v-0.4c0-1.9-0.5-2.7-2.4-2.9 -0.8-0.1-1.5-0.1-2.2-0.1 -5.3 0-8.3 2.2-8.3 8.2v1.8h-11.1v-2.2c0-1.6 1-2.4 3.1-2.4 0.6 0 1.2 0 1.8 0.1 2 0.2 2.4 0 2.4-1.9v-0.4c0-1.9-0.5-2.7-2.4-2.9 -0.8-0.1-1.5-0.1-2.2-0.1 -5.3 0-8.3 2.2-8.3 8.2v7 13.8c0 1.9 0.5 2.4 2.4 2.4h0.8c1.9 0 2.4-0.5 2.4-2.4V26.4h11.1v13.8c0 1.9 0.5 2.4 2.4 2.4h0.8c1.9 0 2.4-0.5 2.4-2.4V26.4h4.5c1.9 0 2.4-0.5 2.4-2.4v-0.5c0-1.9-0.5-2.4-2.4-2.4h-4.5v-2.2C252 17.3 253 16.5 255.1 16.5M262.4 12.3c1.3-1.3 3.4-1.3 4.7 0 1.3 1.3 1.3 3.4 0 4.7 -1.3 1.3-3.4 1.3-4.7 0C261.1 15.7 261.1 13.7 262.4 12.3M262 23.5c0-1.9 0.5-2.4 2.4-2.4h0.8c1.9 0 2.4 0.5 2.4 2.4v16.6c0 1.9-0.5 2.4-2.4 2.4h-0.8c-1.9 0-2.4-0.5-2.4-2.4V23.5zM271.7 29.8c0-5.7 3.6-9.2 10.3-9.2 1 0 1.9 0.1 2.8 0.3 1.8 0.4 2.3 0.9 2.3 2.9v0.5c0 1.9-0.5 2.3-2.3 1.9 -0.8-0.2-1.7-0.3-2.7-0.3 -3.4 0-4.7 0.9-4.7 4v3.9c0 3 1.5 4.1 5.1 4.1 0.8 0 1.7-0.1 2.6-0.3 1.9-0.3 2.4 0 2.4 2v0.4c0 1.9-0.5 2.4-2.4 2.8 -0.9 0.2-1.8 0.3-2.9 0.3 -7 0-10.5-3-10.5-9.2V29.8z" fill="#747263"/><path d="M36.5 23.5c-2.3 0-4.2 1.9-4.2 4.2 0 2.3 1.9 4.2 4.2 4.2 2.3 0 4.2-1.9 4.2-4.2C40.7 25.4 38.8 23.5 36.5 23.5" class="a"/><path d="M72.9 20.8c-0.1-0.4-0.3-0.7-0.7-0.9 -0.2-0.1-0.5-0.2-0.8-0.2 -0.5 0-1 0.3-1.3 0.7l-1.5 2.4 -0.3-0.9c-3.2-9.3-9.7-14-10.5-14.5C48.8 0.2 36.8 0 36.3 0 20 0 10.2 10.3 9.8 10.7c-1.2 1.4-1.8 2.8-1.7 4.2 0.1 1.8 1.3 2.8 1.4 2.9 1 0.9 2 1.3 3.2 1.3 1.9 0 3.6-1.1 4.5-2 0.1-0.1 7.6-7.3 19.3-7.3 10.6 0.2 16.6 6.1 16.9 6.4 1.4 1.6 0.9 2.5 0.5 2.9 -0.5 0.5-0.9 0.6-1.3 0.6H52.6c-0.9 0-1.8-0.8-2.2-1.3 -0.2-0.2-5.1-5-13.8-5 0 0-0.2 0-0.4 0 -1.2 0-4.3 0.2-8 1.6 -2.1 0.8-4 1.9-5.8 3.3 -0.3-0.1-0.6-0.2-0.9-0.2 -1.6 0-2.9 1.3-2.9 2.9 0 1.6 1.3 2.9 2.9 2.9 1.6 0 2.9-1.3 2.9-2.9 0-0.1 0-0.3 0-0.4 5-3.8 10.2-4.1 11.8-4.1l0.3 0c7.1 0 11.2 3.6 11.7 4.1 0.1 0.1 1.9 2.1 4.3 2.2l0.2 0c1.2 0 2.3-0.5 3.2-1.4 0.2-0.2 1.3-1.2 1.4-2.9 0.1-1.4-0.5-2.8-1.7-4.2 -0.3-0.3-6.9-7.2-19.1-7.4 -13.1 0-21.1 7.9-21.5 8.2 -0.2 0.2-1.1 1.1-2.2 1.1 -0.5 0-0.9-0.2-1.4-0.6 -0.1-0.1-0.3-0.4-0.3-0.8 0-0.6 0.3-1.2 0.9-1.9 0.1-0.1 9.4-9.7 24.3-9.7 0.5 0 11.5 0.2 19.8 6.9 0.1 0 6.5 4.4 9.4 13.3l0.3 1 -3.2-1.3c-0.2-0.1-0.4-0.1-0.6-0.1 -0.6 0-1.2 0.4-1.4 0.9 -0.3 0.8 0 1.7 0.8 2l5.8 2.5 0.2 0 0.2 0.1 0.2 0c0.1 0 0.1 0 0.2 0l0.3 0 0.1 0 0.2-0.1c0.1 0 0.1-0.1 0.3-0.1l0-0.1 0.1 0c0.1 0 0.1-0.1 0.2-0.2 0 0 0.1-0.1 0.2-0.2l3.4-5.5C72.9 21.6 73 21.2 72.9 20.8" class="a"/><path d="M64.9 40.9c-0.1-1.8-1.3-2.8-1.4-2.9 -1-0.9-2-1.3-3.2-1.3 -1.9 0-3.6 1.1-4.5 2 -0.1 0.1-7.6 7.3-19.3 7.3 -10.6-0.2-16.6-6.1-16.9-6.4 -1.4-1.6-0.9-2.5-0.5-2.9 0.5-0.5 0.9-0.6 1.2-0.6h0c0.9 0 1.8 0.8 2.2 1.3 0.2 0.2 5.1 5 13.8 5 0 0 0.2 0 0.4 0 1.2 0 4.3-0.2 8-1.6 2.1-0.8 4-1.9 5.8-3.3 0.3 0.1 0.6 0.2 0.9 0.2 1.6 0 2.9-1.3 2.9-2.9 0-1.6-1.3-2.9-2.9-2.9 -1.6 0-2.9 1.3-2.9 2.9 0 0.1 0 0.3 0 0.4 -5 3.8-10.2 4.1-11.8 4.1l-0.3 0c-7.1 0-11.2-3.6-11.7-4.1 -0.1-0.1-1.9-2.1-4.3-2.2l-0.2 0c-1.2 0-2.3 0.5-3.2 1.4 -0.2 0.2-1.3 1.2-1.4 2.9 -0.1 1.4 0.5 2.8 1.7 4.2 0.3 0.3 6.9 7.2 19.1 7.4 13.1 0 21.1-7.9 21.5-8.2 0.2-0.2 1.1-1.1 2.2-1.1 0.5 0 0.9 0.2 1.4 0.6 0.1 0.1 0.3 0.4 0.3 0.8 0 0.6-0.3 1.2-0.9 1.9 -0.1 0.1-9.4 9.7-24.3 9.7C36.2 52.8 25.1 52.6 16.9 45.9c-0.1 0-6.5-4.4-9.4-13.3l-0.3-0.9 3.2 1.3c0.2 0.1 0.4 0.1 0.6 0.1 0.6 0 1.2-0.4 1.4-0.9 0.3-0.8 0-1.7-0.8-2l-5.8-2.5 -0.2 0 -0.2-0.1 -0.2 0c-0.1 0-0.1 0-0.2 0l-0.3 0 -0.1 0 -0.2 0.1c-0.1 0-0.1 0.1-0.3 0.1l0 0.1L4 27.9c-0.1 0.1-0.1 0.1-0.2 0.2 0 0-0.1 0.1-0.2 0.2l-3.4 5.5c-0.2 0.3-0.3 0.8-0.2 1.1 0.1 0.4 0.3 0.7 0.7 0.9 0.2 0.1 0.5 0.2 0.8 0.2 0.5 0 1-0.3 1.3-0.7l1.5-2.4 0.3 0.9c3.2 9.3 9.7 14 10.5 14.5 9.1 7.3 21 7.4 21.5 7.4 16.3 0 26.1-10.3 26.5-10.7C64.4 43.8 64.9 42.3 64.9 40.9" fill="#8C1D21"/></svg>
    </a></h1>

    <p class="menu-btn">
      <span class="l1"></span>
      <span class="l2"></span>
      <span class="l3"></span>
      <a href="#" class="wp-link">Close Navigation</a>
    </p>
  </header>
