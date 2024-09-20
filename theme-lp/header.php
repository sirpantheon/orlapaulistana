<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orla Paulistana | Global Realty Brasil</title>
    <script src="<?php echo get_template_directory_uri(); ?>/js/device-detector.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?v=1.2.4_13082024">
  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/form-things.css?v=08082024e">
  <script src="<?php echo get_template_directory_uri(); ?>/js/form-things.js"></script>
  
    <link id="theme-style" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dia.css?v=08082024_final">
	
	<input type="hidden" id="theme-urls" data-day-css="<?php echo get_template_directory_uri(); ?>/css/dia.css?v=08082024_final" data-night-css="<?php echo get_template_directory_uri(); ?>/css/?v=08082024_final">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@100..900&family=Montserrat:ital,wght@0,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

<script>
        function isTouchDevice() {
            return 'ontouchstart' in window || navigator.maxTouchPoints > 0;
        }

        function isMobileDevice() {
            return /Mobi|Android|iPhone|iPad|iPod|Opera Mini|IEMobile|WPDesktop/.test(navigator.userAgent);
        }

        if (isTouchDevice() && isMobileDevice()) {
            document.write('<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/panoramica-move-mobile.css?v=2">');
            document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/panoramica-move-mobile.js?v=2"><\/script>');
        } else {
            document.write('<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/panoramica-move.css?v=2">');
            document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/panoramica-move.js?v=2"><\/script>');
        }
    </script>
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/menu-mobile.js"></script>
	
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M5L55M6MX5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M5L55M6MX5');
</script>
	<?php wp_head(); ?>
</head>
<body>
