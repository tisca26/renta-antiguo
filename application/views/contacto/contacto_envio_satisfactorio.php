<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo trans_line('language');?>">
<head>
    <!-- Carga extra -->
    <?php $this->cargar_elementos_manager->carga_simple('elementos_extras/head_first'); ?>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="<?php echo ICOGNITIS_SACV;?>"/>
    <meta name="description" content="<?php echo trans_line('metatag_desc'); ?>">
    <meta name="keywords" content="<?php echo trans_line('metatag_keywords'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/style.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/swiper.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/magnific-popup.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/responsive.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/custom.css" type="text/css">
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/colors.php" type="text/css"/>


    <!-- Document Title
    ============================================= -->
    <title><?php echo trans_line('title_tag'); ?></title>
    <!-- Carga extra -->
    <?php $this->cargar_elementos_manager->carga_simple('elementos_extras/head_last'); ?>

</head>

<body class="stretched">
<!-- Carga extra  -->
<?php $this->cargar_elementos_manager->carga_simple('elementos_extras/body_first'); ?>
<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Menu generado -->
    <?php $this->menu_manager->generar_menu(); ?>
    <!-- /Menu generado -->

    <section id="page-title" class="bgcolor page-title-dark">
        <div class="container clearfix">
            <h1><?php echo trans_line('contacto_page_title');?></h1>
            <span><?php echo trans_line('contacto_page_title_sub');?></span>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url_lang();?>">OVA</a></li>
                <li class="active"><?php echo trans_line('contacto_page_title');?></li>
            </ol>
        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content" style="margin-bottom:0px;">
        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Postcontent
                ============================================= -->
                <div class="postcontent nobottommargin">

                    <div class="contact-form-result">
                        <?php echo get_bootstrap_alert(); ?>
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', '</div>'); ?>
                    </div>

                    <div class="fancy-title title-dotted-border">
                        <h3><?php echo trans_line('contacto_form_title');?></h3>
                    </div>

                    <div>
                        <?php echo form_open('contacto/enviar_correo', array('id' => 'current_form', 'class' => '')); ?>
                            <div class="form-process"></div>

                            <div class="col_one_third">
                                <label for="contactform-name"><?php echo trans_line('contacto_form_nombre');?>
                                    <small>*</small>
                                </label>
                                <?php echo form_input('nombre', set_value('nombre'), 'id="nombre" class="sm-form-control required"'); ?>
                            </div>

                            <div class="col_one_third">
                                <label for="contactform-email"><?php echo trans_line('contacto_form_mail');?>
                                    <small>*</small>
                                </label>
                                <input type="email" id="correo" name="correo" value="<?php echo set_value('correo') ?>"
                                       class="required email sm-form-control"/>
                            </div>

                            <div class="col_one_third col_last">
                                <label for="contactform-phone"><?php echo trans_line('contacto_form_telefono');?>
                                    <small>*</small>
                                </label>
                                <input type="text" id="telefono" name="telefono" value=""
                                       class="required sm-form-control"/>
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="contactform-subject"><?php echo trans_line('contacto_form_asunto');?>
                                    <small>*</small>
                                </label>
                                <input type="text" id="asunto" name="asunto" value=""
                                       class="required sm-form-control"/>
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="contactform-message"><?php echo trans_line('contacto_form_mensaje');?>
                                    <small>*</small>
                                </label>
                                <textarea class="required sm-form-control" id="mensaje"
                                          name="mensaje" rows="6" cols="30"></textarea>
                            </div>

<!--                            <div class="col_full hidden">-->
<!--                                <input type="text" id="contactform-botcheck" name="contactform-botcheck" value=""-->
<!--                                       class="sm-form-control"/>-->
<!--                            </div>-->
<!---->
<!--                            <div class="col_full">-->
<!---->
<!--                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
<!--                                <div class="g-recaptcha" data-sitekey="6LczdRwTAAAAAGXe85WhD4HoSvBATQbloHLherto"></div>-->
<!---->
<!--                            </div>-->

                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit" id="btn_submit"
                                        name="contactform-submit" value="submit"><?php echo trans_line('contacto_form_enviar');?>
                                </button>
                            </div>

                        <?php echo form_close(); ?>

                    </div>

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar col_last nobottommargin">

                    <div class="widget widget_links clearfix">

                        <h4><?php echo trans_line('contacto_sucursales_titulo_2');?></h4>
                        <ul>
                            <li><a href="<?php echo base_url_lang(); ?>oficinas-virtuales"><div><?php echo trans_line('contacto_otros_1');?></div></a></li>
                            <li><a href="<?php echo base_url_lang(); ?>oficinas-amuebladas"><div><?php echo trans_line('contacto_otros_2');?></div></a></li>
                            <li><a href="<?php echo base_url_lang(); ?>recorrido-360"><div><?php echo trans_line('contacto_otros_3');?></div></a></li>
                        </ul>
                    </div>


                    <div class="widget clearfix">

                        <h4><?php echo trans_line('contacto_sucursales_contacto');?></h4>
                        <ul class="iconlist">
                            <li><i class="icon-call"></i><?php echo TEL_VENTAS;?></li>
                            <li><i class="icon-mail"></i><?php echo MAIL_VENTAS;?></li>
                        </ul>

                        <a href="<?php echo FACEBOOK;?>" target="_blank" class="social-icon si-colored si-small si-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="<?php echo TWITTER;?>" target="_blank" class="social-icon si-colored si-small si-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="<?php echo GOOGLE_PLUS;?>" target="_blank" class="social-icon si-colored si-small si-google" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google+">
                            <i class="icon-google-plus"></i>
                            <i class="icon-google-plus"></i>
                        </a>

                    </div>

                </div><!-- .sidebar end -->

            </div>

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

<script type="text/javascript">

    $(document).ready(function () {
        var form1 = $('#current_form');

        form1.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'text-danger', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            messages: {
                correo:{
                    required: "<?php echo trans_line('required'); ?>",
                    email: "<?php echo trans_line('correo'); ?>",
                    minlength: jQuery.validator.format("<?php echo trans_line('minlength'); ?>")
                },
                nombre: {
                    required: "<?php echo trans_line('required'); ?>",
                    minlength: jQuery.validator.format("<?php echo trans_line('minlength'); ?>")
                },
                telefono:{
                    required: "<?php echo trans_line('required'); ?>",
                    digits: "<?php echo trans_line('digits'); ?>",
                    minlength: jQuery.validator.format("<?php echo trans_line('minlength'); ?>")
                },
                asunto:{
                    required: "<?php echo trans_line('required'); ?>",
                    minlength: jQuery.validator.format("<?php echo trans_line('minlength'); ?>")
                },
                mensaje:{
                    required: "<?php echo trans_line('required'); ?>",
                    minlength: jQuery.validator.format("<?php echo trans_line('minlength'); ?>")
                }
            },
            rules: {
                nombre: {
                    minlength: 3,
                    required: true
                },
                correo:{
                    minlength: 3,
                    email: true,
                    required: true
                },
                telefono:{
                    minlength: 8,
                    digits: true,
                    required: true
                },
                asunto:{
                    required: true,
                    minlength: 3
                },
                mensaje:{
                    required: true,
                    minlength: 3
                }
            },

            invalidHandler: function (event, validator) { //display error alert on form submit

            },

            errorPlacement: function (error, element) {
                if (element.is(':checkbox')) {
                    error.insertAfter(element.closest(".md-checkbox-list, .md-checkbox-inline, .checkbox-list, .checkbox-inline"));
                } else if (element.is(':radio')) {
                    error.insertAfter(element.closest(".md-radio-list, .md-radio-inline, .radio-list,.radio-inline"));
                } else {
                    error.insertAfter(element); // for other inputs, just perform default behavior
                }
            },

            highlight: function (element) { // hightlight error inputs
                $(element)
                    .closest('.sm-form-control').addClass('error'); // set error class to the control group
            },

            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                    .closest('.sm-form-control').removeClass('error'); // set error class to the control group
            },

            success: function (label) {
                label
                    .closest('.sm-form-control').removeClass('error'); // set success class to the control group
            },

            submitHandler: function (form) {
                $('#btn_submit').html("<?php echo trans_line('btn_submit_loading'); ?>");
                $('#btn_submit').prop('disabled', true);
                form.submit();
            }
        });

    });

</script>

<!-- Carga extra  -->
<?php $this->cargar_elementos_manager->carga_simple('elementos_extras/body_last'); ?>
</body>
</html>
