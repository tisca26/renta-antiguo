<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Footer
    ============================================= -->
<footer id="footer" class="dark">

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="container clearfix">

                <div class="col_half">
                    <?php echo trans_line('footer_copyright');?><br>
                    <div class="copyright-links"><a href="<?php echo ICOGNITIS_URL;?>"><?php echo trans_line('footer_desarrollador');?></a></div>
                </div>

                <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        <a href="<?php echo FACEBOOK;?>" target="_blank" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="<?php echo TWITTER;?>" target="_blank" class="social-icon si-small si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                    </div>

                    <div class="clear"></div>

                    <i class="icon-email3" style="margin-right: 5px;"></i>&nbsp;<?php echo MAIL_VENTAS;?> <span class="middot">·</span>
                    <i class="icon-call" style="margin-right: 5px;"></i>&nbsp;<?php echo TEL_VENTAS;?>
                </div>

            </div>
        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->
<!-- #footer end -->
