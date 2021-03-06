<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coolmat
 */

 global $item_number
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- title on right -->
		<h1 class="entry-title">
			<?php the_title(); ?>
		</h1>
		<!-- item number -->
		<div class="entry-number">
			<?php echo $item_number; ?>
		</div>
		<!-- price [content] on the left -->
		<div class="entry-price">
			<?php the_content(); ?>
		</div>
	</header><!-- .entry-header -->

	<?php coolmat_post_thumbnail(); ?>

	

	
</article><!-- #post-<?php the_ID(); ?> -->
