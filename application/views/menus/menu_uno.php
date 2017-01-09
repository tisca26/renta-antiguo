<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Header
============================================= -->
<header id="header" class="<?php echo $menu_root === 'inicio' ? 'transparent-header semi-transparent' : ''; ?> full-header dark">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="<?php echo base_url_lang(); ?>" class="retina-logo" data-dark-logo="<?php echo cdn_assets(); ?>assets/images/logo-blanco-renta-antiguo.png" data-sticky-logo="<?php echo cdn_assets(); ?>assets/images/logo-extendido-blanco-renta-antiguo.png" data-mobile-logo="<?php echo cdn_assets(); ?>assets/images/logo-blanco-renta-antiguo.png">
                    <img src="<?php echo cdn_assets(); ?>assets/images/logo-blanco-renta-antiguo.png" alt="Renta Antiguo - Logo">
                </a>
                <a href="<?php echo base_url_lang(); ?>" class="standard-logo" data-dark-logo="<?php echo cdn_assets(); ?>assets/images/logo-blanco-renta-antiguo.png" data-sticky-logo="<?php echo cdn_assets(); ?>assets/images/logo-extendido-blanco-renta-antiguo.png" data-mobile-logo="<?php echo cdn_assets(); ?>assets/images/logo-blanco-renta-antiguo.png">
                    <img src="<?php echo cdn_assets(); ?>assets/images/logo-blanco-renta-antiguo.png" alt="Renta Antiguo - Logo">
                </a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="style-5">
                <ul>
                    <li class="<?php echo $menu_root === 'inicio' ? 'current' : ''; ?>">
                        <a href="<?php echo base_url_lang(); ?>">
                            <div><i class="icon-home2"></i><?php echo trans_line('menu_inicio'); ?></div>
                        </a>
                    </li>
                    <li class="<?php echo $menu_root === 'servicio' ? 'current' : ''; ?>">
                        <a href="<?php echo base_url_lang();?>servicio">
                            <div><i class="icon-road"></i><?php echo trans_line('menu_servicio'); ?></div>
                        </a>
                    </li>
                    <li class="<?php echo $menu_root === 'contacto' ? 'current' : ''; ?>">
                        <a href="<?php echo base_url_lang(); ?>contacto">
                            <div><i class="icon-email3"></i><?php echo trans_line('menu_contacto'); ?></div>
                        </a>
                    </li>
                </ul>

                <a href="<?php echo FACEBOOK;?>" class="social-icon si-small si-borderless nobottommargin si-facebook" target="_blank">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>
                <a href="<?php echo TWITTER;?>" class="social-icon si-small si-borderless nobottommargin si-twitter hidden-xs hidden-sm" target="_blank">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>
                <a href="tel:<?php echo TEL_VENTAS?>" class="button button-light button-border button-small button-rounded hidden-xs hidden-sm" style="border:none; background: none !important; color: #EEE;">
                    <i class="icon-call"></i><?php echo TEL_VENTAS;?>
                </a>

            </nav><!-- #primary-menu end -->

        </div>
    </div>
</header><!-- #header end -->

