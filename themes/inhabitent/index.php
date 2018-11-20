<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
   			$args = array( 'post_type' => 'post', 'postsperpage=3', 'order' => 'ASC' );
   			$news_posts = get_posts( $args ); // returns an array of posts
		?>

		<?php foreach ( $news_posts as $post ) : setup_postdata( $post ); ?>
   		<?php /* Content from your array of post results goes here */ ?>
		<?php endforeach; wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
