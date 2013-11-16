		<div class="jFlow">
      
            <div id="slides">
            
            	<?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=" .ot_option('slider_num') ); while($recent->have_posts()) : $recent->the_post();?>
                    
					<div>
						<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'featured-thumbnail' ); ?></a>
                    </div>
                    
                <?php endwhile; ?>  
                
            </div>
            
        </div>
        
        <div id="controller">
    		<div id="prev_btn"><a href="#blank"><img src="<?php bloginfo('template_url'); ?>/images/blank_btn.gif" alt="&laquo;" class="jFlowPrev" /></a></div>   
        	<div id="next_btn"><a href="#blank"><img src="<?php bloginfo('template_url'); ?>/images/blank_btn.gif" alt="&raquo;" class="jFlowNext" /></a></div>
            
            <?php
// long code for jFlow slider controls
if (ot_option('slider_num') == '1') {
        echo ''?>
		<?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="one" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
		<?php '';
} elseif (ot_option('slider_num') == '2') {
        echo ''?>
		<?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="two" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
        <?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1&offset=1"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="tworight" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
		<?php '';
} elseif (ot_option('slider_num') == '3') {
        echo ''?>
		<?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="three" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
        <?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1&offset=1"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="three" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
        <?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1&offset=2"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="threeright" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
		<?php '';
} elseif (ot_option('slider_num') == '4') {
        echo ''?>
		<?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="four" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
        <?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1&offset=1"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="four" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
        <?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1&offset=2"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="four" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
        <?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1&offset=3"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="fourright" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
		<?php '';
} elseif (ot_option('slider_num') == '5') {
        echo ''?>
		<?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="five" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
        <?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1&offset=1"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="five" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
        <?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1&offset=2"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="five" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
        <?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1&offset=3"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="five" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
        <?php $recent = new WP_Query("cat=" .ot_option('slider_cat'). "&showposts=1&offset=4"); while($recent->have_posts()) : $recent->the_post();?><h1><span class="jFlowControl tip" title="<?php the_excerpt(); ?>"><a class="fiveright" href="#blank"> <?php the_title(); ?> </a></span></h1><?php endwhile; ?>
		<?php '';
} else {
        // catch-all (should not be needed)
        echo "<p>Please configure the theme options.</p>";
} // end
?>
            
        </div>