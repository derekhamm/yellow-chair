<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yellow_Chair
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		
		<?php if (is_page('projects')) : ?>

<div class="project-grid">
<?php global $post; // required
$args = array(
'category_name' => 'projects',  
'posts_per_page' => -1
);
$custom_posts = get_posts($args);
foreach($custom_posts as $post) : setup_postdata($post);
	?> <div class="article">

		<div class="article-image">
			<?php yellow_chair_post_thumbnail(); ?>
		</div>
		<div class="article-content">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="excerpt"><?php the_excerpt(); ?></div>
		</div>

 </div>
<?php endforeach; ?>
</div>

<?php else : ?>
<?php endif; ?>

<?php if (is_page('design')) : ?>

<div class="project-grid">
<?php global $post; // required
$args = array(
'category_name' => 'design',  
'posts_per_page' => -1
);
$custom_posts = get_posts($args);
foreach($custom_posts as $post) : setup_postdata($post);
	?> <div class="article">

		<div class="article-image">
			<?php yellow_chair_post_thumbnail(); ?>
		</div>
		<div class="article-content">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="excerpt"><?php the_excerpt(); ?></div>
		</div>

 </div>
<?php endforeach; ?>
</div>

<?php else : ?>
<?php endif; ?>

<?php if (is_page('teaching')) : ?>

<div class="project-grid">
<?php global $post; // required
$args = array(
'category_name' => 'teaching',  
'posts_per_page' => -1
);
$custom_posts = get_posts($args);
foreach($custom_posts as $post) : setup_postdata($post);
	?> <div class="article">

		<div class="article-image">
			<?php yellow_chair_post_thumbnail(); ?>
		</div>
		<div class="article-content">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="excerpt"><?php the_excerpt(); ?></div>
		</div>

 </div>
<?php endforeach; ?>
</div>

<?php else : ?>
<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
