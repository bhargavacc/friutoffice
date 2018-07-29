<?php foreach($slides as $slide): ?>
    <div class="item active">
        <img src="<?php echo $slide['image_url']; ?>" alt="<?php echo $slide['img_alt'];?>" title="<?php echo $slide['img_title'];?>">
        <div class="carousel-caption">
            <div class="col-sm-7">
                <?php if(!empty($slide['title'])) : ?>
                    <h3><?php echo $slide['title']; ?></h3>
                <?php endif; ?>
                <?php if(!empty($slide['description'])) : ?>
                    <p><?php echo $slide['description']; ?></p>
                <br>
                <?php endif; ?>
                <?php if ( '' != $slide['link'] ) : ?>
                    <a href="<?php echo $slide['link']; ?>" class="bnr_btn btn" >Start Ordering Now!</a><br>
                <br>
                <?php endif; ?>
                <span class="text-center">OR</span><br>
                <div class="bnr_phone">Call Us <span><?php echo do_shortcode('[sc name="phone"]'); ?></span></div>
            </div>
        </div>
    </div>
<?php endforeach; ?>