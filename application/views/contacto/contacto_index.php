<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="es-MX">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="<?php echo ICOGNITIS_SACV;?>"/>
    <meta name="description" content="Alquila un auto clásico para tus eventos sociales a un precio especial. Dodge Club Coupe 1946.">
    <meta name="keywords" content="Clásico, Auto, Recorrido, Evento, Social, Antiguo, Renta">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="<?php echo cdn_assets();?>assets/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo cdn_assets();?>assets/images/favicon.ico" type="image/x-icon">

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
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/datepicker.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/components/timepicker.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/components/bs-select.css" type="text/css" />


    <!-- Document Title
    ============================================= -->
    <title>Renta Antiguo - Contacto</title>

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
            <h1>Contacto</h1>
            <span>Te ofrecemos el mejor servicio</span>
        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap nopadding">
            <section class="section nomargin">
                <div class="container clearfix">

                <div class="contact-form-result">
                    <?php echo get_bootstrap_alert(); ?>
                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', '</div>'); ?>
                </div>

                <div>
                    <?php echo form_open('contacto/enviar_correo', array('id' => 'current_form', 'class' => '')); ?>
                        <div class="form-process"></div>

                        <div class="col_one_third">
                            <label for="contactform-name">Nombre
                                <small>*</small>
                            </label>
                            <?php echo form_input('nombre', set_value('nombre'), 'id="nombre" class="sm-form-control required"'); ?>
                        </div>

                        <div class="col_one_third">
                            <label for="contactform-email">Correo electrónico
                                <small>*</small>
                            </label>
                            <input type="email" id="correo" name="correo" value="<?php echo set_value('correo') ?>"
                                   class="required email sm-form-control"/>
                        </div>

                        <div class="col_one_third col_last">
                            <label for="contactform-phone">Teléfono
                                <small>*</small>
                            </label>
                            <input type="text" id="telefono" name="telefono" value="<?php echo set_value('telefono') ?>"
                                   class="required sm-form-control"/>
                        </div>

                        <div class="clear"></div>

                        <div class="col_one_third">
                            <label for="contactform-evento" style="display:block; margin-bottom: 14px;">Evento
                                <small>*</small>
                            </label>
                            <?php echo form_dropdown('evento', $eventos, '', 'class="selectpicker" id="evento" value="'.set_value('evento').'"'); ?>
                        </div>

                        <div class="col_one_third travel-date-group">
                            <label for="contactform-fecha">Fecha
                                <small>*</small>
                            </label>
                            <div class="input-group">
                                <input type="text" id="fecha" name="fecha" value="<?php echo set_value('fecha') ?>"
                                       class="required sm-form-control today" placeholder="DD/MM/AAA"/>
                                <span class="input-group-addon">
                                    <span class="icon-calendar2"></span>
                                </span>
                            </div>
                        </div>

                        <div class="col_one_third col_last travel-date-group">
                            <label for="contactoform-hora">Hora tentativa para recogerlo/a</label>
                            <div class="input-group date">
                                <input type="text" id="hora" name="hora" value="<?php echo set_value('hora') ?>" class="tleft sm-form-control datetimepicker1"  placeholder="00:00 AM/PM"/>
                                <span class="input-group-addon">
                                    <span class="icon-clock"></span>
                                </span>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="col_full">
                            <label for="contactform-message">Detalles adicionales o comentarios
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
                                    name="contactform-submit" value="submit">Enviar
                            </button>
                        </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
            </section>
        </div>

    </section><!-- #content end -->

    <!-- Footer -->
    <?php $this->cargar_elementos_manager->carga_simple('footers/footer_uno'); ?>
    <!-- /Footer -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/plugins.js"></script>

<!-- Date Time Pickers
============================================= -->
<script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/components/moment.js"></script>
<script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/datepicker.js"></script>
<script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/components/timepicker.js"></script>

<!-- Bootstrap Select Plugin -->
<script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/components/bs-select.js"></script>

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
                    required: "Este campo es requerido",
                    email: "Este campo debe ser un correo electrónico válido",
                    minlength: jQuery.validator.format("Este campo debe contener un mínimo de {0} caracteres")
                },
                nombre: {
                    required: "Este campo es requerido",
                    minlength: jQuery.validator.format("Este campo debe contener un mínimo de {0} caracteres")
                },
                telefono:{
                    required: "Este campo es requerido",
                    digits: "Este campo debe contener solo números del 0-9",
                    minlength: jQuery.validator.format("Este campo debe contener un mínimo de {0} caracteres")
                },
                evento:{
                    required: "Este campo es requerido"
                },
                mensaje:{
                    required: "Este campo es requerido",
                    minlength: jQuery.validator.format("Este campo debe contener un mínimo de {0} caracteres")
                },
                hora:{
                    required: "Este campo es requerido"
                },
                fecha:{
                    required: "Este campo es requerido"
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
                mensaje:{
                    required: true,
                    minlength: 3
                },
                evento:{
                    required: true
                },
                hora:{
                    required: true
                },
                fecha:{
                    required: true
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
                $('#btn_submit').html("Enviando...");
                $('#btn_submit').prop('disabled', true);
                form.submit();
            }
        });

    });

</script>

<script type="text/javascript">
    $(function() {

        $('.travel-date-group .today').datepicker({
            autoclose: true,
            startDate: "today",
            todayHighlight: true,
            format: "dd-mm-yyyy"
        });

        $('.datetimepicker1').datetimepicker({
            format: 'LT',
            showClose: true
        });
    });
</script>
</body>
</html>
