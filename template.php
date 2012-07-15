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

  /*
  * Implementation of hook_menu_contextual_links_alter().
  * Adding items from the local tasks tabs menu to the contextual links on node full view.
  */
  function prostarter_menu_contextual_links_alter(&$links, $router_item, $root_path) {
    if ($root_path == 'node/%') {
      $ignore = array('node/%/view','node/%/display');
      $paths = array();
      // foreach ($links as $link) {
      //   $paths[$link['path']] = true;
      // }

      $local_tasks = menu_local_tasks();
      foreach($local_tasks['tabs']['output'] as $k=>$item) {
        $link = $item['#link'];
        if (!in_array($link['path'], $ignore) && !array_key_exists($link['path'],$paths)){
          array_push($links, $link);
          $paths[$link['path']] = true;
        }
      }
    }
  }

  /**
  * Implementation of hook_preprocess_hook().
  */
  // hide all tabs (better to control through omega)
  // function prostarter_preprocess_page(&$variables) {
  //   $variables['tabs'] = array();
  // }
