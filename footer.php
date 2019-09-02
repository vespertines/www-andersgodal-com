<?php wp_footer(); ?>
<?php
// $post = get_page_by_title('footer', OBJECT, 'page');
// $post_id = $post->ID;
// $footer_background = get_field('footer_background', $post_id);
?>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <h3>Want to get in touch,
                    <br>collaborate or just say hello?
                    </h3>
                    <span class="desktop">&copy; <?php echo date("Y"); ?> Anders Godal</span>
                </div>

                <div class="col-3">
                    <h4>Contact</h4>
                    <span><a href="mailto:hello@andersgodal.com">hello@andersgodal.com</a>
                    <br><a href="tel:+4798615707">+47 986 15 707</a>
                    <br><a href="https://www.linkedin.com/in/anders-godal-35b6039/" target="_blank">LinkedIn</a></span>
                    <span class="mobile">&copy; <?php echo date("Y"); ?> Anders Godal</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery/dist/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>
