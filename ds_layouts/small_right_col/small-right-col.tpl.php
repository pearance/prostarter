<?php
/**
 * @file
 * Display Suite small_right_col template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $group_left: Rendered content for the "Group Left" region.
 * - $group_left_classes: String of classes that can be used to style the "Group Left" region.
 *
 * - $group_right: Rendered content for the "Group Right" region.
 * - $group_right_classes: String of classes that can be used to style the "Group Right" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $group_left_wrapper; ?> class="ds-group-left<?php print $group_left_classes; ?>">
      <?php print $group_left; ?>
    </<?php print $group_left_wrapper; ?>>

    <<?php print $group_right_wrapper; ?> class="ds-group-right<?php print $group_right_classes; ?>">
      <?php print $group_right; ?>
    </<?php print $group_right_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
