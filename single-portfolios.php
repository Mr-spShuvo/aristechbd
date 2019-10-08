<?php get_header(); ?>


<main class="main-sec">

    <?php

    while (have_posts()) :
        the_post();
        ?>
        <div class="portfolio-single__header">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="portfolio-single__meta">
                    <h1 class="page-header__title"><?php the_field('portfolio_title'); ?></h1>

                    <p class="p-meta">
                        <i data-feather="tag"></i> Services:
                        <span class="p-meta-info"> <?php the_field('portfolio_types'); ?></span> |

                        <?php if (get_field('portfolio_cost')) : ?>
                            <i data-feather="credit-card"></i> Cost:
                            <span class="p-meta-info"><?php the_field('portfolio_cost'); ?></span>
                        <?php endif; ?> |

                        <?php if (get_field('portfolio_time')) : ?>
                            <i data-feather="clock"></i> Time:
                            <span class="p-meta-info"><?php the_field('portfolio_time'); ?> hr(s)</span>
                        <?php endif; ?>

                        <?php if (get_field('portfolio_rate') != 0) : ?>
                            <i data-feather="star"></i> Rate:
                            <span class="p-meta-info"><?php the_field('portfolio_rate'); ?></span>/5
                        <?php endif; ?>
                    </p>

                    <a class="btn btn-main" href="<?php echo site_url('/#services'); ?>">View Sevices<i class="ic" data-feather="arrow-right"></i></a>
                </div>
                <div class="portfolio-single__icon">
                    <i data-feather="package"></i>
                </div>
            </div>
        </div>

        <section class="portfolio-single__content">
            <div class="container">
                <div class="portfolio-single__thumb">
                    <img src="<?php echo get_field('portfolio_img'); ?>" alt="" srcset="">
                </div>

                <div class="portfolio-single__text">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>

    <?php endwhile;
    wp_reset_query(); ?>

    <div class="portfolio-single__contact text-center mb-5">
        <a class="btn btn-main" href="<?php echo site_url('/contact'); ?>">Contact Now <i class="ic" data-feather="arrow-right"></i></a>
    </div>

</main>

<?php get_footer(); ?>