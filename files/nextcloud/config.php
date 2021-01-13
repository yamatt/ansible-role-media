<?php
$CONFIG = array (
  'overwritewebroot' => '/nextcloud',
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/data/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/html/data/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
);
