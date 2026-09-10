<?php

/**
 * Surcharge uninstall routine.
 *
 * Removes plugin options when the user deletes the plugin from the WordPress
 * admin. The plugin stores no custom tables.
 *
 * @package Surcharge
 */

defined('WP_UNINSTALL_PLUGIN') || exit;

delete_option('surcharge_settings');
delete_option('surcharge_db_version');

// The PRO banner's dismissal is stored per user, so it belongs to the
// plugin rather than to the site content. User meta is global, not
// per-site, which is why this uses delete_metadata's \$delete_all rather
// than a loop over the users of one blog.
delete_metadata('user', 0, 'surcharge_pro_banner_dismissed', '', true);
