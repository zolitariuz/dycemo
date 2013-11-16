<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="postarea">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <div class="postcontent">
            
            	<h3><?php the_title(); ?></h3>
			
				<?php the_content(__('Read More'));?><div style="clear:both;"></div>
                
                <div class="postmeta">
                	<p>Tagged: <?php the_tags('') ?></p>
                </div>
            
            </div>
			
		</div>
			
        <div class="postcomments">
			<?php comments_template('',true); ?>
        </div>

		<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>
		
		<?php endif; ?>
		
	</div>
	
<?php include(TEMPLATEPATH."/sidebar_right.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>