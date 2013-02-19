<?php
/*

 */
?>
<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
	<head<?php print $rdf->profile; ?>>
  	<?php print $head; ?>
  	<title><?php print $head_title; ?></title>
  	<?php print $styles; ?>
		<link rel="stylesheet" href="<?php print base_path() . path_to_theme(); ?>/css/global.css">
  	<?php print $scripts; ?>
  	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body<?php print $attributes;?>>
		<img class="brand" src="<?php print base_path() . path_to_theme(); ?>/gfx/brand.png" alt="">
  	<h2>Our site is currently undergoing routine maintenance.</h2>
		<div id="container">
			<p>We will be online shortly.</p>
			<p class="small">Mean while... give us a call</p>
			<div id="phone-content">
				<p class="phone">888-888-8888</p>
				<p class="regular">or<br />network with us.</p>
				<div id="social-icons">
					<a href="http://linkedin.com" target="blank"><img src="<?php print base_path() . path_to_theme(); ?>/gfx/icons/linkedin.png" alt="LinkedIn" /></a>
					<a href="http://facebook.com" target="blank"><img src="<?php print base_path() . path_to_theme(); ?>/gfx/icons/facebook.png" alt="Facebook" /></a>
					<a href="http://twitter.com" target="blank"><img src="<?php print base_path() . path_to_theme(); ?>/gfx/icons/twitter.png" alt="Twitter" /></a>
					<a href="http://plus.google.com" target="blank"><img src="<?php print base_path() . path_to_theme(); ?>/gfx/icons/googleplus.png" alt="Google+" /></a>
				</div>
			</div>
			<p id="address">
				35 Journal Square Plaza<br />
				Jersey City, NJ 07306<br /><br />

				Telephone: 201-777-9999<br />
				FAX: 201-888-4444<br /><br />

				johndoe@domain.com<br />
				Mon-Fri | 9am-5pm
				<img src="<?php print base_path() . path_to_theme(); ?>/gfx/qr-code-hold.jpg" alt="">
			</p>
		</div>
	</body>
</html>

