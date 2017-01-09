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
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/nivo-slider.css" type="text/css" />
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

        <!-- Slider Nivo -->
        <section id="slider" class="slider-parallax">

            <div class="nivoSlider">
                <img src="<?php echo cdn_assets();?>assets/images/slider/2.jpg" alt="Slider 1" title="#nivocaption1" />
                <img src="<?php echo cdn_assets();?>assets/images/slider/3.jpg" alt="Slider 2" title="#nivocaption2" />
                <img src="<?php echo cdn_assets();?>assets/images/slider/4.jpg" alt="Slider 3" title="#nivocaption3" />
                <img src="<?php echo cdn_assets();?>assets/images/slider/5.jpg" alt="Slider 4" title="#nivocaption4" />
            </div>

            <div id="nivocaption1" class="nivo-html-caption">Imagenes de prueba</div>
            <div id="nivocaption2" class="nivo-html-caption">Texto de Prueba</div>
            <div id="nivocaption3" class="nivo-html-caption">Renta Antiguo</div>
            <div id="nivocaption4" class="nivo-html-caption">Texto de Prueba</div>

        </section>
        <!-- /Slider Nivo-->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap nopadding">
                <section class="section notopborder nomargin">

                    <div class="container clearfix center">
                        <div class="heading-block">
                            <h2>Alquila un auto clásico</h2>
                            <span data-animate="fadeIn" data-delay="200">Ideal para cualquier evento social</span>
                        </div>
                        <div class="col_full">
                            <div class="masonry-thumbs clearfix" data-lightbox="gallery">
                                <a href="<?php echo cdn_assets();?>assets/images/portfolio/4/1.jpg" data-lightbox="gallery-item" data-animate="bounceIn" data-delay="0">
                                    <img src="<?php echo cdn_assets();?>assets/images/portfolio/4/1.jpg" alt="Gallery Image">
                                    <div class="overlay"><div class="overlay-wrap"><i class="icon-play"></i></div></div>
                                </a>
                                <a href="<?php echo cdn_assets();?>assets/images/portfolio/4/2.jpg" data-lightbox="gallery-item" data-animate="bounceIn" data-delay="200">
                                    <img src="<?php echo cdn_assets();?>assets/images/portfolio/4/2.jpg" alt="Gallery Image">
                                    <div class="overlay"><div class="overlay-wrap"><i class="icon-play"></i></div></div>
                                </a>
                                <a href="<?php echo cdn_assets();?>assets/images/portfolio/4/3.jpg" data-lightbox="gallery-item" data-animate="bounceIn" data-delay="400">
                                    <img src="<?php echo cdn_assets();?>assets/images/portfolio/4/3.jpg" alt="Gallery Image">
                                    <div class="overlay"><div class="overlay-wrap"><i class="icon-play"></i></div></div>
                                </a>
                                <a href="<?php echo cdn_assets();?>assets/images/portfolio/4/4.jpg" data-lightbox="gallery-item" data-animate="bounceIn" data-delay="600">
                                    <img src="<?php echo cdn_assets();?>assets/images/portfolio/4/4.jpg" alt="Gallery Image">
                                    <div class="overlay"><div class="overlay-wrap"><i class="icon-play"></i></div></div>
                                </a>
                            </div>
                        </div>
                        <div class="col_full">
                            <div class="col_one_sixth nobottommargin">
                                <h4 data-animate="bounceIn" data-delay="0">Bodas</h4>
                            </div>
                            <div class="col_one_sixth nobottommargin">
                                <h4 data-animate="bounceIn" data-delay="200">XV Años</h4>
                            </div>
                            <div class="col_one_sixth nobottommargin">
                                <h4 data-animate="bounceIn" data-delay="400">Graduaciones</h4>
                            </div>
                            <div class="col_one_sixth nobottommargin">
                                <h4 data-animate="bounceIn" data-delay="600">Aniversarios</h4>
                            </div>
                            <div class="col_one_sixth nobottommargin">
                                <h4 data-animate="bounceIn" data-delay="800">Televisión</h4>
                            </div>
                            <div class="col_one_sixth col_last nobottommargin">
                                <h4 data-animate="bounceIn" data-delay="1000">Películas</h4>
                            </div>
                        </div>
                    </div>

                </section>
                <section class="section pricing-section header-sitck dark nomargin" style="background:#333;">
                    <div class="container clearfix">
                        <div class="row">
                            <div class="col-md-8 ">
                                <div class="col_full">
                                    <div class="fslider flex-thumb-grid grid-6" data-animation="fade" data-arrows="true" data-thumbs="true">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide" data-thumb="<?php echo cdn_assets();?>assets/images/magazine/thumb/1.jpg">
                                                    <a href="#">
                                                        <img src="<?php echo cdn_assets();?>assets/images/magazine/1.jpg" alt="">
                                                        <div class="overlay">
                                                            <div class="text-overlay">
                                                                <div class="text-overlay-title">
                                                                    <h3>Imagen de Prueba</h3>
                                                                </div>
                                                                <div class="text-overlay-meta">
                                                                    <span>Prueba</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="slide" data-thumb="<?php echo cdn_assets();?>assets/images/magazine/thumb/2.jpg">
                                                    <a href="#">
                                                        <img src="<?php echo cdn_assets();?>assets/images/magazine/2.jpg" alt="">
                                                        <div class="overlay">
                                                            <div class="text-overlay">
                                                                <div class="text-overlay-title">
                                                                    <h3>Titulo de prueba</h3>
                                                                </div>
                                                                <div class="text-overlay-meta">
                                                                    <span><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="slide" data-thumb="<?php echo cdn_assets();?>assets/images/magazine/thumb/3.jpg">
                                                    <a href="#">
                                                        <img src="<?php echo cdn_assets();?>assets/images/magazine/3.jpg" alt="">
                                                        <div class="overlay">
                                                            <div class="text-overlay">
                                                                <div class="text-overlay-title">
                                                                    <h3>Imagen de Prueba</h3>
                                                                </div>
                                                                <div class="text-overlay-meta">
                                                                    <span>Prueba</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="slide" data-thumb="<?php echo cdn_assets();?>assets/images/magazine/thumb/4.jpg">
                                                    <iframe src="http://player.vimeo.com/video/99895335" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                </div>
                                                <div class="slide" data-thumb="<?php echo cdn_assets();?>assets/images/magazine/thumb/5.jpg">
                                                    <a href="#">
                                                        <img src="<?php echo cdn_assets();?>assets/images/magazine/5.jpg" alt="">
                                                        <div class="overlay">
                                                            <div class="text-overlay">
                                                                <div class="text-overlay-title">
                                                                    <h3>Imagen de Prueba</h3>
                                                                </div>
                                                                <div class="text-overlay-meta">
                                                                    <span><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="slide" data-thumb="<?php echo cdn_assets();?>assets/images/magazine/thumb/6.jpg">
                                                    <a href="#">
                                                        <img src="<?php echo cdn_assets();?>assets/images/magazine/6.jpg" alt="">
                                                        <div class="overlay">
                                                            <div class="text-overlay">
                                                                <div class="text-overlay-title">
                                                                    <h3>Imagen de Prueba</h3>
                                                                </div>
                                                                <div class="text-overlay-meta">
                                                                    <span>Prueba</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col_full">
                                    <div class="pricing pricing--sonam">
                                        <div class="pricing--item">
                                            <h3 class="pricing--title">Servicio</h3>
                                            <div class="pricing--price"><span class="pricing--currency">$</span>3,900.00</div>
                                            <p class="pricing--sentence">Un recorrido único</p>
                                            <ul class="pricing--feature-list">
                                                <li class="pricing--feature">Dodge Club Coupe <strong>1946</strong></li>
                                                <li class="pricing--feature">Impecable exteriores e interiores</li>
                                                <li class="pricing--feature">Placas de auto antiguo</li>
                                                <li class="pricing--feature">Premio <strong>Record Guiness</strong></li>
                                                <li class="pricing--feature">Certificado por el <strong>IPN</strong></li>
                                            </ul>
                                            <a href="<?php echo base_url_lang();?>servicio" style="color:#FFF"><button class="pricing--action">Ver más</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/jquery.nivo.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/functions.js"></script>
    <script type="text/javascript">

        jQuery(document).ready(function($) {

            $('.nivoSlider').nivoSlider({
                effect: 'random',
                slices: 15,
                boxCols: 12,
                boxRows: 6,
                animSpeed: 500,
                pauseTime: 8000,
                directionNav: true,
                controlNav: true,
                pauseOnHover: false,
                prevText: '<i class="icon-angle-left"></i>',
                nextText: '<i class="icon-angle-right"></i>',
                afterLoad: function(){
                    $('#slider').find('.nivo-caption').addClass('slider-caption-bg');
                }
            });

        });

    </script>
</body>
</html>
