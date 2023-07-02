<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'redis' =>
  array (
    'host' => 'redis',
    'password' => '{{ redis pass }}',
    'port' => 6379,
  ),
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => '',
  'passwordsalt' => '',
  'secret' => '',
  'trusted_domains' =>
  array (
    0 => '{{ nextcloud host }}',
    1 => '{{ onlyoffice host }}',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => '27.0.0.8',
  'overwrite.cli.url' => 'https://{{ nextcloud host }}',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'oc_admin',
  'dbpassword' => ' {{ db password }}',
  'installed' => true,
  'maintenance' => false,
  'loglevel' => 2,
  'default_phone_region' => 'RU',
  'overwriteprotocol' => 'https',
  'mail_from_address' => 'admin',
  'mail_smtpmode' => 'smtp',
  'mail_sendmailmode' => 'smtp',
  'mail_domain' => '{{ mail domail }}',
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtphost' => '{{ smtp host }}',
  'mail_smtpport' => '25',
  'mail_smtpauth' => 1,
  'mail_smtpname' => '{{ mail smtp name }}',
  'mail_smtppassword' => '{{ mail smtp pass }}',
  'onlyoffice' =>
  array (
    'verify_peer_off' => true,
    'jwt_secret' => '{{ /etc/onlyoffice/documentserver/local.json }}',
    'jwt_header' => 'AuthorizationJwt',
    'DocumentServerUrl' => 'https://{{ onlyoffice host }}/',
    'DocumentServerInternalUrl' => 'https://{{ onlyoffice host }}/',
    'StorageUrl' => 'https://{{ nextcloud host }}',
  ),
);
