<?php get_header(); ?>

<main class="main-sec">
    <div class="page-header text-center">
        <i class="page-header__icon" data-feather="alert-circle"></i>
        <h1 class="page-header__title">404</h1>
        <p class="page-header__text">Nothing is Found Here!</p>
    </div>
    <section class="page-content">
        <div class="gif-404 text-center">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/404.gif'; ?>" alt="404" title="404">
            <div class="home-link-404">
                <a href="<?php echo site_url('/') ?>" class="btn btn-main btn-c2a">Go Back to home <i data-feather="arrow-right"></i></a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>