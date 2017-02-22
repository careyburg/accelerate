<?php
/**
 * The template for displaying the case studies archive page. 
 
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field('image_1');
				$size = "full";
				$services = get_field('services');
			?>

		<aside class="case-study-sidebar">
			<h2><a href="<?php the_permalink() ; ?>"><?php the_title(); ?></a></h2>
			<p><?php echo $services; ?></p>
			
			<?php the_excerpt(); ?>

			<p><strong><a href="<?php the_permalink() ; ?>">View Project</a></strong></p>
		</aside>

			<div class="case-study-images">
				<?php if($image_1) { 
                	echo wp_get_attachment_image( $image_1, $size );
				} ?>
			</div>
			
<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>