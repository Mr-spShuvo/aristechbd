<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex" />

    <!-- Meta Tags -->
    <meta name="description" content="Before your workload becomes your burden, reach out to us. At ArisTech BD, we have all the skill-sets to handle all of your needs. Our virtual assistants will provide you with all the support to you become successful.">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AristechBD">
    <meta name="twitter:title" content="ArisTech BD - We Deliver Leads">
    <meta name="twitter:description" content="Before your workload becomes your burden, reach out to us. At ArisTech BD, we have all the skill-sets to handle all of your needs. Our virtual assistants will provide you with all the supports to you become successful. ">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri() . '/assets/img/avss.png'; ?>">

    <!-- Facebook Meta Tags -->
    <meta property="og:image" content="<?php echo get_template_directory_uri() . '/assets/img/avss.png'; ?>" itemprop="thumbnailUrl">
    <meta property="og:title" content="ArisTech BD - We Deliver Leads">
    <meta property="og:url" content="http://aristechbad.com/">
    <meta property="og:site_name" content="ArisTech BD">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Before your workload becomes your burden, reach out to us. At ArisTech BD, we have all the skill-sets to handle all of your needs. Our virtual assistants will provide you with all the support to you become successful. ">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/img/icon.png'; ?>" type="image/x-icon">

    <?php if (is_front_page()) :  ?>
        <title><?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description') ?></title>
    <?php else :  ?>
        <title><?php echo wp_title('') . ' - ' . get_bloginfo('name') ?></title>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white py-2">
            <div class="container">
                <a href="<?php echo site_url('/'); ?>" class="navbar-brand"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon.png'; ?>" alt="site-logo" /><span class="navbar-brand__text">ArisTech BD</span> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i data-feather="menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('/'); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="<?php echo site_url('/#services'); ?>">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('/portfolio'); ?>">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('/team'); ?>">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('/about'); ?>">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('/blog'); ?>">Blog</a>
                        </li>
                    </ul>
                    <a class="ml-5 btn btn-main" href="<?php echo site_url('/contact'); ?>">
                        Contact Us <i class="ic" data-feather="arrow-right"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>