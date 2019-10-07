<?php get_header(); ?>

<section class="hero">
    <div class="hero-content">
        <video class="hero-vid" autoplay loop>
            <source src="<?php echo get_template_directory_uri().'/assets/vid/hero-bg.mp4'; ?>" type="video/mp4">
            <img src="<?php echo get_template_directory_uri().'/assets/vid/hero-bg.jpg'; ?>" title="Your browser does not support the video.">
        </video>
        <div id="video-overlays"></div>
        <div class="hero-box">
            <h1 class="hero-box__title">We Deliver Leads</h1>
            <p class="hero-box__content">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Quas doloribus culpa itaque praesentium minima error provident ullam
                soluta, placeat corrupti incidunt debitis architecto nostrum impedit?</p>
            <a class="hero-box__c2a btn btn-main btn-c2a" href="#">Browse Portfolio <i class="ic" data-feather="arrow-right"></i></a>
        </div>
    </div>
</section>

<main class="main-sec">
    <section class="services" id="services">
        <div class="container">
            <div class="sec-box">
                <h2 class="sec-box__title"> <span class="text-grad">Services</span> <i data-feather="minus"></i> We Offer</h2>
                <p class="sec-box__content">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Nemo a asperiores dolores ex ab soluta, dolore delectus qui sequi
                    totam commodi iste voluptatibus? Quaerat doloribus expedita quia atque et
                    itaque.</p>
                <hr class="divider divider-main">
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                    <div class="service-box">
                        <div class="service-box__icon">
                            <i data-feather="briefcase"></i>
                        </div>
                        <h3 class="service-box__title">Sales & Marketing</h3>
                        <p class="service-box__description">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Saepe vitae doloribus facilis magnam
                            dolores, tenetur veniam soluta neque ea quis.</p>
                        <a class="service-box__link" href="../static/services.html">Learn More
                            <i data-feather="arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                    <div class="service-box">
                        <div class="service-box__icon">
                            <i data-feather="users"></i>
                        </div>
                        <h3 class="service-box__title">Lead Generation</h3>
                        <p class="service-box__description">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Saepe vitae doloribus facilis magnam
                            dolores, tenetur veniam soluta neque ea quis.</p>
                        <a class="service-box__link" href="#">Learn More <i data-feather="arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                    <div class="service-box">
                        <div class="service-box__icon">
                            <i data-feather="chrome"></i>
                        </div>
                        <h3 class="service-box__title">Online Research</h3>
                        <p class="service-box__description">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Saepe vitae doloribus facilis magnam
                            dolores, tenetur veniam soluta neque ea quis.</p>
                        <a class="service-box__link" href="#">Learn More <i data-feather="arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                    <div class="service-box">
                        <div class="service-box__icon">
                            <i data-feather="life-buoy"></i>
                        </div>
                        <h3 class="service-box__title">Admin Support</h3>
                        <p class="service-box__description">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Saepe vitae doloribus facilis magnam
                            dolores, tenetur veniam soluta neque ea quis.</p>
                        <a class="service-box__link" href="#">Learn More <i data-feather="arrow-right"></i></a>
                    </div>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                    <div class="service-box">
                        <div class="service-box__icon">
                            <i data-feather="headphones"></i>
                        </div>
                        <h3 class="service-box__title">Virtual Assistant</h3>
                        <p class="service-box__description">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Saepe vitae doloribus facilis magnam
                            dolores, tenetur veniam soluta neque ea quis.</p>
                        <a class="service-box__link" href="#">Learn More <i data-feather="arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                    <div class="service-box">
                        <div class="service-box__icon">
                            <i data-feather="printer"></i>
                        </div>
                        <h3 class="service-box__title">Data Entry</h3>
                        <p class="service-box__description">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Saepe vitae doloribus facilis magnam
                            dolores, tenetur veniam soluta neque ea quis.</p>
                        <a class="service-box__link" href="#">Learn More <i data-feather="arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brands">
        <div class="container">
            <!-- Testimonials Header Section -->
            <div class="sec-box">
                <h2 class="sec-box__title"> <span class="text-grad">Upwork Agencies</span> <i data-feather="minus"></i> We Operate</h2>
                <p class="sec-box__content">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Nemo a asperiores dolores ex ab soluta, dolore delectus qui sequi
                    totam commodi iste voluptatibus? Quaerat doloribus expedita quia atque et
                    itaque.</p>
                <hr class="divider divider-main">
                <div class="container">
                    <div class="row">
                        <div class="col-sm mb-5">
                            <div class="brand-box">
                                <a class="brand-box__link" href="https://www.upwork.com/o/companies/~010ce9dc1d64f66af6" target="_blank">
                                    <div class="brand-box__image" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/brand-1.png'; ?>);">
                                    </div>
                                    <p class="brand-box__learn">Learn More <i class="ic" data-feather="arrow-right"></i></p>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm mb-5">
                            <div class="brand-box">
                                <a class="brand-box__link" href="https://www.upwork.com/o/companies/~01c3b3047a7e58e378" target="_blank">
                                    <div class="brand-box__image" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/brand-2.png'; ?>);">
                                    </div>
                                    <p class="brand-box__learn">Learn More <i class="ic" data-feather="arrow-right"></i></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why">
        <div class="container">
            <div class="sec-box">
                <h2 class="sec-box__title"> <span class="text-grad">Why Us</span> <i data-feather="minus"></i> Best Solutions</h2>
                <p class="sec-box__content">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Nemo a asperiores dolores ex ab soluta, dolore delectus qui sequi
                    totam commodi iste voluptatibus? Quaerat doloribus expedita quia atque et
                    itaque.</p>
                <hr class="divider divider-main">
            </div>


            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="why-box">
                        <div class="why-box__icon why-box__icon-1">
                            <i data-feather="star"></i>
                        </div>
                        <h3 class="why-box__title">WE DELIVER THE BEST</h3>
                        <p class="why-box__description">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Saepe vitae doloribus facilis magnam
                            dolores, tenetur veniam soluta neque ea quis.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="why-box">
                        <div class="why-box__icon why-box__icon-2">
                            <i data-feather="users"></i>
                        </div>
                        <h3 class="why-box__title">HIGHLY DEDICATED TEAM</h3>
                        <p class="why-box__description">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Saepe vitae doloribus facilis magnam
                            dolores, tenetur veniam soluta neque ea quis.</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="why-box">
                        <div class="why-box__icon why-box__icon-3">
                            <i data-feather="zap"></i>
                        </div>
                        <h3 class="why-box__title">QUICK TURN AROUND</h3>
                        <p class="why-box__description">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Saepe vitae doloribus facilis magnam
                            dolores, tenetur veniam soluta neque ea quis.</p>
                    </div>

                </div>


                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="why-box">
                        <div class="why-box__icon why-box__icon-4">
                            <i data-feather="rotate-cw"></i>
                        </div>
                        <h3 class="why-box__title">UNLIMITED REVISIONS</h3>
                        <p class="why-box__description">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Saepe vitae doloribus facilis magnam
                            dolores, tenetur veniam soluta neque ea quis.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="why-box">
                        <div class="why-box__icon why-box__icon-5">
                            <i data-feather="clock"></i>
                        </div>
                        <h3 class="why-box__title">24/7 SERVICES</h3>
                        <p class="why-box__description">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Saepe vitae doloribus facilis magnam
                            dolores, tenetur veniam soluta neque ea quis.</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="why-box">
                        <div class="why-box__icon why-box__icon-6">
                            <i data-feather="help-circle"></i>
                        </div>
                        <h3 class="why-box__title">24/7 Customer Support</h3>
                        <p class="why-box__description">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Saepe vitae doloribus facilis magnam
                            dolores, tenetur veniam soluta neque ea quis.</p>
                    </div>

                </div>

            </div>
        </div>
        </div>

        </div>
    </section>

    <!-- Overview -->
    <div class="container">
        <section class="overview">
            <h2 class="overview__heading"><span class="text-grad">ArisTech</span> <i data-feather="minus"></i> at A Glance
            </h2>
            <div class="container">
                <div class="row">
                    <div class="col-sm mb-2">
                        <div class="overview__icon">
                            <i class="lead" data-feather="users"></i>
                        </div>
                        <h3 class="overview__title">95k+</h3>
                        <p class="overview__description">Lead Genarated</p>
                    </div>
                    <div class="col-sm mb-2">
                        <div class="overview__icon">
                            <i class="hour" data-feather="clock"></i>
                        </div>
                        <h3 class="overview__title">1400+</h3>
                        <p class="overview__description">Hours's Working</p>
                    </div>
                    <div class="col-sm mb-2">
                        <div class="overview__icon">
                            <i class="job" data-feather="check-circle"></i>
                        </div>
                        <h3 class="overview__title">150+</h3>
                        <p class="overview__description">Jobs Completed</p>
                    </div>
                    <div class="col-sm mb-2">
                        <div class="overview__icon">
                            <i class="coffee" data-feather="coffee"></i>
                        </div>
                        <h3 class="overview__title">1000+</h3>
                        <p class="overview__description">Coffee Cup</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="overview-path"></div>

    <!-- -->
    <?php get_template_part( 'template-parts/home', 'testimonials' ) ?>
    
    <section class="portfolio-c2a">
        <div class="container">
            <div class="row portfolio-box">
                <div class="col-md-2 portfolio-box__icon text-center">
                    <i data-feather="zap" class="portfolio-box__icon"></i>
                </div>

                <div class="col-md-7 portfolio-box__content">
                    <h3 class="text-grad">Supported with Care</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eius
                        doloribus itaque laboriosam, eum cumque ipsa enim cum ea voluptatem
                        sint.</p>
                </div>
                <div class="col-md-3 portfolio-box__link text-center">
                    <a class=" btn btn-sub btn-c2a" href="<?php echo site_url('/portfolio'); ?>">View Portfolio <i class="ic" data-feather="arrow-right"></i></a>
                </div>

            </div>
        </div>
        <div class="portfolio-path"></div>
    </section>
</main>

<?php get_footer(); ?>