<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/

add_filter( 'nav_menu_link_attributes', 'my_nav_menu_attribs', 10, 3 );
function my_nav_menu_attribs( $atts, $item, $args )
{
  // The ID of the target menu item
  $menu_target = 26;

  // inspect $item
  if ($item->ID == $menu_target) {
    $atts['data-reveal-id'] = 'myModal';
  }
  return $atts;
}


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

?>
