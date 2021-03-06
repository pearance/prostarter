<?php
/*
                      _             _
  _ __  _ __ ___  ___| |_ __ _ _ __| |_ ___ _ __
 | '_ \| '__/ _ \/ __| __/ _` | '__| __/ _ \ '__|
 | |_) | | | (_) \__ \ || (_| | |  | ||  __/ |
 | .__/|_|  \___/|___/\__\__,_|_|   \__\___|_|
 |_|                      _       _
 | |_ ___ _ __ ___  _ __ | | __ _| |_ ___
 | __/ _ \ '_ ` _ \| '_ \| |/ _` | __/ _ \
 | ||  __/ | | | | | |_) | | (_| | ||  __/
  \__\___|_| |_| |_| .__/|_|\__,_|\__\___|
                   |_|
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
	// unset($vars['content']['links']['node']['#links']['node-readmore']);
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

function prostarter_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  	'render element' => 'form',
  	'path' => drupal_get_path('theme', 'prostarter') . '/templates',
  	'template' => 'user-login',
  	'preprocess functions' => array(
  		'prostarter_preprocess_user_login'
  	),
 	);

 	$items['user_pass'] = array(
 		'render element' => 'form',
 		'path' => drupal_get_path('theme', 'prostarter') . '/templates',
 		'template' => 'user-pass',
 		'preprocess functions' => array(
 			'prostarter_preprocess_user_pass'
 		),
	);

	return $items;
}

function prostarter_form_alter(&$form, $form_state, $form_id) {
  if ($form_id == 'testimonial_node_form') {
    $form['actions']['submit']['#value'] = 'Submit';
  }
}
