<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ping-passion
 */

get_header();
?>

	<main id="primary" class="site-main-bois">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Boutique</h1>
				<h2>Les bois</h2>
			</header><!-- .page-header -->
			<section class="bois-wrapper">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<article class="bois-card">
					<?php the_post_thumbnail(); ?>
					<div class="bois-card-content">
						<h2><?php the_title(); ?></h2>
						<p><?php the_excerpt(); ?></p>
						
					</div>
					<div class="bois-link">
						<a href="<?php the_permalink(); ?>">En savoir plus</a>
					</div>
				</article>

		<?php	endwhile;

		?>
				</section>

		<?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
