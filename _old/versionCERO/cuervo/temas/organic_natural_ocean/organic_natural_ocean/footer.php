<!-- begin footer -->

<div style="clear:both;"></div>

<div id="footertopbg">
    
        <div id="footertop">
            
            <div class="footertopleft">
                
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left') ) : ?>
                <?php endif; ?>
                    
            </div>
                
            <div class="footertopmid">
                
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Mid') ) : ?>
                <?php endif; ?>
                    
            </div>
                
            <div class="footertopright">
                
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right') ) : ?>   
                <?php endif; ?>
                    
            </div>
                
        </div>
    
    </div>
    
    <div id="footerbottombg">
    
        <div id="footer">

            <div class="footerright">
                <a href="http://www.organicthemes.com" target="_blank"><img style="margin-bottom: 3px;" src="<?php bloginfo('template_url'); ?>/images/footer_logo.png" alt="<?php _e("Organic Themes",'organicthemes'); ?>" /></a>
            </div>
    
            <div class="footertop">
                <p><?php _e("Copyright", 'organicthemes'); ?> &copy; <?php echo date('Y'); ?> &middot; <?php _e("All Rights Reserved", 'organicthemes'); ?> &middot; <?php bloginfo('name'); ?></p>
            </div>
    
            <div class="footerbottom">
                <p><?php _e("The", 'organicthemes'); ?> <a href="http://www.organicthemes.com/themes/" target="_blank"><?php _e("Natural Theme", 'organicthemes'); ?></a> <?php _e("by", 'organicthemes'); ?> <a href="http://www.organicthemes.com" target="_blank"><?php _e("Organic Themes", 'organicthemes'); ?></a> &middot; <a href="http://kahunahost.com" target="_blank" title="WordPress Hosting"><?php _e("WordPress Hosting", 'organicthemes'); ?></a> &middot; <a href="<?php bloginfo('rss2_url'); ?>" target="_blank">RSS Feed</a> &middot; <?php wp_loginout(); ?></p>
            </div>	
    
        </div>
        
    </div>

</div>

<?php do_action('wp_footer'); ?>

<?php echo stripslashes(ot_option('tracking')); // tracking code ?>

</body>
</html>