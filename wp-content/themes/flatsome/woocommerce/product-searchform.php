<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

?>
<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<div class="flex-row relative">
			<?php
				$placeholder = __( 'Search', 'woocommerce' ).'&hellip;';
				if(get_theme_mod('search_placeholder')) $placeholder = get_theme_mod('search_placeholder');
			?>
			<div class="flex-col flex-grow">
			  <input type="search" class="search-field mb-0" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php echo $placeholder; ?>" />
		    <input type="hidden" name="post_type" value="product" />
        <?php if ( defined( 'ICL_LANGUAGE_CODE' ) ): ?>
            <input type="hidden" name="lang" value="<?php echo( ICL_LANGUAGE_CODE ); ?>" />
        <?php endif ?>
			</div><!-- .flex-col -->
			<div class="flex-col">
				<button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
					<?php echo get_flatsome_icon('icon-search'); ?>
				</button>
			</div><!-- .flex-col -->
		</div><!-- .flex-row -->
	 <div class="live-search-results text-left z-top"></div>
</form>
