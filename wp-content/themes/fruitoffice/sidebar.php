<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<!-- Right Part Start -->
<div class="col-md-3 col-sm-4 ">
	<div class="special_offer">Fruit delivery at Your Office
		<br>
		<a href="#" class="btn_order">Order Now</a>
	</div>

	<div class="contact_box">
		<h4>Contact Info</h4>
		<p><span class="fnt_icn fa fa-phone"></span> 
		<span class="phone_no_ftr"><?php echo do_shortcode('[sc name="phone"]'); ?></span></p>

		<p>
		<span class="fnt_icn fa fa-envelope"></span> 
		<a href="mailto:<?php echo do_shortcode('[sc name=\'email\']'); ?>" class="email_ftr"><?php echo do_shortcode('[sc name="email"]'); ?></a>
		</p>

		<p><span class="fnt_icn fa fa-fax"></span> 
		<span class="phone_no_ftr"><?php echo do_shortcode('[sc name="phone"]'); ?></span></p>


		<div class="service_contact">
		Customer Service and 
		Accounts helpline: 
		<span><?php echo do_shortcode('[sc name="phone"]'); ?></span>

	</div>



	</div>


</div>
<!-- Right Part End -->