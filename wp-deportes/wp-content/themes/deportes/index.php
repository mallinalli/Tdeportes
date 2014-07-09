<?php get_header(); ?>
				<div class="contenido">
          <div class="clearfix"> 
            <?php
            /*$pd_home_section_1  = get_option( 'pd_home_section_1' );*/
            $br_home_note_1  = get_option( 'pd_home_note_1' );
            $br_home_note_2  = get_option( 'pd_home_note_2' );
            $br_home_note_3  = get_option( 'pd_home_note_3' );
            $br_home_note_4  = get_option( 'pd_home_note_4' );
            $br_home_note_5  = get_option( 'pd_home_note_5' );
            /*Extra*/
            $br_home_note_6  = get_option( 'pd_home_note_6' );
            $br_home_note_7  = get_option( 'pd_home_note_7' );
            $br_home_note_8  = get_option( 'pd_home_note_8' );
            $br_home_note_9  = get_option( 'pd_home_note_9' );

            ?>           
            <div class="principal clearfix">
              <a href="<?php echo get_permalink( $br_home_note_1 ); ?>">
                <?php
                    $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_home_note_1), 'nota-large' ); 
                ?>
                <img src="<?php echo $img[0]; ?>" alt="#">
                <p> <?php echo get_the_title($br_home_note_1); ?></p>
              </a>
            </div>
            <div class="clearfix">
              <div class="principales hlpr-mr">
                <a href="<?php echo get_permalink( $br_home_note_2 ); ?>">
                  <?php
                      $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_home_note_2), 'nota-small' ); 
                  ?>
                  <img src="<?php echo $img[0]; ?>" alt="#">
                  <div class="category"><span>Categoría</span></div>
                  <p class="elipseme"> <?php echo get_the_title($br_home_note_2); ?></p>
                </a>
              </div>
              <div class="principales hlpr-mr-t">
                <a href="<?php echo get_permalink( $br_home_note_3 ); ?>">
                  <?php
                      $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_home_note_3), 'nota-small' ); 
                  ?>
                  <img src="<?php echo $img[0]; ?>" alt="#">
                  <div class="category"><span>Categoría</span></div>
                  <p class="elipseme"> <?php echo get_the_title($br_home_note_3); ?></p>
                </a>
              </div>
              <div class="principales">
                <a href="<?php echo get_permalink( $br_home_note_4 ); ?>">
                  <?php
                      $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_home_note_4), 'nota-small' ); 
                  ?>
                  <img src="<?php echo $img[0]; ?>" alt="#">
                  <div class="category"><span>Categoría</span></div>
                  <p class="elipseme"> <?php echo get_the_title($br_home_note_4); ?></p>
                </a>
              </div>
              
            </div>
            <?php /*Otra fila:*/ ?>
            <div class="clearfix">
              <div class="principales hlpr-mr">
                <a href="<?php echo get_permalink( $br_home_note_6 ); ?>">
                  <?php
                      $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_home_note_6), 'nota-small' ); 
                  ?>
                  <img src="<?php echo $img[0]; ?>" alt="#">
                  <div class="category"><span>Categoría</span></div>
                  <p class="elipseme"> <?php echo get_the_title($br_home_note_6); ?></p>
                </a>
              </div>
              <div class="principales hlpr-mr-t">
                <a href="<?php echo get_permalink( $br_home_note_7 ); ?>">
                  <?php
                      $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_home_note_7), 'nota-small' ); 
                  ?>
                  <img src="<?php echo $img[0]; ?>" alt="#">
                  <div class="category"><span>Categoría</span></div>
                  <p class="elipseme"> <?php echo get_the_title($br_home_note_7); ?></p>
                </a>
              </div>
              <div class="principales ">
                <a href="<?php echo get_permalink( $br_home_note_8 ); ?>">
                  <?php
                      $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_home_note_8), 'nota-small' ); 
                  ?>
                  <img src="<?php echo $img[0]; ?>" alt="#">
                  <div class="category"><span>Categoría</span></div>
                  <p class="elipseme"> <?php echo get_the_title($br_home_note_8); ?></p>
                </a>
              </div>
              
            </div>
            
          </div>
          <div class="medium-banner">
              <!--/* Revive Adserver Javascript Tag v3.0.4 */-->

              <script type='text/javascript'><!--//<![CDATA[
                 var m3_u = (location.protocol=='https:'?'https://www.bnrspd.dreamhosters.com/revive/www/delivery/ajs.php':'http://www.bnrspd.dreamhosters.com/revive/www/delivery/ajs.php');
                 var m3_r = Math.floor(Math.random()*99999999999);
                 if (!document.MAX_used) document.MAX_used = ',';
                 document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
                 document.write ("?zoneid=25");
                 document.write ('&amp;cb=' + m3_r);
                 if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
                 document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
                 document.write ("&amp;loc=" + escape(window.location));
                 if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
                 if (document.context) document.write ("&context=" + escape(document.context));
                 if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
                 document.write ("'><\/scr"+"ipt>");
              //]]>--></script><noscript><a href='http://www.bnrspd.dreamhosters.com/revive/www/delivery/ck.php?n=a96d6f1f&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://www.bnrspd.dreamhosters.com/revive/www/delivery/avw.php?zoneid=25&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a96d6f1f' border='0' alt='' /></a></noscript>

          </div>
          <div class="video-components clearfix">
            <!-- Componente de VIDEO, versión TABLET/ESCRITORIO -->
            <section class="desk-home-video-component">
              <div class="desk-actual-video"><!-- Este es el stage para el video --></div>
              <div class="desk-pull">
                <a href=""><i class="icon-angle-right"></i></a>
              </div>
              <div class="desk-video-menu-wrapper">
                <div class="video-menu-container clearfix">
                  <nav class="desk-video-menu">
                    <ul>
                      <li><header><i class="icon-youtube-play"></i> <span>Videos</span></header></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </section>
            <!-- Componente de VIDEO, versión MÓVIL -->
            <section class="home-video-component">
              <div class="actual-video"><!-- Este es el stage para el video --></div>

              <div class="video-menu-wrapper clearfix">
                <nav class="video-menu">
                  <ul>
                    <li><header><i class="icon-youtube-play"></i> <span>Videos</span></header></li>
                  </ul>
                </nav>
              </div>
              <div class="pull">
                <a href=""><i class="icon-angle-down"></i></a>
              </div>
            </section>
          </div>
          <div class="medium-banner">
            <!--/* Revive Adserver Javascript Tag v3.0.4 */-->

            <script type='text/javascript'><!--//<![CDATA[
               var m3_u = (location.protocol=='https:'?'https://www.bnrspd.dreamhosters.com/revive/www/delivery/ajs.php':'http://www.bnrspd.dreamhosters.com/revive/www/delivery/ajs.php');
               var m3_r = Math.floor(Math.random()*99999999999);
               if (!document.MAX_used) document.MAX_used = ',';
               document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
               document.write ("?zoneid=26");
               document.write ('&amp;cb=' + m3_r);
               if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
               document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
               document.write ("&amp;loc=" + escape(window.location));
               if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
               if (document.context) document.write ("&context=" + escape(document.context));
               if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
               document.write ("'><\/scr"+"ipt>");
            //]]>--></script><noscript><a href='http://www.bnrspd.dreamhosters.com/revive/www/delivery/ck.php?n=a37af09b&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://www.bnrspd.dreamhosters.com/revive/www/delivery/avw.php?zoneid=26&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a37af09b' border='0' alt='' /></a></noscript>

          </div>
        </div>
<?php get_footer(); ?>