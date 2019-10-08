<?php get_header(); ?>

<main class="main-sec">
    <section class="blog-single">
        <?php while (have_posts()) : the_post(); ?>

            <?php if (has_post_thumbnail()) : ?>
                <div class="single__img" style="background-image: linear-gradient(to bottom, #1d435480, #41a00080), 
                    url('<?php the_post_thumbnail_url(); ?>');">
                </div>
            <?php else : ?>
                <div class="single__img"></div>
            <?php endif; ?>

            <div class="container">
                <div class="single-box__meta">
                    <h1 class="single-box__title"><?php the_title(); ?></h1>
                    <p><?php the_date('M d, Y') ?></p>
                </div>

                <div class="single-box__content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </section>

</main>

<?php get_footer(); ?>