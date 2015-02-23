<?php
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php
	if (get_field('bandeau_de_page')) {
	// put the field array into a variable
	$imgarray = get_field( 'bandeau_de_page' );
	?>
	<img src="<?php echo $imgarray['url'] ; ?>" alt=""/>
	<?php } //end if ?>

<?php endwhile; // end of the loop. ?>

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

	</div>
</div>

<div class="row">
	<div class="large-6 columns">
		<h2>V&eacute;lo 1</h2>
		<?php echo do_shortcode('[ngg_images gallery_ids="1" display_type="photocrati-nextgen_basic_thumbnails"]'); ?>
	</div>
	<div class="large-6 columns">
		<h2>V&eacute;lo 2</h2>
		<?php echo do_shortcode('[ngg_images gallery_ids="2" display_type="photocrati-nextgen_basic_thumbnails"]'); ?>
	</div>

</div>
<div class="row bottom-row">
	<div class="large-6 columns">
		<h2>V&eacute;lo 3</h2>
		<?php echo do_shortcode('[ngg_images gallery_ids="3" display_type="photocrati-nextgen_basic_thumbnails"]'); ?>
	</div>
	<div class="large-6 columns">
		<h2>V&eacute;lo 4</h2>
		<?php echo do_shortcode('[ngg_images gallery_ids="4" display_type="photocrati-nextgen_basic_thumbnails"]'); ?>
	</div>

</div>


<?php get_footer(); ?>
