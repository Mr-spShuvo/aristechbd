<?php get_header(); ?>

<section class="hero">
    <div class="hero-content">
        <video class="hero-vid" autoplay loop playsinline muted>
            <source src="<?php echo get_template_directory_uri() . '/assets/vid/hero-bg.mp4'; ?>" type="video/mp4">
            <img src="<?php echo get_template_directory_uri() . '/assets/vid/hero-bg.jpg'; ?>" title="Your browser does not support the video.">
        </video>
        <div id="video-overlays"></div>
        <div class="hero-box">
            <h1 class="hero-box__title">We Deliver Leads</h1>
            <p class="hero-box__content">Before your workload becomes your burden, reach out to us. At ArisTech BD, we have all the skill-sets to handle all of your needs. Our virtual assistants will provide you with all the support to you become successful.</p>
            <a class="hero-box__c2a btn btn-main btn-c2a" href="<?php echo site_url('/portfolio'); ?>">Browse Portfolio <i class="ic" data-feather="arrow-right"></i></a>
        </div>
    </div>
</section>

<main class="main-sec">

    <section class="services" id="services">
        <div class="container">
            <div class="sec-box">
                <h2 class="sec-box__title"> <span class="text-grad">Services</span> <i data-feather="minus"></i> We Offer</h2>
                <p class="sec-box__content">
                    We're experts in identifying your challenges and designing the solutions to address them quickly. We are always keeping your business at the top of our minds. We can help you with disruptive innovation - a future with unlimited possibilities.</p>
                <hr class="divider divider-main">
            </div>
            <div class="row">

                <?php

                $services_data = new WP_Query(
                    array(
                        'posts_per_page' => 12,
                        'post_type' => 'services',
                        'order' => 'ASC',
                    )
                );

                while ($services_data->have_posts()) :
                    $services_data->the_post();
                    ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5 d-flex">
                        <div class="service-box">
                            <div class="service-box__icon">
                                <i data-feather="<?php echo get_field('services_icon'); ?>"></i>
                            </div>


                            <h1 class="service-box__title"><?php the_field('services_name') ?></h1>
                            <p class="service-box__text"><?php the_field('services_info') ?> </p>
                            <a class="service-box__link" href="<?php echo get_the_permalink(); ?>">Learn More
                                <i data-feather="arrow-right"></i></a>
                        </div>
                    </div>

                <?php endwhile;
                wp_reset_query(); ?>

            </div>
        </div>
    </section>

    <section class="brands">
        <div class="container">
            <!-- Testimonials Header Section -->
            <div class="sec-box">
                <h2 class="sec-box__title"> <span class="text-grad">Upwork Agencies</span> <i data-feather="minus"></i> We Operate</h2>
                <p class="sec-box__content"> We know the landscape, we know your market, and we understand the industry. We have been operating two different agencies on Upwork with a very high success rate. Hit the learn more button to see our profile. </p> <hr class="divider divider-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm mb-5">
                                <div class="brand-box">
                                    <a class="brand-box__link" href="https://www.upwork.com/o/companies/~010ce9dc1d64f66af6" target="_blank">
                                        <div class="brand-box__image" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/brand-1.png'; ?>);">
                                        </div>
                                        <p class="brand-box__learn">Learn More <i class="ic" data-feather="arrow-right"></i></p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm mb-5">
                                <div class="brand-box">
                                    <a class="brand-box__link" href="https://www.upwork.com/o/companies/~01c3b3047a7e58e378" target="_blank">
                                        <div class="brand-box__image" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/brand-2.png'; ?>);">
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
                <p class="sec-box__content">We provide a team of expert consultants that matches your priorities. Our team is working continuously on the project to bring out the results within the limited time frame and deliver the best for the money.</p>
                <hr class="divider divider-main">
            </div>


            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="why-box">
                        <div class="why-box__icon why-box__icon-1">
                            <i data-feather="star"></i>
                        </div>
                        <h3 class="why-box__title">WE DELIVER THE BEST</h3>
                        <p class="why-box__description">ArisTech BD is the secret weapon of successful businesses. We carefully review the task and assign them to the experts. As always, we focus on delivering the task on time and provide our customers with the best services and supports.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="why-box">
                        <div class="why-box__icon why-box__icon-2">
                            <i data-feather="users"></i>
                        </div>
                        <h3 class="why-box__title">HIGHLY DEDICATED TEAM</h3>
                        <p class="why-box__description">We have a strong team of consultants who have a wide range of skill-sets. Each of our experts has advanced knowledge and experience in their field of work. They are simply the best at what they do.</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="why-box">
                        <div class="why-box__icon why-box__icon-3">
                            <i data-feather="zap"></i>
                        </div>
                        <h3 class="why-box__title">QUICK TURN AROUND</h3>
                        <p class="why-box__description">Our consultant will devote their time and effort to performing the tasks on hand. We promise our clients of a quick turn around and deliver the best possible performance in record time than any other business out there.</p>
                    </div>

                </div>


                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="why-box">
                        <div class="why-box__icon why-box__icon-4">
                            <i data-feather="rotate-cw"></i>
                        </div>
                        <h3 class="why-box__title">UNLIMITED REVISIONS</h3>
                        <p class="why-box__description">We complete the tasks properly we've taken on our hands. Our team design highly innovative solutions and implement them to meet your goals within the timeline. We let our clients have unlimited revisions and modifications to make the task perfect until they are satisfied.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="why-box">
                        <div class="why-box__icon why-box__icon-5">
                            <i data-feather="clock"></i>
                        </div>
                        <h3 class="why-box__title">24/7 SERVICES</h3>
                        <p class="why-box__description">You can reach out to us any time, and our highly dedicated customer services team is always ready to deliver the best experiences. We meet our client’s needs and demands with our 24/7 customer services, in any time zone.</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="why-box">
                        <div class="why-box__icon why-box__icon-6">
                            <i data-feather="help-circle"></i>
                        </div>
                        <h3 class="why-box__title">24/7 Customer Support</h3>
                        <p class="why-box__description">We believe that satisfied customers are the best to grow the business. We provide 24/7 customer support for our clients, where you can discuss any work-related issues with the experts at any hour.</p>
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



    <?php get_template_part('template-parts/home', 'testimonials') ?>

    <section class="portfolio-c2a">
        <div class="container">
            <div class="row portfolio-box">
                <div class="col-md-2 portfolio-box__icon text-center">
                    <i data-feather="zap" class="portfolio-box__icon"></i>
                </div>

                <div class="col-md-7 portfolio-box__content">
                    <h3 class="text-grad">Supported with Care</h3>
                    <p>At ArisTech BD, our expertise and experience have helped hundreds of clients and companies to get their job done with satisfaction through our consultants' solutions. Throughout the years, we have established and sustained trusted partnerships with our clients.</p>
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