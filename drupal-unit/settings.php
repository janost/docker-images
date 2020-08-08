<?php

$databases = [];
$settings['hash_salt'] = getenv('HASH_SALT');
$settings['update_free_access'] = FALSE;
# $settings['reverse_proxy'] = TRUE;
# $settings['reverse_proxy_addresses'] = ['a.b.c.d', ...];
# $settings['reverse_proxy_trusted_headers'] = \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_ALL | \Symfony\Component\HttpFoundation\Request::HEADER_FORWARDED;
# $settings['omit_vary_cookie'] = TRUE;
# $settings['cache_ttl_4xx'] = 3600;
# $settings['form_cache_expiration'] = 21600;
# $settings['class_loader_auto_detect'] = FALSE;
# $settings['allow_authorize_operations'] = FALSE;
# $settings['file_chmod_directory'] = 0775;
# $settings['file_chmod_file'] = 0664;
# $settings['file_public_base_url'] = 'http://downloads.example.com/files';
# $settings['file_public_path'] = 'sites/default/files';
# $settings['file_private_path'] = '';
# $settings['file_temp_path'] = '/tmp';
# $settings['session_write_interval'] = 180;
# $settings['locale_custom_strings_en'][''] = [
#   'forum'      => 'Discussion board',
#   '@count min' => '@count minutes',
# ];
# $settings['maintenance_theme'] = 'bartik';
# ini_set('pcre.backtrack_limit', 200000);
# ini_set('pcre.recursion_limit', 200000);
# $config['system.site']['name'] = 'My Drupal site';
# $config['user.settings']['anonymous'] = 'Visitor';
# $config['system.performance']['fast_404']['exclude_paths'] = '/\/(?:styles)|(?:system\/files)\//';
# $config['system.performance']['fast_404']['paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
# $config['system.performance']['fast_404']['html'] = '<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
# $settings['container_base_class'] = '\Drupal\Core\DependencyInjection\Container';
# $settings['yaml_parser_class'] = NULL;
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];
$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;
$settings['migrate_node_migrate_type_classic'] = FALSE;
$databases['default']['default'] = array (
  'database' => getenv('SITE_DB_NAME'),
  'username' => getenv('SITE_DB_USERNAME'),
  'password' => getenv('SITE_DB_PASSWORD'),
  'prefix' => '',
  'host' => getenv('SITE_DB_HOST'),
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
#$settings['config_sync_directory'] = 'sites/default/files/config_c95IBlSkMKpmhUfh1RHrqCp1clOgyh82l7oHKc7TS584fFySkyJrT-FZJn3DDZOeJGXWSE4Osg/sync';
