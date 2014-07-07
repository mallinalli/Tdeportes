<?php
/*
Template Name: seleccionPage
*/
?>
<?php get_header(); ?>
<div class="contenido">
  <div class="clearfix">
  	<h2 class="section-header">Selección Nacional</h2>
    <?php
      $br_seleccion_note_1  = get_option( 'pd_seleccion_note_1' );
      $br_seleccion_note_2  = get_option( 'pd_seleccion_note_2' );
      $br_seleccion_note_3  = get_option( 'pd_seleccion_note_3' );
      $br_seleccion_note_4  = get_option( 'pd_seleccion_note_4' );
      $br_seleccion_note_5  = get_option( 'pd_seleccion_note_5' );
      /*Extras:*/
      $br_seleccion_note_6  = get_option( 'pd_seleccion_note_6' );
      $br_seleccion_note_7  = get_option( 'pd_seleccion_note_7' );
      $br_seleccion_note_8  = get_option( 'pd_seleccion_note_8' );
      $br_seleccion_note_9  = get_option( 'pd_seleccion_note_9' );
    ?> 
  	<div class="principal clearfix">
      <a href="<?php echo get_permalink( $br_seleccion_note_1 ); ?>">
  	 	 <?php
        $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_seleccion_note_1), 'nota-large' ); 
       ?>
       <img src="<?php echo $img[0]; ?>">
  		  <p><?php echo get_the_title($br_seleccion_note_1); ?></p>
      </a>
  	</div>
    <div class="clearfix">
    	<div class="principales hlpr-mr">
        <a href="<?php echo get_permalink( $br_seleccion_note_2 ); ?>">
          <?php
            $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_seleccion_note_2), 'nota-small' ); 
          ?>
          <img src="<?php echo $img[0]; ?>" alt="#">
          <p class="elipseme"><?php echo get_the_title($br_seleccion_note_2); ?></p>
        </a>
      </div>
      <div class="principales hlpr-mr-t">
        <a href="<?php echo get_permalink( $br_seleccion_note_3 ); ?>">
          <?php
            $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_seleccion_note_3), 'nota-small' ); 
          ?>
          <img src="<?php echo $img[0]; ?>" alt="#">
          <p class="elipseme"><?php echo get_the_title($br_seleccion_note_3); ?></p>
        </a>
      </div>
      <div class="principales hlpr-mr">
        <a href="<?php echo get_permalink( $br_seleccion_note_4 ); ?>">
          <?php
            $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_seleccion_note_4), 'nota-small' ); 
          ?>
          <img src="<?php echo $img[0]; ?>" alt="#">
          <p class="elipseme"><?php echo get_the_title($br_seleccion_note_4); ?></p>
        </a>
      </div>
      <div class="principales">
        <a href="<?php echo get_permalink( $br_seleccion_note_5 ); ?>">
          <?php
            $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_seleccion_note_5), 'nota-small' ); 
          ?>
          <img src="<?php echo $img[0]; ?>" alt="#">
          <p class="elipseme"><?php echo get_the_title($br_seleccion_note_5); ?></p>
        </a>
      </div>
    </div>
    <?php /*Otra fila:*/ ?>
    <div class="clearfix">
      <div class="principales hlpr-mr">
        <a href="<?php echo get_permalink( $br_seleccion_note_6 ); ?>">
          <?php
            $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_seleccion_note_6), 'nota-small' ); 
          ?>
          <img src="<?php echo $img[0]; ?>" alt="#">
          <p class="elipseme"><?php echo get_the_title($br_seleccion_note_6); ?></p>
        </a>
      </div>
      <div class="principales hlpr-mr-t">
        <a href="<?php echo get_permalink( $br_seleccion_note_7 ); ?>">
          <?php
            $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_seleccion_note_7), 'nota-small' ); 
          ?>
          <img src="<?php echo $img[0]; ?>" alt="#">
          <p class="elipseme"><?php echo get_the_title($br_seleccion_note_7); ?></p>
        </a>
      </div>
      <div class="principales hlpr-mr">
        <a href="<?php echo get_permalink( $br_seleccion_note_8 ); ?>">
          <?php
            $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_seleccion_note_8), 'nota-small' ); 
          ?>
          <img src="<?php echo $img[0]; ?>" alt="#">
          <p class="elipseme"><?php echo get_the_title($br_seleccion_note_8); ?></p>
        </a>
      </div>
      <div class="principales">
        <a href="<?php echo get_permalink( $br_seleccion_note_9 ); ?>">
          <?php
            $img = wp_get_attachment_image_src( get_post_thumbnail_id($br_seleccion_note_9), 'nota-small' ); 
          ?>
          <img src="<?php echo $img[0]; ?>" alt="#">
          <p class="elipseme"><?php echo get_the_title($br_seleccion_note_9); ?></p>
        </a>
      </div>
    </div>
  </div>
  <div class="clearfix">
    <?php
      $displayed = array();
      $displayed[] = $br_seleccion_note_1;
      $displayed[] = $br_seleccion_note_2;
      $displayed[] = $br_seleccion_note_3;
      $displayed[] = $br_seleccion_note_4;
      $displayed[] = $br_seleccion_note_5;
      $displayed[] = $br_seleccion_note_6;
      $displayed[] = $br_seleccion_note_7;
      $displayed[] = $br_seleccion_note_8;
      $displayed[] = $br_seleccion_note_9;

      $args = array( 'numberposts' => '1', 'post_type' => 'post', 'post_status' => 'publish', 
              'exclude' => $displayed,
              'tax_query' => array(
                'relation' => 'AND',
                array(
                  'taxonomy' => 'category',
                  'field' => 'slug',
                  'terms' => 'seleccion-nacional',
                  'operator' => 'IN'
                ) ) 
              );
      $notas = wp_get_recent_posts( $args );
      foreach( $notas as $nota ){
    ?>
    <div class="nota-s clearfix">
      <a href="<?php echo get_permalink($nota["ID"]); ?>">
        <?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( $nota['ID'] ), 'nota-small' ); ?>
        <?php echo $img[0] ? '<img src="'.$img[0].'" alt="#">' : ''; ?>
        <div class="nota-r">
          <p><?php echo $nota["post_title"] ?></p>
          <p class="date"><?php echo date( 'd \d\e F \d\e Y', strtotime( $nota['post_date'] ) ); ?></p>
        </div>
      </a>
    </div>
    <?php 
      }
    ?>
  </div>
</div>
<?php get_footer(); ?>