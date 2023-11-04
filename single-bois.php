<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping-passion
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>
			<section class="bois-page-card">
				<div class="bois-page-img">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="bois-content">
					<div class="info-bois">
						<p>Les bois</p>
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="bois-btn">
						<button>Ajouter au panier</button>
						<button class='bois-buy'>Acheter</button>
					</div>
					<div class="bois-page-description">
						<p><?php the_content(); ?></p>
					</div>
				</div>
			</section>

<?php

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
