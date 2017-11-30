<?php
/**
 * Single Product Meta
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package     FloraPosidoniaStorefront/Templates
 * @version     3.0.0
 *
 * This version string is the version of the template shipped with WooCommerce;
 * this template file's `@version` value should always be identical to the file
 * located at wp-content/plugins/woocommerce/templates/single-product/meta.php.
 * It is not intended to match the version of this theme package.
 *
 * To observe all changes made from the WooCommerce default and our theme, use:
 *
 *     cd wp-content # Go to the `wp-content` folder in the WordPress root.
 *     # View a difference between WooCommerce's template and our own file.
 *     diff plugins/woocommerce/templates/single-product/meta.php themes/flora-posidonia-storefront/woocommerce/single-product/meta.php
 *
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Ingredient:', 'Ingredients:', count( $product->get_tag_ids() ), 'flora-posidonia-storefront' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
