<footer>
    <div class="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 site-overview mb-5">
                    <a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri().'/assets/img/icon.png'; ?>" alt="site-logo" height="40" /><span class="text-grad">ArisTech</span> </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio omnis
                        cum, aut eaque expedita ea magnam.</p>
                    <ul class="footer-social">
                        <li><a href="#" title="Facebook"><i data-feather="facebook"></i></a></li>
                        <li><a href="#" title="LinkedIn"> <i data-feather="linkedin"></i></a></li>
                        <li><a href="#" title="Twitter"> <i data-feather="twitter"></i></a></li>
                        <li><a href="#" title="Angel.co"><img src="<?php echo get_template_directory_uri().'/assets/img/angelco.svg'; ?>" alt="" srcset=""></a></li>
                        <li><a href="#" title="Crunchbase"><img src="<?php echo get_template_directory_uri().'/assets/img/cb.png'; ?>" alt="" srcset=""></a>
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
                        <li><a href="<?php echo site_url('/services'); ?>">Lead Generation</a></li>
                        <li><a href="<?php echo site_url('/#services'); ?>">Sales & Marketing</a></li>
                        <li><a href="<?php echo site_url('/#services'); ?>">Admin Support</a></li>
                        <li><a href="<?php echo site_url('/#services'); ?>">Virtual Assiatant</a></li>
                        <li><a href="<?php echo site_url('/#services'); ?>">Online Research</a></li>
                        <li><a href="<?php echo site_url('/#services'); ?>">Data Entry</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 footer-contact mb-5">
                    <h4 class="footer-menu-title">Contact Info</h4>
                    <ul class="footer-menu">
                        <li><a href="#"><i data-feather="mail"></i> sales@vaeveryday.com</a>
                        </li>
                        <li><a href="#"> <i data-feather="phone"></i> +8801719335239</a></li>
                        <li><a href="#"> <i data-feather="video"></i> hamim.hassan.shohag</a>
                        </li>
                        <li><i data-feather="map-pin"></i> 1059/4/A, Bindu Britto Goli, Jamtola
                            Bazar,East Shewrapara, Mirpur,
                            Dhaka
                            1216</li>
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
</body>

</html>