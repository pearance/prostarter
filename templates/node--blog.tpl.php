<?php
/*
  _     _                    __       _ _
 | |__ | | ___   __ _       / _|_   _| | |
 | '_ \| |/ _ \ / _` |_____| |_| | | | | |
 | |_) | | (_) | (_| |_____|  _| |_| | | |
 |_.__/|_|\___/ \__, |     |_|  \__,_|_|_|
                |___/
*/
?>

<?php // dsm($node); ?>
<?php // dsm($content); ?>

<script>
	jQuery(document).ready(function() {
		jQuery("time.timeago").timeago();
	});
</script>

<article<?php print $attributes; ?>>
	<?php ### HEADER ### ?>
	<?php print render($title_prefix); ?>
	<header>
		<h2<?php print $title_attributes; ?>>
			<a href="<?php print $node_url ?>" title="<?php print $title ?>">
				<?php print $title ?>
			</a>
		</h2>
	</header>
	<?php print render($title_suffix); ?>


	<?php ### BODY ### ?>
	<?php
		// Inject workbench info block into node.
		$block = block_load('workbench', 'block');
		$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
		print $output;
	?>

	<?php hide($content['comments']); ?>

	<div<?php print $content_attributes; ?>>
		<?php	print render($content['sharethis']); ?>
		<?php print render($content['field_title_graphic']); ?>

		<?php if ($display_submitted): ?>
			<div class="field-submitted">
				<?php // print $user_picture; ?>
				<?php if (time() - $node->created < 31536000): ?>
					<time class="timeago" datetime="<?php print $time_ago; ?>"><?php print $date; ?></time>
				<?php else: ?>
					Posted <?php print $date; ?>
				<?php endif; ?>
					by <?php print $name; ?>
			</div>
		<?php endif; ?>

		<?php if (!empty($content['links'])): ?>
			<?php print render($content['links']); ?>
		<?php endif; ?>
		<?php print render($content['body']); ?>
		<?php	print render($content['field_specialties']); ?>
		<?php print render($content); ?>
	</div>


	<?php ### FOOTER ### ?>
	<footer class="clearfix">
		<?php // print render($content['comments']); ?>
	</footer>
</article>
