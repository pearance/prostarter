<script>
  jQuery(document).ready(function() {
    jQuery("time.timeago").timeago();
  });
</script>

<article<?php print $attributes; ?>>
  <?php
    // Inject workbench info block into node.
    $block = block_load('workbench', 'block');
    $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
    print $output;
  ?>

  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>

  <?php if (!$page && $title): ?>
    <header>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    </header>
  <?php endif; ?>

  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
    <footer class="submitted">
      <?php if (time() - $node->created < 86400): ?>
        <time class="timeago" datetime="<?php print $time_ago; ?>"><?php print $date; ?></time>
      <?php else: ?>
        <?php print $date; ?>
      <?php endif; ?>
      -- <?php print $name; ?>
    </footer>
  <?php endif; ?>

  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</article>
