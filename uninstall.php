<?php

/**
 * Krompago uninstall routine.
 *
 * Removes plugin options when the user deletes the plugin from the WordPress
 * admin. The plugin stores no custom tables.
 *
 * @package Surcharge
 */

defined('WP_UNINSTALL_PLUGIN') || exit;

/**
 * Remove this plugin's options from the current site.
 */
function surcharge_uninstall_site(): void
{
    delete_option('surcharge_settings');
    delete_option('surcharge_db_version');
}

// Options are per site, so a network uninstall has to visit every site.
if (is_multisite()) {
    foreach (get_sites(['fields' => 'ids', 'number' => 0]) as $surcharge_site_id) {
        switch_to_blog((int) $surcharge_site_id);
        surcharge_uninstall_site();
        restore_current_blog();
    }
    unset($surcharge_site_id);
} else {
    surcharge_uninstall_site();
}

// The PRO banner's dismissal is stored per user, so it belongs to the
// plugin rather than to the site content. User meta is global, not
// per-site, which is why this uses delete_metadata's \$delete_all rather
// than a loop over the users of one blog.
delete_metadata('user', 0, 'surcharge_pro_banner_dismissed', '', true);
