<?php get_header() ?>

<main class="main-sec">
    <div class="page-header text-center">
        <i class="page-header__icon" data-feather="users"></i>
        <h1 class="page-header__title">Our Team</h1>
        <p class="page-header__text">Learn about OUR TEAM Members</p>
    </div>

    <section class="team-content">
        <!-- Leadership & Core Team -->
        <div class="team-ceo" style="background-color: #fff">
            <h2 class="text-center text-grad">Leadership & Core Team</h2>
            <hr class="divider divider-main">

            <?php
            wp_reset_query();
            $team = new WP_Query(
                array(
                    'posts_per_page' =>  -1,
                    'post_type' => 'team',
                    'order' => 'ASC',
                )
            );
            while ($team->have_posts()) :
                $team->the_post();
                $team_num = get_field('employee_department')['value'];
                if ($team_num == 1) :
                    $core_pos = get_field('core_positions');

                    switch ($core_pos):
                        case 1:
                            ?>
                            <div class="p-5" style="background-color: #eee">
                                <div class="container ">
                                    <div class="row align-items-center justify-content-start">
                                        <div class="col-lg-2 team-ceo__img">
                                            <img src="<?php echo get_field('employee_img'); ?>" alt="">
                                        </div>
                                        <div class="col-lg-7 team-ceo__info">
                                            <h3><?php the_field('employee_name'); ?></h3>
                                            <h4><?php the_field('employee_designation'); ?></h4>
                                            <p><?php the_field('employee_info'); ?></p>
                                            <ul class="footer-social team-social">
                                                <li><a target="_blank" href="<?php the_field('employee_upwork'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/upwork.svg' ?>" alt="" srcset=""></a></li>
                                                <li><a target="_blank" href="<?php the_field('employee_slack'); ?>" title="Slack"> <i data-feather="slack"></i></a>
                                                </li>
                                                <li><a target="_blank" href="skype:<?php the_field('employee_skype'); ?>" title="Skype"> <i data-feather="video"></i></a>
                                                </li>
                                                <li><a target="_blank" href="<?php the_field('employee_facebook'); ?>" title="Facebook"><i data-feather="facebook"></i></a>
                                                </li>
                                                <li><a target="_blank" href="<?php the_field('employee_linkedin'); ?>" title="LinkedIn"> <i data-feather="linkedin"></i></a></li>
                                                <li><a target="_blank" href="<?php the_field('employee_twitter'); ?>" title="Twitter"> <i data-feather="twitter"></i></a></li>

                                                <li><a target="_blank" href="<?php the_field('employee_crunchbase'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/cb.png' ?>" alt="" srcset=""></a>
                                                </li>
                                                <li><a target="_blank" href="<?php the_field('employee_angelco'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/angelco.svg' ?>" alt="" srcset=""></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 team-ceo__msg">
                                            <a target="_blank" class="btn btn-sub" href="mailto:<?php echo get_field('core_email'); ?>">
                                                Send Message <i class="ic" data-feather="arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php break;
                                case 2:  ?>
                            <div class="bg-light team-ceo__reverse p-5">
                                <div class="container ">
                                    <div class="row align-items-center justify-content-start">
                                        <div class="col-lg-2 team-ceo__img order-3">
                                            <img src="<?php echo get_field('employee_img'); ?>" alt="">
                                        </div>
                                        <div class="col-lg-7 team-ceo__info order-2 justify-content-end text-right">
                                            <h3><?php the_field('employee_name'); ?></h3>
                                            <h4><?php the_field('employee_designation'); ?></h4>
                                            <p><?php the_field('employee_info'); ?></p>
                                            <ul class="footer-social team-social ml-auto">
                                                <li><a target="_blank" href="<?php the_field('employee_upwork'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/upwork.svg' ?>" alt="" srcset=""></a></li>
                                                <li><a target="_blank" href="<?php the_field('employee_facebook'); ?>" title="Facebook"><i data-feather="facebook"></i></a>
                                                </li>
                                                <li><a target="_blank" href="<?php the_field('employee_linkedin'); ?>" title="LinkedIn"> <i data-feather="linkedin"></i></a></li>
                                                <li><a target="_blank" href="<?php the_field('employee_twitter'); ?>" title="Twitter"> <i data-feather="twitter"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 team-ceo__msg order-1">
                                            <a target="_blank" class="btn btn-sub" href="mailto:<?php echo get_field('core_email'); ?>">
                                                Send Message <i class="ic" data-feather="arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        <?php break;
                                case 3: ?>
                            <div class=" p-5" style="background-color: #eee">
                                <div class="container ">
                                    <div class="row align-items-center justify-content-start">
                                        <div class="col-lg-2 team-ceo__img">
                                            <img src="<?php echo get_field('employee_img'); ?>" alt="">
                                        </div>
                                        <div class="col-lg-7 team-ceo__info">
                                            <h3><?php the_field('employee_name'); ?></h3>
                                            <h4><?php the_field('employee_designation'); ?></h4>
                                            <p><?php the_field('employee_info'); ?></p>
                                            <ul class="footer-social team-social">
                                                <li><a target="_blank" href="<?php the_field('employee_facebook'); ?>" title="Facebook"><i data-feather="facebook"></i></a>
                                                </li>
                                                <li><a target="_blank" href="<?php the_field('employee_linkedin'); ?>" title="LinkedIn"> <i data-feather="linkedin"></i></a></li>
                                                <li><a target="_blank" href="<?php the_field('employee_twitter'); ?>" title="Twitter"> <i data-feather="twitter"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 team-ceo__msg">
                                            <a target="_blank" class="btn btn-sub" href="mailto:<?php echo get_field('core_email'); ?>">
                                                Send Message <i class="ic" data-feather="arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        <?php break;
                                case 4: ?>
                            <div class="bg-light team-ceo__reverse p-5">
                                <div class="container ">
                                    <div class="row align-items-center justify-content-start">
                                        <div class="col-lg-2 team-ceo__img order-3">
                                            <img src="<?php echo get_field('employee_img'); ?>" alt="">
                                        </div>
                                        <div class="col-lg-7 team-ceo__info order-2 justify-content-end text-right">
                                            <h3><?php the_field('employee_name'); ?></h3>
                                            <h4><?php the_field('employee_designation'); ?></h4>
                                            <p><?php the_field('employee_info'); ?></p>
                                            <ul class="footer-social team-social ml-auto">
                                                <li><a target="_blank" href="<?php the_field('employee_facebook'); ?>" title="Facebook"><i data-feather="facebook"></i></a>
                                                </li>
                                                <li><a target="_blank" href="<?php the_field('employee_linkedin'); ?>" title="LinkedIn"> <i data-feather="linkedin"></i></a></li>
                                                <li><a target="_blank" href="<?php the_field('employee_twitter'); ?>" title="Twitter"> <i data-feather="twitter"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 team-ceo__msg order-1">
                                            <a target="_blank" class="btn btn-sub" href="mailto:<?php echo get_field('core_email'); ?>">
                                                Send Message <i class="ic" data-feather="arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php break;
                                default: ?>
                <?php break;
                    endswitch;
                endif;
            endwhile;
            wp_reset_query();
            ?>
        </div>

        <!-- Operations & Quality Assurance -->
        <div class="team-employee team-others mt-4">
            <h2 class="text-center text-grad">Operations & Quality Assurance</h2>
            <hr class="divider divider-main">
            <div class="container team-member">
                <div class="row justify-content-center m-auto">
                    <?php
                    $team = new WP_Query(
                        array(
                            'posts_per_page' =>  -1,
                            'post_type' => 'team',
                        )
                    );
                    while ($team->have_posts()) :
                        $team->the_post();
                        $team_num = get_field('employee_department')['value'];
                        if ($team_num == 6) :
                            ?>
                            <?php get_template_part('template-parts/team', 'employee') ?>
                        <?php endif; endwhile;
                    wp_reset_query(); ?>
                </div>
            </div>
        </div>


        <!-- Lead Generation Team -->
        <div class="team-employee team-others">
            <h2 class="text-center text-grad">Lead Generation Team</h2>
            <hr class="divider divider-main">
            <div class="container team-member">
                <div class="row justify-content-center m-auto">
                    <?php
                    $team = new WP_Query(
                        array(
                            'posts_per_page' =>  -1,
                            'post_type' => 'team',
                        )
                    );
                    while ($team->have_posts()) :
                        $team->the_post();
                        $team_num = get_field('employee_department')['value'];
                        if ($team_num == 3) :
                            ?>
                            <?php get_template_part('template-parts/team', 'employee') ?>
                        <?php endif;
                         endwhile;
                    wp_reset_query(); ?>
                </div>
            </div>
        </div>

        <!-- Web Research Team -->
        <div class="team-employee team-others">
            <h2 class="text-center text-grad">Web Research Team</h2>
            <hr class="divider divider-main">
            <div class="container team-member">
                <div class="row justify-content-center m-auto">
                    <?php
                    $team = new WP_Query(
                        array(
                            'posts_per_page' =>  -1,
                            'post_type' => 'team',
                        )
                    );
                    while ($team->have_posts()) :
                        $team->the_post();
                        $team_num = get_field('employee_department')['value'];
                        if ($team_num == 4) : ?>
                            <?php get_template_part('template-parts/team', 'employee') ?>
                        <?php endif; endwhile;
            wp_reset_query(); ?>
                </div>
            </div>
        </div>

        <!-- Administrative Support Team -->
        <div class="team-employee team-others">
            <h2 class="text-center text-grad">Administrative Support Team</h2>
            <hr class="divider divider-main">
            <div class="container team-member">
                <div class="row justify-content-center m-auto">
                    <?php
                    $team = new WP_Query(
                        array(
                            'posts_per_page' =>  -1,
                            'post_type' => 'team',
                        )
                    );
                    while ($team->have_posts()) :
                        $team->the_post();
                        $team_num = get_field('employee_department')['value'];
                        if ($team_num == 5) :
                            ?>
                            <?php get_template_part('template-parts/team', 'employee') ?>
                        <?php endif; endwhile;
                    wp_reset_query(); ?>
                </div>
            </div>
        </div>

        <!-- Design & Development Team -->
        <div class="team-employee team-others">
            <h2 class="text-center text-grad">Design & Development Team</h2>
            <hr class="divider divider-main">
            <div class="container team-member">
                <div class="row justify-content-center m-auto">
                    <?php
                    $team = new WP_Query(
                        array(
                            'posts_per_page' =>  -1,
                            'post_type' => 'team',
                        )
                    );
                    while ($team->have_posts()) :
                        $team->the_post();
                        $team_num = get_field('employee_department')['value'];
                        if ($team_num == 6) :
                            ?>
                            <?php get_template_part('template-parts/team', 'employee') ?>
                        <?php endif; endwhile;
                    wp_reset_query(); ?>
                </div>
            </div>
        </div>

        <section class="team-c2a">
            <div class="container">
                <div class="row portfolio-box">
                    <div class="col-md-2 portfolio-box__icon text-center">
                        <i data-feather="user-plus" class="portfolio-box__icon"></i>
                    </div>
                    <div class="col-md-7 portfolio-box__content">
                        <h3 class="text-grad">Want to Join our Awesome team?</h3>
                        <p>ARISTECH is a company that provides on-demand digital solutions. We work with the world’s greatest brands. We’re oriented around flexibility, community, and results. So come join our awesome TEAM and explore beyond boundaries.</p>
                    </div>
                    <div class="col-md-3 portfolio-box__link text-center">
                        <a target="_blank" class=" btn btn-sub btn-c2a" href="mailto:info@aristechbd.com">Apply Now <i class="ic" data-feather="arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="portfolio-path"></div>
        </section>
    </section>
</main>

<?php get_footer(); ?>