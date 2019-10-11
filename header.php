<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex" />

    <!-- TODO: Meta Tags -->
    <meta name="description" content="We offer a series of smart devices for your vehicles to protect against the theft. AVSS is the number #1 trusted brand all over the country for vehicle security system products.">

    <!-- TODO: Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AVSS.io">
    <meta name="twitter:title" content="AVSS.io - Track all your vehicles with AVSS">
    <meta name="twitter:description" content="We offer a series of smart devices for your vehicles to protect against the theft. AVSS is the number #1 trusted brand all over the country for vehicle security system products.">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri() . '/assets/img/avss.png'; ?>">

    <!-- TODO: Facebook Meta Tags -->
    <meta property="og:image" content="<?php echo get_template_directory_uri() . '/assets/img/avss.png'; ?>" itemprop="thumbnailUrl">
    <meta property="og:title" content="AVSS.io - Track all your vehicles with AVSS">
    <meta property="og:url" content="http://avss.io/">
    <meta property="og:site_name" content="AVSS.io">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="We offer a series of smart devices for your vehicles to protect against the theft. AVSS is the number #1 trusted brand all over the country for vehicle security system products.">

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
                <a href="<?php echo site_url('/'); ?>" class="navbar-brand"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon.png'; ?>" alt="site-logo" /><span class="navbar-brand__text">ArisTech</span> </a>
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