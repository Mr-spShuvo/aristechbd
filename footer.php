<footer>
    <div class="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 site-overview mb-5">
                    <div class="navbar-brand">
                        <a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon.png'; ?>" alt="site-logo" height="40" /><span class="navbar-brand__text">ArisTech BD</span> </a>
                    </div>
                    <p>Our objective is to help you to grow your business and build competitive advantages to ensure your continued success in the industry. And, that makes us the only consultant you can count on anytime.</p>
                    <ul class="footer-social">
                        <li><a target="_blank" href="https://www.facebook.com/aristechbd/" title="Facebook"><i data-feather="facebook"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/aristech-bd" title="LinkedIn"> <i data-feather="linkedin"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/AristechBD" title="Twitter"> <i data-feather="twitter"></i></a></li>
                        <li><a target="_blank" href="https://angel.co/company/aristechbd" title="Angel.co"><img src="<?php echo get_template_directory_uri() . '/assets/img/angelco.svg'; ?>"></a></li>
                        <li><a target="_blank" href="https://www.crunchbase.com/organization/aristech-bd" title="Crunchbase"><img src="<?php echo get_template_directory_uri() . '/assets/img/cb.png'; ?>"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 quick-menu mb-5">
                    <h4 class="footer-menu-title">Quick Menu</h4>
                    <ul class="footer-menu">
                        <li><a href="<?php echo site_url('/portfolio'); ?>">Portfolio</a></li>
                        <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
                        <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
                        <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a></li>
                        <li><a href="<?php echo site_url('/terms-conditions'); ?>">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 services-menu mb-5">


                    <h4 class="footer-menu-title">Services</h4>
                    <ul class="footer-menu">
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
                            <li><a href="<?php the_permalink(); ?>"><?php the_field('services_name') ?></a></li>
                        <?php endwhile;
                        wp_reset_query(); ?>
                    </ul>
                </div>
                <div class="col-lg-4 footer-contact mb-5">
                    <h4 class="footer-menu-title">Contact Info</h4>
                    <ul class="footer-menu">
                        <li><a target="_blank" href="mailto:info@aristechbd.com"><i data-feather="mail"></i> info@aristechbd.com</a>
                        </li>
                        <li><a target="_blank" href="call:+8801712486694"> <i data-feather="phone"></i> +880 1712 486694</a></li>
                        <li><a target="_blank" href="skype:atikkybd"> <i data-feather="video"></i> atikkybd</a>
                        </li>
                        <li><i data-feather="map-pin"></i>
                            <address class="d-inline">House#01, Road#02, Metro Housing, <br>
                                Bosila, Mohammadpur -1207, <br>
                                Dhaka, Bangladesh</address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="footer-copyright">
        <p>
            &copy; All Rights Reserved by <a href="<?php echo site_url('/'); ?>">ArisTech</a> <?php echo date('Y') ?> | Made with &hearts; by
            <a href="http://1mandev.com" target="_blank">1MANDEV</a>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5d9c7e17db28311764d7d990/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>

</html>