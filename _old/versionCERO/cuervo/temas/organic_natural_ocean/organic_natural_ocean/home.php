<!-- --><?php get_header(); ?>

<div id="contenthome">

    <div id="slider">
    	<?php include(TEMPLATEPATH."/includes/slider.php");?>
    </div>
    
    <div id="homepage">
        
        <div class="homepageright">
        	<div id="subscribe" class="widget">
                <h4><span><?php _e("Subscribe", 'organicthemes'); ?></span></h4>
                <p><?php _e("Receive news and updates from us.", 'organicthemes'); ?></p><form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo ot_option('feedburner'); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><input type="text" value="Enter your email address..." id="subbox" onfocus="if (this.value == 'Enter your email address...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your email address...';}" name="email"/><input type="hidden" value="<?php echo ot_option('feedburner'); ?>" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe" id="subbutton" /><input type="hidden" value="eNews Subscribe" name="title"/></form>
            </div>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Sidebar') ) : ?>
                <div class="widget">
                    <h4>Widget Area</h4>
                    <p>This section is widgetized. To add widgets here, go to the <a href="<?php echo admin_url(); ?>widgets.php">Widgets</a> panel in your WordPress admin, and add the widgets you would like to <strong>Homepage Top Right</strong>.</p>
                    <p><small>*This message will be overwritten after widgets have been added</small></p>
                </div>
            <?php endif; ?>
        </div> 
        
        <div class="homepageleft">
            
			<h3><?php echo cat_id_to_name(ot_option('hp_cat')); ?></h3>
                
            <?php $recent = new WP_Query("cat=" .ot_option('hp_cat'). "&showposts=" .ot_option('hp_num') ); while($recent->have_posts()) : $recent->the_post();?>
            
            	<div class="postarea">
                	
                    <div class="posttitle">
                    	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    	<a class="commenticon" href="<?php the_permalink(); ?>#comment" title="Comments"><?php comments_number('0', '1', '%'); ?></a>
                    </div>
                    <div class="homecontent">
                    	<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-thumbnail' ); ?></a>
                    	<p><?php the_excerpt(); ?></p>
                        <p><a class="more-link" href="<?php the_permalink() ?>">Read More</a></p>
                    </div>
                    
                </div>
                    
            <?php endwhile; ?>

        </div>                         
        
	</div>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>