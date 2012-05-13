<?php

/**
 * @file
 * Display Suite small_right_col configuration.
 */

function ds_small_right_col() {
  return array(
    'label' => t('Small Right Column'),
    'regions' => array(
      'group_left' => t('Left'),
      'group_right' => t('Right'),
    ),
    // Uncomment if you want to include a CSS file for this layout (small_right_col.css)
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (small_right_col.png)
    'image' => TRUE,
  );
}
