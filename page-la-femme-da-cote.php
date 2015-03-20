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

<div class="row room-gallery">
	<div class="large-6 columns">
		<h2>C&ocirc;t&eacute; 1</h2>
		<h2 class="sub"><small>Chambre double</small></h2>
		<?php echo do_shortcode('[ngg_images gallery_ids="5" display_type="photocrati-nextgen_basic_thumbnails"]'); ?>
	</div>
	<div class="large-6 columns">
		<h2>C&ocirc;t&eacute; 2</h2>
		<h2 class="sub"><small>Chambre double + salon : Mini suite</small></h2>
		<?php echo do_shortcode('[ngg_images gallery_ids="6" display_type="photocrati-nextgen_basic_thumbnails"]'); ?>
	</div>

</div>
<div class="row room-gallery">
	<div class="large-6 columns">
		<h2>C&ocirc;t&eacute; 3</h2>
		<h2 class="sub"><small>Chambre double</small></h2>
		<?php echo do_shortcode('[ngg_images gallery_ids="7" display_type="photocrati-nextgen_basic_thumbnails"]'); ?>
	</div>
	<div class="large-6 columns">
		<h2>C&ocirc;t&eacute; 4</h2>
		<h2 class="sub"><small>Chambre double + salon : Mini suite en duplex</small></h2>
		<?php echo do_shortcode('[ngg_images gallery_ids="8" display_type="photocrati-nextgen_basic_thumbnails"]'); ?>
	</div>
</div>

<section class="row reserver">
	<div class="small-12 columns">
		<a data-reveal-id="myModal" href="#" >
			<img class="aligncenter" height="150" width="150" src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/Bouton-Reserver-Full.png">
		</a>
	</div>
</section>

<?php get_footer(); ?>
