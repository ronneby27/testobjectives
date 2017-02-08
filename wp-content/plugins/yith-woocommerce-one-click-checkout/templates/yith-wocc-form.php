<?php
/**
 * One-Click Checkout Template
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>

<div class="clear"></div>
<div class="yith-wocc-wrapper">

	<?php do_action( 'yith_wocc_before_one_click_button' ); ?>

			<input type="hidden" name="_yith_wocc_one_click" value />
			<button type="submit" class="yith-wocc-button button"><span class="button-label"><?php echo $label ?></span></button>

	<?php do_action( 'yith_wocc_after_one_click_button' ); ?>

</div>