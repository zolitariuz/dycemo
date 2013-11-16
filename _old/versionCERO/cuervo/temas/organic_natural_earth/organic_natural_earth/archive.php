<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
    
		<div class="postarea">
        
        	<div class="postcontent">
	
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                    
                <!--The archive page is currently using the Limit Post funtion and is currently set to display 450 characters. You can increase this or decreas it as you wish.-->
                
                <?php the_content_limit(450, "Read More"); ?><div style="clear:both;"></div>
                
                <div class="postmeta">
                    <p><?php _e("Filed under", 'organicthemes'); ?> <?php the_category(', ') ?> &middot; <?php _e("Tagged with", 'organicthemes'); ?> <?php the_tags('') ?></p>
                </div>
                        
                <?php endwhile; else: ?>
                        
                <div id="prevLink"><p><?php previous_posts_link(); ?></p></div>
                <div id="nextLink"><p><?php next_posts_link(); ?></p></div>
                
                <h3><?php _e("Page not Found"); ?></h3>
                <p><?php _e("We're sorry, but the page you're looking for isn't here."); ?></p>
                <p><?php _e("Try searching for the page you are looking for or using the navigation in the header or sidebar"); ?></p>
    
                <?php endif; // do not delete ?>
            
            </div>
        
        </div>
	
	</div>
			
	<?php include(TEMPLATEPATH."/sidebar_right.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>