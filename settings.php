<?php
$settings['trusted_host_patterns'] = array(
  '^192\.168\.114\.128$',
  '^127\.0\.0\.1$',
  '^localhost$',
);
$databases = [];
$settings['hash_salt'] = '1F0zPPZ_MnM6pVk6iJI6v_K5fTSnQqHqamFceZkvyx5CkUBV_-NF0J5PTctue6d4koj4pUx4jg';
$settings['update_free_access'] = FALSE;

/**
 * Private file path:
 *
 * A local file system path where private files will be stored. This directory
 * must be absolute, outside of the Drupal installation directory and not
 * accessible over the web.
 *
 * Note: Caches need to be cleared when this value is changed to make the
 * private:// stream wrapper available to the system.
 *
 * See https://www.drupal.org/documentation/modules/file for more information
 * about securing private files.
 */
# $settings['file_private_path'] = '';

$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

/**
 * Trusted host configuration.
 *
 * Drupal core can use the Symfony trusted host mechanism to prevent HTTP Host
 * header spoofing.
 *
 * To enable the trusted host mechanism, you enable your allowable hosts
 * in $settings['trusted_host_patterns']. This should be an array of regular
 * expression patterns, without delimiters, representing the hosts you would
 * like to allow.
 *
 * For example:
 * @code
 * $settings['trusted_host_patterns'] = [
 *   '^www\.example\.com$',
 * ];
 * @endcode
 * will allow the site to only run from www.example.com.
 *
 * If you are running multisite, or if you are running your site from
 * different domain names (eg, you don't redirect http://www.example.com to
 * http://example.com), you should specify all of the host patterns that are
 * allowed by your site.
 *
 * For example:
 * @code
 * $settings['trusted_host_patterns'] = [
 *   '^example\.com$',
 *   '^.+\.example\.com$',
 *   '^example\.org$',
 *   '^.+\.example\.org$',
 * ];
 * @endcode
 * will allow the site to run off of all variants of example.com and
 * example.org, with all subdomains included.
 *
 * @see https://www.drupal.org/docs/installing-drupal/trusted-host-settings
 */

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];
$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;
$settings['migrate_node_migrate_type_classic'] = FALSE;
$settings['config_sync_directory'] = '../config/sync';
$databases['default']['default'] = array (
  'database' => 'drupal_dp',
  'username' => 'drupal_user',
  'password' => '1234qwert',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'driver' => 'mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
);
