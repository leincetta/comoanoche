<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >

		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="header section small-padding bg-dark bg-image" style="background-image: url(<?php if (get_header_image() != '') : ?><?php header_image(); ?><?php else : ?><?php echo get_template_directory_uri() . '/images/header.jpg'; ?><?php endif; ?>);">

			<div class="cover"></div>

			<div class="navigation section no-padding bg-dark">

				<div class="navigation-inner section-inner">

					<div class="nav-toggle fleft hidden">

						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>

						<div class="clear"></div>

					</div>

					<ul class="main-menu">

						<!-- Main Menu -->

					</ul>

					 <ul class="fright">

					 	<!-- Social Menu -->

					 </ul>

					 <div class="clear"></div>

				</div> <!-- /navigation-inner -->

			</div> <!-- /navigation -->

			<div class="header-inner section-inner">

				<?php if ( get_theme_mod( 'baskerville_logo' ) ) : ?>

					<div class="blog-logo">

				        <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
				        	<img src='<?php echo esc_url( get_theme_mod( 'baskerville_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
				        </a>

					</div>

				<?php elseif ( get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ) : ?>

						<h1 class="blog-title">
							<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
						</h1>

						<?php if ( get_bloginfo( 'description' ) ) { ?>

							<h3 class="blog-description"><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></h3>

						<?php } ?>

				<?php endif; ?>

			</div> <!-- /header-inner -->

		</div> <!-- /header -->

		<div class="ustream-player">

			<p>Un programa sobre gustos y placeres<br>Todos los jueves en vivo de 21 a 23 hs</p>

			<iframe
					width="100%"
					height="100"
					src="http://www.ustream.tv/embed/22250656?html5ui&showtitle=false"
					allowfullscreen
					webkitallowfullscreen
					scrolling="no"
					frameborder="0"
					style="border: 0 none transparent;">
			</iframe>

		</div>
