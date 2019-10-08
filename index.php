<?php get_header(); ?>

<main class="main-sec">
    <div class="page-header text-center">
        <i class="page-header__icon" data-feather="edit-3"></i>
        <h1 class="page-header__title">Blog</h1>
        <p class="page-header__text">Read our latest blogs</p>
    </div>
    <section class="blogs">
        <div class="content-box">
            <?php while (have_posts()) : the_post(); ?>
                <article class="article-box">

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="article-box__img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"> </div>
                    <?php else : ?>
                        <div class="article-box__img"></div>
                    <?php endif; ?>

                    <div class="article-box__meta">
                        <span><?php the_date('M d, Y') ?></span>
                    </div>

                    <div class="article-box__content">
                        <a class="article-box__content-title" href="#">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <p class="article-box__content-excerpt">
                            <?php echo wp_trim_words(get_the_content(), 80); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-main article-box__content-link">Read More <i class="ic" data-feather="arrow-right"></i></a>
                    </div>
                </article>
            <?php endwhile; ?>


            <div class="pagination-box text-center m-auto">

                <?php
                $paginations_args = array(
                    'mid_size'           => 1,
                    'prev_text'          => _x('&laquo;', 'previous set of posts'),
                    'next_text'          => _x('&raquo;', 'next set of posts'),
                    'screen_reader_text' => __('Posts navigation'),
                );
                echo the_posts_pagination($paginations_args); ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>