<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="es-mx">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="<?php echo ICOGNITIS_SACV;?>"/>
    <meta name="description" content="<?php echo trans_line('metatag_desc'); ?>">
    <meta name="keywords" content="<?php echo trans_line('metatag_keywords'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="<?php echo cdn_assets();?>assets/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo cdn_assets();?>assets/images/favicon.ico" type="image/x-icon">

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/style.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/swiper.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/magnific-popup.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/responsive.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/custom.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/colors.php" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/components/pricing-table.css" type="text/css" />

    <!-- Document Title
    ============================================= -->
    <title><?php echo trans_line('title_tag'); ?></title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Menu generado -->
        <?php $this->menu_manager->generar_menu(); ?>
        <!-- /Menu generado -->

        <section id="page-title" class="bgcolor page-title-dark">
            <div class="container clearfix">
                <h1>Servicio</h1>
                <span>Haga de su evento una fecha inolvidable</span>
            </div>
        </section>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap nopadding">
                <section class="section dark nomargin" style="background: #555">
                    <div class="container clearfix">
                        <div class="col_one_fourth" data-animate="fadeInDown">
                            <div class="fancy-title title-bottom-border">
                                <h3 class="nobgcolor center">Características</h3>
                            </div>
                            <ul class="iconlist">
                                <li><i class="icon-star3"></i> Dodge Club Coupe 1946</li>
                                <li><i class="icon-line-loader"></i> Impecable de exteriores e interiores</li>
                                <li><i class="icon-stack"></i> Placas de auto antiguo</li>
                                <li><i class="icon-diamond"></i> Premio Record Guiness</li>
                                <li><i class="icon-certificate"></i> Certificado por el IPN</li>
                            </ul>
                        </div>
                        <div class="col_one_fourth" data-animate="fadeInDown">
                            <div class="fancy-title title-bottom-border">
                                <h3 class="nobgcolor center">Plan básico</h3>
                            </div>
                            <p class="text-justify">
                                El tiempo estimado del servicio es de 4 horas, inicia en su domicilio o en la ubicación de su preferencia.
                                <br/>
                                Incluye el traslado a la sesión fotográfica, a la iglesia y a la recepción (en caso de existir).
                            </p>
                        </div>
                        <div class="col_one_fourth" data-animate="fadeInDown">
                            <div class="fancy-title title-bottom-border">
                                <h3 class="nobgcolor center">Incluye</h3>
                            </div>
                            <ul class="iconlist">
                                <li><i class="icon-clock"></i> 4 Horas de servicio</li>
                                <li><i class="icon-user"></i> Chofer a la puerta</li>
                                <li><i class="icon-fire"></i> Gasolina del vehículo</li>
                                <li><i class="icon-ok"></i> Adorno de moños en el exterior del vehiculo con el color de su preferencia</li>
                            </ul>
                        </div>
                        <div class="col_one_fourth col_last" data-animate="bounceIn" data-delay="400">
                            <div class="pricing pricing--sonam nomargin">
                                <div class="pricing--item">
                                    <div class="pricing--price"><span class="pricing--currency">$</span>3,900.00</div>
                                    <p class="pricing--sentence">Plan básico</p>
                                    <a href="<?php echo base_url_lang();?>contacto" style="color:#FFF"><button class="pricing--action">Contactanos</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_full">
                        <div class="masonry-thumbs clearfix" data-lightbox="gallery">
                            <a href="<?php echo cdn_assets();?>assets/images/portfolio/dodge-club-coupe-1946-portfolio-1.jpg" data-lightbox="gallery-item">
                                <img src="<?php echo cdn_assets();?>assets/images/portfolio/thumbnails/dodge-club-coupe-1946-portfolio-1-thumbnail.jpg" alt="Gallery Image">
                                <div class="overlay"><div class="overlay-wrap"><i class="icon-play"></i></div></div>
                            </a>
                            <a href="<?php echo cdn_assets();?>assets/images/portfolio/dodge-club-coupe-1946-portfolio-2.jpg" data-lightbox="gallery-item">
                                <img src="<?php echo cdn_assets();?>assets/images/portfolio/thumbnails/dodge-club-coupe-1946-portfolio-2-thumbnail.jpg" alt="Gallery Image">
                                <div class="overlay"><div class="overlay-wrap"><i class="icon-play"></i></div></div>
                            </a>
                            <a href="<?php echo cdn_assets();?>assets/images/portfolio/dodge-club-coupe-1946-portfolio-3.jpg" data-lightbox="gallery-item">
                                <img src="<?php echo cdn_assets();?>assets/images/portfolio/thumbnails/dodge-club-coupe-1946-portfolio-3-thumbnail.jpg" alt="Gallery Image">
                                <div class="overlay"><div class="overlay-wrap"><i class="icon-play"></i></div></div>
                            </a>
                            <a href="<?php echo cdn_assets();?>assets/images/portfolio/dodge-club-coupe-1946-portfolio-4.jpg" data-lightbox="gallery-item">
                                <img src="<?php echo cdn_assets();?>assets/images/portfolio/thumbnails/dodge-club-coupe-1946-portfolio-4-thumbnail.jpg" alt="Gallery Image">
                                <div class="overlay"><div class="overlay-wrap"><i class="icon-play"></i></div></div>
                            </a>
                        </div>
                    </div>
                </section>
            </div>

        </section><!-- #content end -->

        <!-- Footer -->
        <?php $this->cargar_elementos_manager->carga_con_lang('footers/footer_uno'); ?>
        <!-- /Footer -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/plugins.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/functions.js"></script>
</body>
</html>
