<?php get_header(); ?>

<main class="main-sec">

    <?php while (have_posts()) : the_post();
        $services_types = get_field('services_name');
        ?>
        <div class="services-header text-center">
            <i class="services-header__icon" data-feather="<?php echo get_field('services_icon'); ?>"></i>

            <h1 class="services-header__title"><?php the_field('services_name') ?></h1>
            <p class="services-header__text"><?php the_field('services_info') ?>
            </p>
        </div>
        <div class="services-header__path">
        </div>
        <div class="services-content">
            <div class="container looking-for">
                <div class="row align-items-center">

                    <div class="col-md-6 looking-for__header">
                        <h4 class="looking-for__title mb-4">Are You Looking For <br> <span class="text-grad"><?php the_field('services_name') ?></span> ?</h4>
                        <p class="looking-for__content text-justify pr-4"><?php the_field('services_why') ?></p>
                    </div>

                    <div class="col-md-6 pt-4 text-justify ">

                        <?php the_field('services_selling_points') ?>
                    </div>
                </div>
            </div>
            <div class="services-info container">
                <?php the_content() ?>
            </div>
        <?php endwhile; ?>
        <section class="portfolio pt-5">
            <h3 class="text-center text-grad">Recent works</h3>
            <hr class="divider divider-main">
            <div class="container">
                <div class="row flex-wrap">
                    <?php

                    $portfolio = new WP_Query(
                        array(
                            'posts_per_page' => 3,
                            'post_type' => 'portfolios',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                        )
                    );

                    while ($portfolio->have_posts()) :
                        $portfolio->the_post();

                        if (get_field('portfolio_types') == $services_types) :
                            ?>
                            <div class="col-md-6 col-lg-4 mb-3 d-flex">
                                <div class="card">
                                    <img src="<?php echo get_field('portfolio_img'); ?>" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_field('portfolio_title'); ?></h5>
                                        <p class="p-meta">
                                            <i data-feather="tag"></i> Services:
                                            <span class="p-meta-info"> <?php the_field('portfolio_types'); ?></span>

                                            <?php if (get_field('portfolio_cost')) : ?>
                                                <i data-feather="credit-card"></i> Cost:
                                                <span class="p-meta-info"><?php the_field('portfolio_cost'); ?></span>
                                            <?php endif; ?> <br>

                                            <?php if (get_field('portfolio_time')) : ?>
                                                <i data-feather="clock"></i> Time:
                                                <span class="p-meta-info"><?php the_field('portfolio_time'); ?> hr(s)</span>
                                            <?php endif; ?>

                                            <?php if (get_field('portfolio_rate') != 0) : ?>
                                                <i data-feather="star"></i> Rate:
                                                <span class="p-meta-info"><?php the_field('portfolio_rate'); ?></span>/5
                                            <?php endif; ?>
                                        </p>
                                        <p class="card-text text-justify"><?php the_field('portfolio_info'); ?></p>
                                        <div class="text-center m-3">
                                            <a href="<?php echo get_the_permalink() ?>" class="p-link">View Portfolio<i class="ic" data-feather="arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endif;
                    endwhile; ?>
                </div>
            </div>
        </section>

        <div class="portfolio-single__contact text-center mb-5">
            <a class="btn btn-main" href="<?php echo site_url('/contact') ?>">Contact Now <i class="ic" data-feather="arrow-right"></i></a>
        </div>
        </div>

</main>

<?php get_footer(); ?>