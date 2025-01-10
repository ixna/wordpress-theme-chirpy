<footer>
    <div class="container pl-lg-4 pr-lg-4">
        <div class="d-flex justify-content-between align-items-center text-muted ml-md-3 mr-md-3">
            <div class="footer-left">
                <p class="mb-0">
                    <?php 
                        $current_year = date( 'Y' ); 
                        echo '© '. $current_year;
                    ?>
                    <a href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a>.

                </p>
            </div>

            <div class="footer-right">
                <p class="mb-0">本站由 <a href="https://wordpress.org/" target="_blank" rel="noopener nofollow">WordPress</a> with
                    <a href="https://github.com/gezhaoyou/wordpress-theme-molly" target="_blank" rel="noopener nofollow">Molly</a>
                    Theme
                </p>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
    <!-- code highlight | Add by zhaoyou -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("pre").addClass("prettyprint linenums");
            prettyPrint();
        });
    </script>
</footer>
