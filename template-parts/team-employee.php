<div class="col-md-6 col-lg-3 mb-4 d-flex">
    <div class="card text-center">
        <div class="card-img-top"></div>
        <img class="team-member__img" src="<?php echo get_field('employee_img'); ?>">
        <div class="card-body">
            <h4 class="team-member__name"><?php the_field('employee_name'); ?></h4>
            <h6 class="team-member__designation"><?php the_field('employee_designation'); ?>
            </h6>
            <p class="text-justify pt-2"><?php the_field('employee_info'); ?></p>
        </div>
        <ul class="footer-social team-social">
            <li><a target="_blank" href="<?php the_field('employee_upwork'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/upwork.svg' ?>" alt="" srcset=""></a></li>
            <li><a target="_blank" href="<?php the_field('employee_facebook'); ?>" title="Facebook"><i data-feather="facebook"></i></a>
            </li>
            <li><a target="_blank" href="<?php the_field('employee_linkedin'); ?>" title="LinkedIn"> <i data-feather="linkedin"></i></a>
            </li>
        </ul>
    </div>
</div>