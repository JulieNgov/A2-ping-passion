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

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Revêtements</h1>
			</header><!-- .page-header -->

			<ul class="rev-filter">
				<li>Offensif(+/-)</li>
				<li>Allround(+/-)</li>
				<li>Defense</li>
			</ul>
			<section class="rev-card-wrap">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<section class="rev-card">
					<div class="rev-card-content">
						<?php the_post_thumbnail(); ?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
				</section>

		<?php	endwhile; ?>
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
