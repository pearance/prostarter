<?php
/*
           _     _       _            _   _                       _       _
  __ _  __| | __| |     | |_ ___  ___| |_(_)_ __ ___   ___  _ __ (_) __ _| |
 / _` |/ _` |/ _` |_____| __/ _ \/ __| __| | '_ ` _ \ / _ \| '_ \| |/ _` | |
| (_| | (_| | (_| |_____| ||  __/\__ \ |_| | | | | | | (_) | | | | | (_| | |
 \__,_|\__,_|\__,_|      \__\___||___/\__|_|_| |_| |_|\___/|_| |_|_|\__,_|_|

 */
?>

<a class="brand" href="/">
	<img src="<?php print base_path() . path_to_theme() ?>/gfx/brand.png" alt="">
</a>
<div<?php print $attributes; ?>>
  <?php if (isset($page['content'])) : ?>
    <?php print render($page['content']); ?>
  <?php endif; ?>
</div>
