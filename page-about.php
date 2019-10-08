<?php get_header(); ?>

<main class="main-sec">
    <div class="page-header text-center">
        <i class="page-header__icon" data-feather="info"></i>
        <h1 class="page-header__title">About Us</h1>
        <p class="page-header__text">Read our latest blogs</p>
    </div>
    <section class="about-us">
        <div class="container">
            <div class="row">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-lg-8 about-us__content">

                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
                <div class="col-lg-4 text-center site-infobox align-self-baseline">
                    <img class="site-logo" src="<?php echo get_template_directory_uri() . '/assets/img/icon.png'; ?>" alt="site-logo">
                    <h2 class="text-grad">ArisTech</h2>
                    <ul class="footer-social">
                        <li><a target="_blank" href="https://www.facebook.com/aristechbd/" title="Facebook"><i data-feather="facebook"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/aristech-bd" title="LinkedIn"> <i data-feather="linkedin"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/AristechBD" title="Twitter"> <i data-feather="twitter"></i></a></li>
                        <li><a target="_blank" href="https://angel.co/company/aristechbd" title="Angel.co"><img src="<?php echo get_template_directory_uri() . '/assets/img/angelco.svg'; ?>" alt="" srcset=""></a></li>
                        <li><a target="_blank" href="https://www.crunchbase.com/organization/aristech-bd" title="Crunchbase"><img src="<?php echo get_template_directory_uri() . '/assets/img/cb.png'; ?>" alt="" srcset=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>