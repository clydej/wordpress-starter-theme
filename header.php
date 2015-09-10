<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head elements and header.
 *
 * @package WordPress
 * @subpackage The_Client_Name
 * @since The Client Name 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- ADD HEADER CONTENT BELOW -->

	<div class="header">

		<div class="inner">

			<div class="logo">

				<!--	BE SURE TO ADD HEIGHT AND WIDTH TO IMG BELOW -->
				<a href="<?php echo home_url(); ?>/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>

			</div>

			<?php wp_nav_menu( array( 'theme_location' => 'main-nav' ) ); ?>

		</div>

	</div>
