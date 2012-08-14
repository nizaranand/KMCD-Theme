<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 */
$options = get_option( 'adapt_theme_settings' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<!-- Mobile Specific
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<!-- Title Tag
================================================== -->
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>

<?php if(!empty($options['favicon'])) { ?>
<!-- Favicon
================================================== -->
<link rel="icon" type="image/png" href="<?php echo $options['favicon']; ?>" />
<?php } ?>

<!-- Main CSS
================================================== -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/base.css" />

<!-- Load HTML5 dependancies for IE
================================================== -->
<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lte IE 7]>
	<script src="js/IE8.js" type="text/javascript"></script><![endif]-->
<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/>
<![endif]-->


<!-- WP Head
================================================== -->
<?php if ( is_single() || is_page() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div id="wrap" class="clearfix">

    <header id="masterhead" class="clearfix">
<!--            <div id="logo">

                        <a href="<?php bloginfo( 'url' ); ?>/" title="<?php bloginfo( 'name' ); ?>"><img src="<?php echo $options['upload_mainlogo']; ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>

                    <a href="<?php bloginfo( 'url' ); ?>/" title="<?php bloginfo( 'name' ) ?>"><?php bloginfo( 'name' ); ?></a>


            </div> -->
            <!-- END logo -->

            <nav id="masternav" class="clearfix">
                <?php wp_nav_menu( array(
                    'theme_location' => 'menu',
                    'sort_column' => 'menu_order',
                    'menu_class' => 'sf-menu',
                    'fallback_cb' => 'default_menu'
                )); ?>
            </nav>
            <!-- /masternav -->
    </header><!-- /masterhead -->

    <!-- Homepage tagline -->
    <aside id="home-tagline">
    	<div>
			<h1><a href="<?php bloginfo( 'url' ); ?>/" title="<?php bloginfo( 'name' ); ?>"><span>Meditation</span> in Berlin</a></h1>
			<h2><a href="<?php bloginfo( 'url' ); ?>/" title="<?php bloginfo( 'name' ); ?>">Kadampa Meditationszentrum Deutschland &middot; Zentrum für modernen Buddhismus</a></h2>
		</div>
		<img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl'];?>/lotus.gif" />
    </aside>
    <!-- /home-tagline -->

<div id="main" class="clearfix">
