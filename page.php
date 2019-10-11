<?php get_header(); ?>

<main class="main-sec">
    <?php while (have_posts()) : the_post(); ?>
        <div class="page-header text-center">
            <i class="page-header__icon" data-feather="<?php if(get_field('page_icon')){
                echo get_field('page_icon');
            } else { echo 'info';}?>"></i>
            <h1 class="page-header__title"><?php the_title(); ?></h1>
            <p class="page-header__text"><?php echo get_field('page_info'); ?></p>
        </div>
        <section class="page-content">
            <div class=" container">
                <?php the_content(); ?>
            </div>
        </section>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>