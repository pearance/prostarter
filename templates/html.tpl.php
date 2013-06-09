<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
	<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <script>
    Drupal.behaviors.prostarter = {
      attach: function(context, settings) {
        (function ($) {
          /* =============================================================================
            Add 'x' close button and handler to status messages.
            ========================================================================== */
          $.fn.closeButtonMessages = function() {
            $('.messages').each(function() {
              if ($(this).find('a.close').length < 1) {
                $(this).prepend('<a class="close" href="#" title="' + Drupal.t('Close') + '">x</a>');
              }
            });
            $('.messages a.close').click(function(e) {
              e.preventDefault();
              $(this).parent().fadeOut('slow');
            });
          };
          $().closeButtonMessages();
        })(jQuery);
      }
    }
  </script>
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
