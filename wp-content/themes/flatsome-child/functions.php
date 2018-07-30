<?php

add_filter( 'jpeg_quality', 'tp_jpeg_quality' );
function tp_jpeg_quality( $quality ) {
    $quality = 100;
    return $quality;
}

add_filter( 'woocommerce_product_tabs', 'woo_remove_tabs', 98 );
function woo_remove_tabs( $tabs ){      
  unset( $tabs['additional_information'] ); // Remove the additional information tab
     
  return $tabs;
 }

//Khởi tạo function cho shortcode
function san_pham_theo_danh_muc() {
   
    $vnkings = new WP_Query(array(
    'post_type'=>'product',
    'post_status'=>'publish',
    'tax_query' => array(
      array(
          'taxonomy' => 'product_cat',
          'field' => 'id',
          'terms' => '66'
      )
    ),
    'orderby' => 'ID',
    'order' => 'DESC',
    'posts_per_page'=> '5'));
    ob_start(); ?>


    <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
    <div class="list_sp col-md-3">
        <a class="image_sp" href="<?php the_permalink() ;?>"><?php the_post_thumbnail("medium",array( "title" => get_the_title(),"alt" => get_the_title() ));?></a>
        <h4 class="title_sp"><a href="<?php the_permalink() ;?>"><?php the_title() ;?></a></h4>
        <span class="price"><ins><span class="amount">Giá: <?php echo get_post_meta( get_the_ID(), '_regular_price', true ); ?></span></ins></span>
    </div>
    <?php endwhile ; wp_reset_query() ;?>
	<?php
        $result = ob_get_contents();
        ob_end_clean();
 
        return $result;
}

add_shortcode( 'san_pham_danh_muc', 'san_pham_theo_danh_muc' );