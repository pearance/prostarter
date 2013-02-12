<a href="/">
	<img src="<?php print base_path() . path_to_theme() ?>/gfx/brand.png" alt="">
</a>
<div id="user-login-content">
	<?php print drupal_render($form['name']); ?>
	<?php print drupal_render($form['pass']); ?>
	<?php print drupal_render($form['actions']); ?>
	<a href="password">forgot my password</a>
</div>

<?php print drupal_render($form['form_build_id']);?>
<?php print drupal_render($form['form_id']); ?>

