<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

			<!-- Footer Start -->
			<?php if ( is_front_page() && is_home() ) {
			// Default homepage
				echo '<div id="footer">';
			} else {
				echo '<div id="footer" class="bg_footer">';
			}
			
			?>
				<div class="container">
					<div class="row">
						<!-- Blog Start -->
						<div class="col-sm-5 hidden-xs">
							<h3><?php echo do_shortcode('[sc name="BlogTitle"]'); ?></h3>
							<p><?php echo do_shortcode('[sc name="BlogDescription"]'); ?></p>

							<?php 
							// the query
							$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
							
							<?php if ( $wpb_all_query->have_posts() ) : ?>
							
								<ul class="blog_list">
								
									<!-- the loop -->
									<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
									<?php $categories = get_the_category(); ?>
										<li>
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>&nbsp;|&nbsp;
											<a href="<?php the_permalink($categories[0]->ID); ?>"><?php echo $categories[0]->name; ?></a>
											<i><?php echo get_the_date( 'F j, Y', $post->ID ); ?></i>
										</li>
									<?php endwhile; ?>
									<!-- end of the loop -->
								
								</ul>
								<?php wp_reset_postdata(); ?>
							
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
						</div>
						<!-- Blog end -->

						<!-- Site link Start -->
						<div class="col-sm-4">
							<h3>Site Links</h3>
							<?php
								wp_nav_menu( array(
									'menu' => '4',
									'menu_class'     => 'site_link',
									'depth'          => 7
								));
							?>
						</div>
						<!-- Site link End -->

						<!-- Contact Start -->
						<div class="col-sm-3">
							<h3>Contact Us</h3>

							<span class="fa fnt_icn fa-map-marker"></span> 
							<p class="left"><?php echo do_shortcode('[sc name="address"]'); ?></p>

							<br class="clear">
							<br>

							<span class="fnt_icn fa fa-phone"></span> 
							<span class="phone_no_ftr"><?php echo do_shortcode('[sc name="phone"]'); ?></span>
							<br class="clear">
							<br>

							<span class="fnt_icn fa fa-envelope"></span> 
							<a href="mailto: <?php echo do_shortcode('[sc name=\'email\']'); ?>" class="email_ftr"><?php echo do_shortcode('[sc name="email"]'); ?></a>

						</div>
						<!-- Contact End -->
					</div>
				</div>


				<!-- Copyright Text Start -->
				<div class="footer_btm">
					<div class="container">

						<div class="row">
							<?php echo date('Y'); ?> © Site Name . ALL Rights Reserved. <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a> | <a href="<?php echo esc_url( home_url( '/terms-of-services/' ) ); ?>">Terms of Service</a>

							<div class="ss_box">
								<a href="<?php echo do_shortcode('[sc name=\'fburl\']'); ?>"><span class="fa fa-facebook-square"></span></a>
								<a href="<?php echo do_shortcode('[sc name=\'twitterurl\']'); ?>"><span class="fa fa-twitter-square"></span></a>
								<a href="<?php echo do_shortcode('[sc name=\'linkedinurl\']'); ?>"><span class="fa fa-linkedin-square"></span></a>
								<a href="<?php echo do_shortcode('[sc name=\'gplusurl\']'); ?>"><span class="fa fa-google-plus-square"></span></a>
							</div>
						</div>

					</div>
				</div>
				<!-- Copyright Text End -->
			</div>
			<!-- Footer End -->
		</div>
	</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		

	$(window).resize(function() {
		setTimeout(function(){   				
			var header_hght = $("#header").height();
			$("#main_container").css("padding-top",header_hght); 
			}, 500);

	});
		
		$(window).resize();

	
	function resizeHeaderOnScroll() {
		const distanceY = window.pageYOffset || document.documentElement.scrollTop,
		shrinkOn = 200,
		headerEl = document.getElementById('header');

		if (distanceY > shrinkOn) {
			headerEl.classList.add("sticky");
		} else {
			headerEl.classList.remove("sticky");
		}
	}

	window.addEventListener('scroll', resizeHeaderOnScroll);
});
</script>

<?php wp_footer(); ?>

</body>
</html>
