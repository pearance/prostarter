<?php
/*                         _             _
  _   _ ___  ___ _ __     | | ___   __ _(_)_ __
 | | | / __|/ _ \ '__|____| |/ _ \ / _` | | '_ \
 | |_| \__ \  __/ | |_____| | (_) | (_| | | | | |
  \__,_|___/\___|_|       |_|\___/ \__, |_|_| |_|
                                   |___/
*/
?>

<a class="brand" href="/">
	<img src="<?php print base_path() . path_to_theme() ?>/gfx/brand.png" alt="">
</a>
<div id="user-login-content">
	<?php print drupal_render($form['name']); ?>
	<?php print drupal_render($form['pass']); ?>
	<?php print drupal_render($form['actions']); ?>
	<a class="forgot-login-link" href="password">forgot my password</a>
</div>

<?php print drupal_render($form['form_build_id']);?>
<?php print drupal_render($form['form_id']); ?>

