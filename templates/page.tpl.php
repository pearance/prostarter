<?php
/*
  _ __   __ _  __ _  ___
 | '_ \ / _` |/ _` |/ _ \
 | |_) | (_| | (_| |  __/
 | .__/ \__,_|\__, |\___|
 |_|          |___/

 */
?>

<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>

  <?php if (isset($page['content'])) : ?>
    <?php print render($page['content']); ?>
  <?php endif; ?>

  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>
