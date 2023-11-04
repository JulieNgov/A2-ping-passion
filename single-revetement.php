<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping-passion
 */

 $dataRev = get_fields();

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

					<section class="rev-page-card">
						<div class="rev-page-img">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="rev-content">
							<div class="info-rev">
								<h2><?php the_title(); ?></h2>
								<div class="rev-desc">
									<p>Rapidité</p>
									<?= $dataRev['rapidite'] ?>
								</div>
								<div class="rev-desc">
									<p>Adhérence</p>
									<?= $dataRev['adherence'] ?>
								</div>
								<div class="rev-desc">
									<p>Contrôle</p>
									<?= $dataRev['controle'] ?>
								</div>
								<div class="rev-desc">
									<p>Epaisseur</p>
									<?= $dataRev['epaisseur'] ?>
								</div>
							</div>
							<div class="rev-page-description">
								<p><?php the_content(); ?></p>
							</div>
							<div class="rev-btn">
								<button>Acheter</button>
							</div>
						</div>
					</section>
<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
