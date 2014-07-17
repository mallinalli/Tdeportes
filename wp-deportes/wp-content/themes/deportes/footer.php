        <aside class="lateral clearfix">
          <div class="widgets1 clearfix">
            <!--div class="cuenta hlpr-mr">
              <?php
                $test = date_create();
                /*Día - Mes - Año  Hora - Minuto - Segundo*/

                /*Comprueba la fecha futura más reciente*/
                function lasfechas(){
                  $counter = 0;
                  
                  $fechas = array('13-07-2014 21:00:00');
                  
                  $fechaActual = date_create();

                  $fechaOtra = date_create( $fechas[ $counter ] );

                  if ($fechaActual > $fechaOtra) {
                    $counter++;
                  }
                  
                  return $fechaOtra;
                }

                $anotherTest = lasfechas();
                $f1 = date_format($test,'Y-m-d  H:i:s');
                $f2 = date_format($anotherTest,'Y-m-d  H:i:s');
                
                $purinto = date_diff($test,$anotherTest);
              ?>
              <a href="http://brasil.periodicodigital.mx/seleccion-nacional/">Esto va a Google</a>
              <div class="count-title">Faltan:</div>
              <div class="clearfix">
                <div class="count-num"><span id="day"><?php echo $purinto->format('%a'); ?></span> días</div>
                <div class="count-num"><span id="hour"><?php echo $purinto->format('%h'); ?></span> horas</div>
                <div class="count-num"><span id="min"><?php echo $purinto->format('%i'); ?></span> min</div>
                <div class="count-num"><span id="sec"><?php echo $purinto->format('%s'); ?></span> seg</div>
              </div>
              <div class="count-foot">Para la final del Mundial</div>
              <input id="timer_sign" type="hidden" data-sign="<?php echo $purinto->format('%R'); ?>">
            </div-->
            <div class="complemento resultados">
              <h2 class="res-head">Últimos Resultados</h2>
              <div class="res-list">
                <ul>
                  <?php
                  $args = array( 'numberposts' => '10', 'post_type' => 'resultado', 'post_status' => 'publish' );
                  $resultados = wp_get_recent_posts( $args );
                  foreach( $resultados as $resultado ){
                  ?>
                  <li><strong><?php echo $resultado["post_title"] ?></strong></li>
                  <?php
                  }
                  ?>  
                </ul>
              </div>
              <h3 class="res-footer">  </h3>
            </div>
            <div class="aside-banner">
                <!--/* Publicidad */-->

              </div>
          </div>
          <div class="widgets2 clearfix">
            <div class="complemento twitter hlpr-mr">
              <h2>
                <a href="https://twitter.com/TribunaDeportes">
                  <i class="icon-twitter"></i> @TribunaDeportes
                </a>
              </h2>
              <div class="tweets-container">
                <?php /*Aquí entran los tuits*/ ?>
              </div>
              <a href="#" class="moretweets">Más...</a>
            </div>
            
            <div class="complemento audios">
              <h2 class="aud-head">Audios <a href="https://soundcloud.com/tribuna-deportes-oficial"><img src="<?php echo get_template_directory_uri(); ?>/img/propietary/soundcloud.png"></a></h2>
              <div class="audio-list">
                <?php /*Aquí entran los audios*/ ?>
              </div>
              <a href="" class="mastracks">Más...</a>
            </div>
          </div>
          <div class="widgets3 clearfix">
            <div class="complemento foto">
              <h2 class="foto-head">La Chica del Día</h2>
              <div class="fotoshow">
                <?php
                $args = array( 'numberposts' => '10', 'post_type' => 'chicadeldia', 'post_status' => 'publish' );
                $resultados = wp_get_recent_posts( $args );

                $chicaCont = 0;
                foreach( $resultados as $resultado ){
                    $img_big = wp_get_attachment_image_src( get_post_thumbnail_id( $resultado['ID'] ), 'image-resized' );
                    $img_thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $resultado['ID'] ), 'portrait-mode' );
                    if ( $chicaCont == 0 ) {
                ?>
                <a class="fancybox-thumbs" data-fancybox-group="chicadeldia" href="<?php echo $img_big[0]; ?>"><img src="<?php echo $img_thumb[0]; ?>" alt="Chica del Día"></a>
                <?php
                    } else { ?>
                <a style="display:none;" class="fancybox-thumbs" data-fancybox-group="chicadeldia" href="<?php echo $img_big[0]; ?>"><img src="<?php echo $img_thumb[0]; ?>" alt="Chica del Día"></a>
                <?php }
                $chicaCont++;
                  }
                ?>
              </div>
            </div>
            <div class="aside-banner">
              <!--/* Publicidad */-->
              
            </div>
          </div>
        </aside>
      </div>
      <footer class="main-footer">
        <div class="contenedor pie clearfix">
          <div id="tribuna"></div>
          <div class="logos clearfix">
            <div id="indetta"></div>
            <div id="exa"></div>
            <div id="lamejor"></div>
            <span class="hlpr-logo"></span>
            <div id="periodico"></div>
            <div id="canalpuebla"></div>
            <div id="radio"></div>
          </div>
          <p> Copyright &copy; 2011 TRIBUNA Comunicación, Sn. Martín Texmelucan no.68 Col. La Paz, Puebla, Mex. Tel. (222) 2328000</p>
        </div>
      </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>
        <script src="http://connect.soundcloud.com/sdk.js"></script>
        <script> 
        var themeURL = "<?php echo get_template_directory_uri(); ?>";
        </script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/actions.min.js"></script>
        <?php /*Elipsis*/ ?>
        <script src="<?php echo get_template_directory_uri(); ?>/plugins/elipsis/jquery.dotdotdot.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script>
          Modernizr.load([
            {
              test: window.matchMedia,
              nope: "<?php echo get_template_directory_uri(); ?>/js/media.match.min.js"
            },
            "<?php echo get_template_directory_uri(); ?>/js/enquire.min.js",
            "<?php echo get_template_directory_uri(); ?>/js/queries.min.js"
          ]);
        </script>

        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
        <!-- Add Thumbnail helper (this is optional) -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/plugins/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        <script>
          $(document).ready(function(){
            $('.fancybox-thumbs').fancybox({
              prevEffect : 'none',
              nextEffect : 'none',

              closeBtn  : true,
              arrows    : false,
              nextClick : true,

              helpers : {
                thumbs : {
                  width  : 50,
                  height : 50
                }
              }
            }); 
            $('.infogs').fancybox({
              fitToView: false,
              maxWidth: 100+'%'
            });
            $('#losgrupos').fancybox({
              fitToView: false,
              maxWidth: 90+'%'
            });
          });
        </script>

        <?php
          /*Include para el componente de twitter*/
          include('includes/twitter.php');
        ?>

        <?php /*Para videos de youtube en nota*/ ?>
        <script>
          $(document).ready(function(){
            $('.cuerponota').find('iframe').wrap('<center><div class="ytvideo"></div></center>');
          });
        </script>
        <?php /*Analytics*/ ?>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-50277207-2', 'periodicodigital.mx');
          ga('send', 'pageview');

        </script>
    </body>
</html>