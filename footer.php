</section>

<footer>
	<section class="row">
		<?php do_action('foundationPress_before_footer'); ?>
		<?php //dynamic_sidebar("footer-widgets"); ?>
		<?php
			$principal = array(
				'theme_location'  => '',
				'menu'            => 'principal',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'inline-list',
				'menu_id'         => 'footer-menu-principal',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => -1,
				'walker'          => ''
			);
			
			wp_nav_menu( $principal );
			
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
