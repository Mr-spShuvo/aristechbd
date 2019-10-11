<?php get_header(); ?>

<main class="main-sec">
    <div class="page-header text-center">
        <i class="page-header__icon" data-feather="package"></i>
        <h1 class="page-header__title">Portfolio</h1>
        <p class="page-header__text">We Deliver Total Satisfaction</p>
    </div>

    <section class="portfolio">
        <div class="container">
            <div class="row flex-wrap">

                <?php
                    $portfolio = new WP_Query(
                        array(
                            'posts_per_page' => 15,
                            'post_type' => 'portfolios',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                        )
                    );

                    while ($portfolio->have_posts()) :
                        $portfolio->the_post();
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
                <?php endwhile;
                ?>
            </div>

            <div class="pagination-box text-center m-auto">
                <?php
                    $big = 999999999; // need an unlikely integer
                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                        'format' => '?paged=%#%',
                        'prev_text'          => _x('&laquo;', 'previous set of posts'),
                        'next_text'          => _x('&raquo;', 'next set of posts'),
                        'current' => max(1, get_query_var('paged')),
                        'total' => $portfolio->max_num_pages
                    ));

                    wp_reset_query();
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>