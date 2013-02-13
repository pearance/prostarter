<?php
/*
  _   _ ___  ___ _ __      _ __   __ _ ___ ___
 | | | / __|/ _ \ '__|____| '_ \ / _` / __/ __|
 | |_| \__ \  __/ | |_____| |_) | (_| \__ \__ \
  \__,_|___/\___|_|       | .__/ \__,_|___/___/
                          |_|
*/
?>

<?php //drupal_set_message("Further instructions have been sent to your e-mail address."); ?>
<a class="brand" href="/">
	<img src="<?php print base_path() . path_to_theme() ?>/gfx/brand.png" alt="">
</a>
<div id="user-login-content">
	<?php print drupal_render($form['name']); ?>
	<?php print drupal_render($form['pass']); ?>
	<?php print drupal_render($form['actions']); ?>
	<a class="forgot-login-link" href="login">log in</a>
</div>

<?php print drupal_render($form['form_build_id']);?>
<?php print drupal_render($form['form_id']); ?>

