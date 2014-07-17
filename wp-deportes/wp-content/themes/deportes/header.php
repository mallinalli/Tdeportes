<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <?php if( is_single() ){ ?>
          <title><?php wp_title(''); ?> | <?php echo get_bloginfo('name'); ?></title>
          <meta name="description" content="<?php wp_title(''); ?>">
          <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID, 'nota-large') ); ?>
          <meta name="og:image" content="<?php echo $url[0] ?>">
        <?php }else{ ?>
          <title><?php echo get_bloginfo('name'); ?></title>
          <meta name="description" content="Micrositio para el Mundial Brasil 2014, por Tribuna Comunicación&reg;">
          <meta name="og:image" content="<?php echo get_template_directory_uri(); ?>/img/logo.jpg">
        <?php } ?>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta name="keywords" content="Brasil, Mundial, Futbol, Soccer, México, Selección, Periódico Digital, Tribuna Comunicación">

        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" sizes="32x32" type="image/png">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    </head>
    <body>
      <?php
        /*Ifs para banners*/

        if ( is_home() ) {
          echo '<span style="color:#ECEFEF;">h</span>';
        }
        if ( is_single() ) {
          echo '<span style="color:#ECEFEF;">n</span>';
        }
        if ( is_page() ) {
          echo '<span style="color:#ECEFEF;">s</span>';
        }
        
      ?>
        <!--[if lt IE 9]>
            <p class="chromeframe"><h2 style="background-color: #FF5050; color: #fff; padding: 5px 0;">Estás utilizando un navegador <strong>desactualizado</strong>. <a href="http://browsehappy.com/" style="color: #6699FF;">Actualiza tu navegador</h2></a></p>
        <![endif]-->
      <header class="main-header">
        <div class="contenedor logo">
          <a href="<?php echo home_url(); ?>"></a>
        </div>
        <div class="contenedor menu">
          <div class="navhead clearfix">
            <div class="menubutton">
              <a href="#"><i class="icon-reorder"></i>&nbsp;</a>
            </div> 
          </div>
          <ul class="navegacion">
            <li><a href="<?php echo home_url(); ?>">Inicio</a></li>
            <li><a href="<?php echo home_url(); ?>/futbol">Futbol</a></li>
            <li><a href="<?php echo home_url(); ?>/beisbol">Beisbol</a></li>
            <li class="spacer"></li>
            <li><a href="<?php echo home_url(); ?>/local">Local</a></li>
            <li><a href="<?php echo home_url(); ?>/otros-deportes">Otros Deportes</a></li>
            <li><a href="<?php echo home_url(); ?>/calendario">Calendario</a></li>
            
          </ul>
        </div>
      </header>
      <div class="contenedor clearfix">
        <div class="top-banner">
            <!--/* Publicidad */-->
            <!--/* Revive Adserver Javascript Tag v3.0.4 */-->

            <script type='text/javascript'><!--//<![CDATA[
               var m3_u = (location.protocol=='https:'?'https://www.bnrspd.dreamhosters.com/revive/www/delivery/ajs.php':'http://www.bnrspd.dreamhosters.com/revive/www/delivery/ajs.php');
               var m3_r = Math.floor(Math.random()*99999999999);
               if (!document.MAX_used) document.MAX_used = ',';
               document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
               document.write ("?zoneid=31");
               document.write ('&amp;cb=' + m3_r);
               if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
               document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
               document.write ("&amp;loc=" + escape(window.location));
               if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
               if (document.context) document.write ("&context=" + escape(document.context));
               if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
               document.write ("'><\/scr"+"ipt>");
            //]]>--></script><noscript><a href='http://www.bnrspd.dreamhosters.com/revive/www/delivery/ck.php?n=a44cf116&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://www.bnrspd.dreamhosters.com/revive/www/delivery/avw.php?zoneid=31&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a44cf116' border='0' alt='' /></a></noscript>

          
        </div>
