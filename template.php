<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 *
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

/**
 * Remove width and height attributes from img elements
 */
  function prostarter_preprocess_image(&$variables) {
    unset(
      $variables['width'],
      $variables['height'],
      $variables['attributes']['width'],
      $variables['attributes']['height']
    );
  }



/**
 * Move tabs to contextual links.
 * http://drupal.org/node/1349324#comment-5366604
 */

/**
* Implementation of hook_node_view_alter().
*/
function prostarter_node_view_alter(&$build) {
  // allow contextual links on node pages
  $build['#contextual_links']['node'] = array('node', array($build['#node']->nid));
}



/**
  * Format date implementing hook_preprocess_node().
  * This is for the time ago format.
  */
function prostarter_preprocess_node(&$vars) {
  $node = $vars['node'];
  $vars['date'] = format_date($node->created, 'custom', 'M jS, Y');
  $vars['time_ago'] = format_date($node->created, 'custom', 'c'); // 'c' is the ISO 8601 date format. Since PHP 5
}


/**
  * Implements hook_preprocess_html().
  */
function prostarter_preprocess_html(&$vars) {
  // Add user role as a class to the body element.
  if ($vars['user']) {
    foreach($vars['user']->roles as $key => $role){
      $role_class = 'role-' . str_replace(' ', '-', $role);
      $vars['attributes_array']['class'][] = $role_class;
    }
  }
}

function prostarter_contextual_links_view_alter(&$element, $items) {
  // Check if we have a node link to process
  if (isset($element['#element']['#node']->nid)) {
    unset($element['#links']['node-delete']);
  }
}

function prostarter_menu_contextual_links_alter(&$links, $router_item, $root_path){
  // unset($links['node-delete']);
}
