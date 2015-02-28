<?php
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>
<div class="row">
	<ul class="large-block-grid-2 feature">
<?php 
// Liens vers les 3 espaces
//$velo_query = new WP_Query('pagename=au-velocipede');
$velo_query = new WP_Query(array(
			'post_type' => 'page',
			'post__in' => array( 20, 22),
			'order' => ASC));
while ( $velo_query->have_posts() ) {
	$velo_query->the_post();
?>	
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
			<h2><?php echo get_post_meta( get_the_ID(), 'titre_display', true ); ?></h2>
			<h3><?php echo get_post_meta( get_the_ID(), 'sous_titre', true ); ?></h3>
			<p><?php echo get_post_meta( get_the_ID(), 'space_description', true ); ?></p>
		</li>
<?php
}
wp_reset_postdata();
?>
	</ul>
</div>
	</div>
</div>

<?php get_footer(); ?>
