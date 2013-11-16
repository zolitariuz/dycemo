<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
    
        <div class="postarea">
    
			<div class="pageheader">
				<h3><?php the_title(); ?></h3>
            </div>
            
            <div class="pagecontent">
				
				<div class="archive_left">
		
					<h4>By Page:</h4>
						<ul>
							<?php wp_list_pages('title_li='); ?>
						</ul>
				
					<h4>By Month:</h4>
						<ul>
							<?php wp_get_archives('type=monthly'); ?>
						</ul>
							
					<h4>By Category:</h4>
						<ul>
							<?php wp_list_categories('sort_column=name&title_li='); ?>
						</ul>
		
				</div>
				
				<div class="archive_right">
					
					<h4>By Post:</h4>
						<ul>
							<?php wp_get_archives('type=postbypost&limit=100'); ?> 
						</ul>
				</div>
                
            </div>
			            
        </div>
		
	</div>
			
<?php include(TEMPLATEPATH."/sidebar_right.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>