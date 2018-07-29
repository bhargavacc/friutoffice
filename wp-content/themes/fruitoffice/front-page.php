<?php
/**
 * Template Name: Frontpage
 * The front page template file
 */

get_header(); ?>

    <div id="main_container">
        <!-- Banner Start -->
        <div class="banner_outer">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php echo do_shortcode('[cycloneslider id="homepage-slider"]'); ?>
                </div>
            </div>
        </div>
        <!-- Banner End -->
    </div>
    <?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); ?>
    <!-- About Us Start -->
    <div class="container">
        <div class="col-sm-8 flt_none center-block text-center">
            <h1><?php the_field('sub_title'); ?></h1>
            <p><?php the_content(); ?></p>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Process Start -->
    <div class="bg_process">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 flt_none center-block">
                    <h1>How it works</h1>
                    <!-- Order Box Start -->
                    <div class="prcs_box_outer">
                        <div class="icn_box"><img src="<?php the_field('image1'); ?>" alt=""></div>
                        <div class="process_text"><h2><?php the_field('text1'); ?></h2>
                        <p><?php the_field('description1'); ?></p>
                        </div>
                        <div class="line_green"></div>
                    </div>
                    <!-- Order Box End -->


                    <!-- deliver Box Start -->
                    <div class="prcs_box_outer pad_left100">
                        <div class="icn_box"><img src="<?php the_field('image2'); ?>" alt=""></div>
                        <div class="process_text"><h2><?php the_field('text2'); ?></h2>
                        <p><?php the_field('description2'); ?></p>
                        </div>
                        <div class="line_green right_line"></div>
                    </div>
                    <!-- deliver Box End -->

                    <!-- enjoy Box Start -->
                    <div class="prcs_box_outer">
                        <div class="icn_box"><img src="<?php the_field('image3'); ?>" alt=""></div>
                        <div class="process_text"><h2><?php the_field('text3'); ?></h2>
                        <p><?php the_field('description3'); ?></p>
                        </div>
                        <div class="line_green"></div>
                    </div>
                    <!-- enjoy Box End -->


                    <!-- collect Box Start -->
                    <div class="prcs_box_outer pad_left100">
                        <div class="icn_box"><img src="<?php the_field('image4'); ?>" alt=""></div>
                        <div class="process_text"><h2><?php the_field('text4'); ?></h2>
                        <p><?php the_field('description4'); ?></p>
                    </div>
                </div>
                <!-- collect Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Farm Box Start -->
<div class="bg_field">
    <div class="container">
        <div class="row">
            <!-- Ftuit Source Start -->
            <div class="col-sm-6">
                <div class="img_box">
                    <img src="<?php the_field('fs_image1'); ?>" alt="">
                </div>
                <div class="farm_text_cnt">
                    <h3><?php the_field('fs_title1'); ?></h3>
                    <p><?php the_field('fs_description1'); ?></p>
                </div>
            </div>
            <!-- Ftuit Source End -->

            <!-- Tree planting Start -->
            <div class="col-sm-6">
                <div class="img_box">
                    <img src="<?php the_field('fs_image2'); ?>" alt="">
                </div>
                <div class="farm_text_cnt"><h3><?php the_field('fs_title2'); ?></h3>
                    <p><?php the_field('fs_description2'); ?></p>
                </div>
            </div>
            <!-- Tree planting  Start -->
        </div>
    </div>

</div>
<!-- Farm Box End -->
    <?php	endwhile;
			endif;
			?>
    <!-- Process End -->
<?php get_footer();
