<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <title>ArisTech - We deliver leads</title>

    <?php wp_head(); ?>


</head>

<body>
    <header id="home">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white py-2">
            <div class="container">
                <a href="/" class="navbar-brand"><img src="<?php echo get_template_directory_uri().'/assets/img/icon.png'; ?>" alt="site-logo" /><span class="text-grad">ArisTech</span> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i data-feather="menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link scroll" href="/#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../static/portfolio.html">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../static/team.html">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../static/about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../static/blog.html">Blogs</a>
                        </li>
                    </ul>
                    <a class="ml-5 btn btn-main" href="../static/contact.html">
                        Contact Us <i class="ic" data-feather="arrow-right"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>