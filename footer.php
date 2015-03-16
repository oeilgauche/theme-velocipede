</section>

<footer>
	<section class="row visible-for-small-only">
		<div class="small-12 columns">
			<a href="http://bds.hotelcloud.co/">
				<img class="aligncenter" src="http://auvelocipede.dev/wp-content/themes/velocipede/assets/img/images/Bouton-Reserver-Full.png">
			</a>
		</div>
	</section>
	<section class="row">
		<div class="large-8 columns">
			<?php do_action('foundationPress_before_footer'); ?>
			<?php //dynamic_sidebar("footer-widgets"); ?>
			<?php
				
				$secondaire = array(
					'theme_location'  => '',
					'menu'            => 'secondaire',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'inline-list',
					'menu_id'         => 'footer-menu-secondaire',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				
				wp_nav_menu( $secondaire );
				
				?>

			<p>Copyright <?php echo date("o");; ?> Au V&eacute;locip&egrave;de</p>
		</div>
		<div class="large-4 columns">
			<ul class="inline-list social">
				<li class="velo">
					<a href="https://www.facebook.com/pages/Au-V%C3%A9locip%C3%A8de/158095537572405?ref=br_rs" title="Suivez l'actualité du Vélocipède sur Facebook">FacebookVelo</a>
				</li> 
				<li class="lfdac">
					<a href="https://www.facebook.com/lafemmedacote" title="Suivez l'actualité de la Femme d'à côté sur Facebook">FacebookLFDAC</a>
				</li>
			</ul>
		</div>

		<?php do_action('foundationPress_after_footer'); ?>
	</section>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
