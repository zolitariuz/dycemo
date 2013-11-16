<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link rel="Shortcut Icon" href="<?php echo bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.tipTip.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/superfish/superfish.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/superfish/hoverIntent.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flow.1.1.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/iepngfix_tilebg.js"></script>

<script type="text/javascript">
    var $j = jQuery.noConflict();
	$j(function() {
        $j("div#controller").jFlow({
            slides: "#slides",
            width: "960px",
            height: "320px",
			timer: <?php echo ot_option('slider_interval'); ?>,
			duration: 400
        });
    });
</script>

<script type="text/javascript">
$j(function() {
	$j(".tip").tipTip();
});
</script>

<script type="text/javascript"> 
     $j(document).ready(function() { 
        $j('.menu').superfish(); 
    }); 
</script>

<style type="text/css">
	img, div, a, input, body { 
		behavior: url(<?php bloginfo('template_url'); ?>/images/iepngfix.htc);
	}
</style>

</head>

<body <?php if(function_exists('body_class')) body_class(); ?>>

<div id="wrap">

    <div id="header">
        <h1 id="title"><a href="<?php echo get_option('home'); ?>/" title="Home"><?php bloginfo('name'); ?></a></h1>
    </div>
    
    <div id="navbar" <?php if (is_home()) { echo " class=\"homenav\""; }?>>
    
        <?php if ( function_exists('wp_nav_menu') ) { // Check for 3.0+ menus
        wp_nav_menu( array( 'title_li' => '', 'depth' => 4, 'container_class' => 'menu' ) ); }
        else {?>
        <ul class="menu"><?php wp_list_categories('title_li=&depth=4'); wp_list_pages('title_li=&depth=4'); ?></ul>
        <?php } ?>
        
        <?php if(ot_option('nav_right') == 'Yes') { ?>
        
            <div class="navbarright">
                <div id="navicons">
                    <?php if(ot_option('social_rss') == 1) { ?><a href="<?php echo ot_option('social_rss_url'); ?>" target="_blank"><img class="navicon" src="<?php bloginfo('template_url'); ?>/images/rss_icon.png" title="RSS Feed" alt="RSS" /></a><?php } else { } ?>
                    <?php if(ot_option('social_facebook') == 1) { ?><a href="<?php echo ot_option('social_facebook_url'); ?>" target="_blank"><img class="navicon" src="<?php bloginfo('template_url'); ?>/images/facebook_icon.png" title="Facebook" alt="Facebook" /></a><?php } else { } ?>
                    <?php if(ot_option('social_twitter') == 1) { ?><a href="<?php echo ot_option('social_twitter_url'); ?>" target="_blank"><img class="navicon" src="<?php bloginfo('template_url'); ?>/images/twitter_icon.png" title="Twitter" alt="Twitter" /></a><?php } else { } ?>
                </div>
                <div id="search_nav">
                    <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                    <div class="searchinput"><input type="text"
                    class="inputbox" value="Search Here" onfocus="if (this.value == 'Search Here') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search Here';}" name="s" id="s" />
                    </div>
                    </form>
                </div>
            </div>
            
        <?php } else { ?>
    	<?php } ?>
            
    </div>

<div style="clear:both;"></div>