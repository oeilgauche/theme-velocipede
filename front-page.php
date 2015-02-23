<?php get_header(); ?>
<?php 
    // Photo Slider
    echo do_shortcode("[metaslider id=17]"); 
?>


<div class="row">
	<ul class="large-block-grid-3 feature">
<?php 
// Liens vers les 3 espaces
//$velo_query = new WP_Query('pagename=au-velocipede');
$velo_query = new WP_Query(array(
			'post_type' => 'page',
			'post__in' => array( 20, 8, 22) ));
while ( $velo_query->have_posts() ) {
	$velo_query->the_post();
?>	
		<li>
			<?php the_post_thumbnail(array( 'class' => 'th' )); ?>
			<h4><?php echo get_the_title(); ?></h1>
			<p><?php echo get_post_meta( get_the_ID(), 'space_description', true ); ?></p>
		</li>
<?php
}
wp_reset_postdata();
?>
	</ul>
</div>

<div class="main-container">
	<div class="row">
		<div class="small-12 large-12 columns" role="main">
		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<!--<header>
					<h1 class="entry-title"><?php // the_title(); ?></h1>
				</header>-->
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
					<p><?php the_tags(); ?></p>
				</footer>
			</article>
		<?php endwhile; // End the loop ?>
	
		</div>
	</div>
</div>
<?php 
    // Boutons intermédiaires : Réserver - Préparer votre voyage
?>

<?php 
    // Module Google Maps
    // echo do_shortcode("[wpgmza id=1]");
    echo do_shortcode("[put_wpgm id=1]"); 

?>

<?php get_footer(); ?>
