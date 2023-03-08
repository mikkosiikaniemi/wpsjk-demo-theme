<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div>

		<header>
			<nav>
				<a href="<?php echo esc_url( get_home_url() ); ?>">🏠</a>
				<?php wp_nav_menu(); ?>
			</nav>
		</header>

		<main>

			<?php
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) :
					?>

			<article class="post">
				<?php the_post(); // Initialize the post object in a loop. ?>
				<?php the_title( '<h1>', '</h1>' ); // Print the title. ?>
				<?php the_excerpt(); // Print the content. ?>
				<a href="<?php echo esc_url( get_permalink() ); ?>">Read the full post</a>
			</article>

					<?php
				endwhile;
			endif;
			?>

		</main>

		<footer >
			<p>Proudly powered by WordPress</p>
		</footer>

	</div>

	<?php wp_footer(); ?>

</body>
</html>
