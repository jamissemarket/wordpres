<?php
/**
 * Name: Product style 4
 * Slug: content-product-style-4
 **/

$args = isset( $args ) ? $args : null;
?>
<?php
remove_action( 'woocommerce_before_shop_loop_item_title', 'ecome_action_attributes', 20 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_rating', 10 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'ecome_woocommerce_group_flash', 10 );
add_action( 'ecome_function_shop_loop_item_quickview', 'ecome_action_attributes', 20 );
?>
    <div class="product-inner images">
        <div class="product-thumb">
			<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook.
			 *
			 * @hooked ecome_woocommerce_group_flash - 10
			 * @hooked ecome_template_loop_product_thumbnail - 10
			 * @hooked ecome_action_attributes - 20
			 */
			do_action( 'woocommerce_before_shop_loop_item_title', $args );
			?>
        </div>
        <div class="product-info equal-elem">
			<?php
			/**
			 * woocommerce_shop_loop_item_title hook.
			 *
			 * @hooked ecome_template_loop_product_title - 10
			 */
			do_action( 'woocommerce_shop_loop_item_title' );
			/**
			 * woocommerce_after_shop_loop_item_title hook.
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item_title' );
			?>
            <div class="variable-group">
				<?php do_action( 'ecome_function_shop_loop_item_quickview' ); ?>
            </div>
        </div>
        <div class="group-button">
            <div class="add-to-cart">
				<?php
				/**
				 * woocommerce_after_shop_loop_item hook.
				 *
				 * @removed woocommerce_template_loop_product_link_close - 5
				 * @hooked woocommerce_template_loop_add_to_cart - 10
				 */
				do_action( 'woocommerce_after_shop_loop_item' );
				?>
            </div>
			<?php
			do_action( 'ecome_function_shop_loop_item_wishlist' );
			do_action( 'ecome_function_shop_loop_item_compare' );
			?>
        </div>
    </div>
<?php
add_action( 'woocommerce_before_shop_loop_item_title', 'ecome_action_attributes', 20 );
add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_rating', 10 );
add_action( 'woocommerce_before_shop_loop_item_title', 'ecome_woocommerce_group_flash', 10 );
remove_action( 'ecome_function_shop_loop_item_quickview', 'ecome_action_attributes', 20 );