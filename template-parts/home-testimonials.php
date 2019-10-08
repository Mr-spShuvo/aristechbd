<section class="testimonials-sec">
    <div class="container">
        <!-- Testimonials Header Section -->
        <div class="sec-box">
            <h2 class="sec-box__title"> <span class="text-grad">Testimonials</span> <i data-feather="minus"></i> What Our Clients Say</h2>
            <p class="sec-box__content">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Nemo a asperiores dolores ex ab soluta, dolore delectus qui sequi
                totam commodi iste voluptatibus? Quaerat doloribus expedita quia atque et
                itaque.</p>
            <hr class="divider divider-main">
        </div>

        <div id="testimonialsSec" class="carousel slide" data-ride="carousel">
            <?php $count = 0;

            $testimonials = new WP_Query(
                array(
                    'posts_per_page' =>  -1,
                    'post_type' => 'testimonials',
                    'orderby' => 'date',
                    'order' => 'DESC'
                )
            );
            ?>
            <ol class="carousel-indicators">
                <?php
                while ($testimonials->have_posts()) :
                    $testimonials->the_post(); ?>
                    <li data-target="#testimonialsSec" 
                    data-slide-to="<?php echo $count; ?>" class="<?php if ($count == 0) {
                       echo "active";} $count++; ?>"></li>
                <?php endwhile;?>
            </ol>

            <div class="carousel-inner">
                <?php
                $count = 0;
                while ($testimonials->have_posts()) :
                    $testimonials->the_post();
                    ?>
                    <div class="carousel-item 
                        <?php 
                        if ($count == 0) { echo "active"; }
                        $count++; ?>">
                        <div class="testimonials-box d-block">
                            <i class="testimonials-box__icon" data-feather="award"></i>
                            <p class="testimonials-box__content">
                                <?php the_field('testimonial_author_msg'); ?>
                            </p>
                            <div class="testimonials-box__author">
                                <img class="testimonials-box__img" src="<?php echo get_field('testimonial_author_img'); ?>" alt="">
                                <div>
                                    <h4 class="testimonials-box__title"><?php the_field('testimonial_author_name'); ?></h4>
                                    <p class="testimonials-box__designation"><?php the_field('testimonial_author_designation'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_query(  );?>
            </div>

            <a class="carousel-control-prev" href="#testimonialsSec" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonialsSec" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>