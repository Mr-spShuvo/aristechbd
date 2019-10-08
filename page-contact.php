<?php get_header(); ?>

<main class="main-sec contact-page">
    <div class="page-header text-center">
        <i class="page-header__icon" data-feather="mail"></i>
        <h1 class="page-header__title">Contact Us</h1>
        <p class="page-header__text">Read our latest blogs</p>
    </div>
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="contact-box">
                            <i data-feather="briefcase"></i>
                            <h3>Sales</h3>
                        </div>

                        <div class="card-body contact-box__info">
                            <span>
                                <i class="ic" data-feather="mail"></i> sales@aristechbd.com <br>
                                <i class="ic" data-feather="phone-call"></i> +088 01956 565656
                                <br>
                                <i class="ic" data-feather="video"></i> aristechbd.sales
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="contact-box">
                            <i data-feather="headphones"></i>
                            <h3>Customer Support</h3>
                        </div>

                        <div class="card-body contact-box__info">
                            <span>
                                <i class="ic" data-feather="mail"></i> support@aristechbd.com <br>
                                <i class="ic" data-feather="phone-call"></i> +088 01956 565656
                                <br>
                                <i class="ic" data-feather="video"></i> aristechbd.support
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="contact-box">
                            <i data-feather="map-pin"></i>
                            <h3>Office Address</h3>
                        </div>
                        <div class="card-body contact-box__info">
                            <span>1059/4/A, Bindu Britto Goli,
                                Jamtola Bazar, East Shewrapara,
                                Mirpur, Dhaka, Bangladesh - 1216</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="contact-form">
        <h2 class="text-center text-grad">Contact Form</h2>
        <hr class="divider divider-main">
        <div class="container">
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile;  ?>

        </div>
    </section>
</main>

<?php get_footer(); ?>