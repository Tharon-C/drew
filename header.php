<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper clear">

			<!-- header -->
			<header class="header clear" role="banner">
                <div class="business-info section-top clear">
                    
                    <div class="page-wrapper clear">
                   
                    <?php dynamic_sidebar('top-r'); ?>
				</div>
                    
                </div>
                	<div class="p-wrap"><!-- logo -->
 					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
                    </div>
                </div><!-- /logo -->

					
				<nav class="nav clear" role="navigation"><!-- nav -->
                    <div class="page-wrapper clear">    
                        <?php  add_custom_nav_menu('menu-1'); ?>
             		</div>
				</nav><!-- /nav -->
					
				<div class="p-wrap">
					<div class="col-1-2 l-full pad-t-100px p-r">
					 <?php dynamic_sidebar('social'); ?>
					</div>
				</div>
      		</header>
			<!-- /header -->
