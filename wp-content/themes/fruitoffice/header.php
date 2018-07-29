<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" /> 
<link href="//fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700" rel="stylesheet" /> 
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- Bootstrap -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container-fluid">
	<div class="row">
		<!-- Header Start -->
		<div  id="header">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_header_image() ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>"></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<?php
						wp_nav_menu( array(
							'menu' => '2',
							'menu_class'     => 'nav navbar-nav',
							'container_class'=> 'collapse navbar-collapse right',
							'container_id'	 => 'bs-example-navbar-collapse-1',
							'depth'          => 7
						));
					?>
				</div><!-- /.container-fluid -->
			</nav>
		</div>
		<!-- Header End -->