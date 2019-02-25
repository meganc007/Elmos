<?php wp_footer(); ?>
    <footer class="container-fluid">
        <div class="row">
            <div class="text-center col-xs-12 footer-main">
                <p>Website Designed by <a href="http://www.curiositymg.com/" target="_blank"> Curiosity</a>  |  &copy; 2016 Elmo's Grill  |  All Rights Reserved  |  Proudly Serving &amp; Entertaining 30A For Over 26 Years!</p>
            </div>
            
        </div>
    </footer>
    <!--
    /**
     * Custom CDN
    **/
    --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!--
    /**
     * Custom Fonts
    **/
    --->
    
    <!--
    /**
     * Custom Scripts
    **/
    --->
    <script type="text/javascript">
        jQuery(document).ready(function(){
            var distance = jQuery('#primary-bootstrap-menu').offset().top,
            $window = jQuery(window);

            $window.scroll(function() {
                if ( $window.scrollTop() >= distance ) {
                    jQuery('#primary-bootstrap-menu').addClass('scroll-menu');
                }
                else {
                    jQuery('#primary-bootstrap-menu').removeClass('scroll-menu');
                }
            });
        })
    </script>

    </body>

    </html>
