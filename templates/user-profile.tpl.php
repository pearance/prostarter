<?php
/*
                                            __ _ _
  _   _ ___  ___ _ __      _ __  _ __ ___  / _(_) | ___
 | | | / __|/ _ \ '__|____| '_ \| '__/ _ \| |_| | |/ _ \
 | |_| \__ \  __/ | |_____| |_) | | | (_) |  _| | |  __/
  \__,_|___/\___|_|       | .__/|_|  \___/|_| |_|_|\___|
                          |_|
 */

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */
?>
<?php //dsm($user_profile']); ?>
<div class="profile container-12"<?php print $attributes; ?>>
	<div id="left-col" class="grid-7 alpha">

		<div id="card">
			<div id="left-card">
				<?php print render($user_profile['user_picture']); ?>
			</div>

			<div id="right-card">
				<h1 id="name">
					<?php print render($user_profile['field_first_name']['#items'][0]['value']); ?>
					<?php print render($user_profile['field_last_name']['#items'][0]['value']); ?>
				</h1>

				<?php print render($user_profile['field_title']); ?>

				<div id="social-icons">
					<?php print render($user_profile['field_linkedin']); ?>
					<?php print render($user_profile['field_facebook']); ?>
					<?php print render($user_profile['field_twitter']); ?>
					<?php print render($user_profile['field_google_plus']); ?>
				</div>
			</div>
		</div>

		<?php print render($user_profile['field_pro_bio']); ?>
	</div>

	<div id="right-col" class="grid-5 omega">
		<h2 class="block-title">Specialties</h2>
		<?php print render($user_profile['field_specialties']); ?>

		<h2 class="block-title">Education</h2>
		<?php print render($user_profile['field_education']); ?>

		<h2 class="block-title">Awards & Organization</h2>
		<?php print render($user_profile['field_awards_organizations']); ?>

		<h2 class="block-title">Office Information</h2>
		<?php print render($user_profile['field_office']); ?>

  	<?php //print render($user_profile); ?>
	</div>
</div>
