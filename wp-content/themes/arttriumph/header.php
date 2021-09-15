<?php
/**
 * Header file for the Arttriumph WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage ArtTriumph
 * @since ArtTriumph 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group page-title text-center border-bot" role="banner">

            <h1 class="heading">ArtTriumph Gallery</h1>
			<ul class="social-list list-inline">
                <li class="list-inline-item"><a href="#">Your Visit</a></li>
                <li class="list-inline-item"><a href="#">Discover</a></li>
                <li class="list-inline-item"><a href="#">Our Program</i></a></li>
                <li class="list-inline-item"><a href="#">About us</i></a></li>
            </ul>

		</header><!-- #site-header -->