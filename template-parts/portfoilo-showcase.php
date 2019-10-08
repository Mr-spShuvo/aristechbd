<div class="col-md-6 col-lg-4 mb-3 d-flex">
    <div class="card">
        <img src="<?php echo get_field('portfolio_img'); ?>" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title"><?php the_field('portfolio_title'); ?></h5>
            <p class="p-meta">
                <i data-feather="tag"></i> Services:
                <span class="p-meta-info"> <?php the_field('portfolio_types'); ?></span>

                <?php if (get_field('portfolio_cost')) : ?>
                    <i data-feather="credit-card"></i> Cost:
                    <span class="p-meta-info"><?php the_field('portfolio_cost'); ?></span>
                <?php endif; ?> <br>

                <?php if (get_field('portfolio_time')) : ?>
                    <i data-feather="clock"></i> Time:
                    <span class="p-meta-info"><?php the_field('portfolio_time'); ?> hr(s)</span>
                <?php endif; ?>

                <?php if (get_field('portfolio_rate') != 0) : ?>
                    <i data-feather="star"></i> Rate:
                    <span class="p-meta-info"><?php the_field('portfolio_rate'); ?></span>/5
                <?php endif; ?>
            </p>
            <p class="card-text text-justify"><?php the_field('portfolio_info'); ?></p>
            <div class="text-center m-3">
                <a href="<?php echo get_the_permalink() ?>" class="p-link">View Portfolio<i class="ic" data-feather="arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>