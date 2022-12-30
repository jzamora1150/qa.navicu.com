<?php return array (
  '*::app' => 
  array (
    'name' => 'October CMS',
    'env' => 'local',
    'debug' => true,
    'url' => 'https://navicu.com.ve',
    'asset_url' => NULL,
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'base64:auN4Gc4MU5lcj16hTRY6nadD1GoV14MolcQ7xzzeXrQ=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      1 => 'Illuminate\\Bus\\BusServiceProvider',
      2 => 'Illuminate\\Cache\\CacheServiceProvider',
      3 => 'Illuminate\\Cookie\\CookieServiceProvider',
      4 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      5 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      6 => 'Illuminate\\Hashing\\HashServiceProvider',
      7 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      8 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      9 => 'Illuminate\\Queue\\QueueServiceProvider',
      10 => 'Illuminate\\Redis\\RedisServiceProvider',
      11 => 'Illuminate\\Session\\SessionServiceProvider',
      12 => 'Illuminate\\View\\ViewServiceProvider',
      13 => 'Laravel\\Tinker\\TinkerServiceProvider',
      14 => 'October\\Rain\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      15 => 'October\\Rain\\Database\\DatabaseServiceProvider',
      16 => 'October\\Rain\\Halcyon\\HalcyonServiceProvider',
      17 => 'October\\Rain\\Filesystem\\FilesystemServiceProvider',
      18 => 'October\\Rain\\Validation\\ValidationServiceProvider',
      19 => 'October\\Rain\\Parse\\ParseServiceProvider',
      20 => 'October\\Rain\\Html\\HtmlServiceProvider',
      21 => 'October\\Rain\\Html\\UrlServiceProvider',
      22 => 'October\\Rain\\Network\\NetworkServiceProvider',
      23 => 'October\\Rain\\Scaffold\\ScaffoldServiceProvider',
      24 => 'October\\Rain\\Flash\\FlashServiceProvider',
      25 => 'October\\Rain\\Mail\\MailServiceProvider',
      26 => 'October\\Rain\\Argon\\ArgonServiceProvider',
      27 => 'October\\Rain\\Resize\\ResizeServiceProvider',
      28 => 'System\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Db' => 'Illuminate\\Support\\Facades\\DB',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Url' => 'Illuminate\\Support\\Facades\\URL',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Model' => 'October\\Rain\\Database\\Model',
      'Event' => 'October\\Rain\\Support\\Facades\\Event',
      'Mail' => 'October\\Rain\\Support\\Facades\\Mail',
      'Block' => 'October\\Rain\\Support\\Facades\\Block',
      'File' => 'October\\Rain\\Support\\Facades\\File',
      'Config' => 'October\\Rain\\Support\\Facades\\Config',
      'Seeder' => 'October\\Rain\\Database\\Updates\\Seeder',
      'Flash' => 'October\\Rain\\Support\\Facades\\Flash',
      'Input' => 'October\\Rain\\Support\\Facades\\Input',
      'Form' => 'October\\Rain\\Support\\Facades\\Form',
      'Html' => 'October\\Rain\\Support\\Facades\\Html',
      'Http' => 'October\\Rain\\Support\\Facades\\Http',
      'Str' => 'October\\Rain\\Support\\Facades\\Str',
      'Markdown' => 'October\\Rain\\Support\\Facades\\Markdown',
      'Yaml' => 'October\\Rain\\Support\\Facades\\Yaml',
      'Ini' => 'October\\Rain\\Support\\Facades\\Ini',
      'Twig' => 'October\\Rain\\Support\\Facades\\Twig',
      'DbDongle' => 'October\\Rain\\Support\\Facades\\DbDongle',
      'Schema' => 'October\\Rain\\Support\\Facades\\Schema',
      'Resizer' => 'October\\Rain\\Support\\Facades\\Resizer',
      'Cms' => 'Cms\\Facades\\Cms',
      'System' => 'System\\Facades\\System',
      'Backend' => 'Backend\\Facades\\Backend',
      'BackendUi' => 'Backend\\Facades\\BackendUi',
      'BackendMenu' => 'Backend\\Facades\\BackendMenu',
      'BackendAuth' => 'Backend\\Facades\\BackendAuth',
      'AjaxException' => 'October\\Rain\\Exception\\AjaxException',
      'SystemException' => 'October\\Rain\\Exception\\SystemException',
      'ApplicationException' => 'October\\Rain\\Exception\\ApplicationException',
      'ValidationException' => 'October\\Rain\\Exception\\ValidationException',
    ),
    'timezone' => 'UTC',
  ),
  '*::system' => 
  array (
    'load_modules' => NULL,
    'disable_plugins' => NULL,
    'link_policy' => 'detect',
    'relative_links' => false,
    'plugins_path' => NULL,
    'plugins_asset_url' => NULL,
    'themes_path' => NULL,
    'themes_asset_url' => NULL,
    'storage_path' => NULL,
    'cache_path' => NULL,
    'default_mask' => 
    array (
      'file' => NULL,
      'folder' => NULL,
    ),
    'storage' => 
    array (
      'uploads' => 
      array (
        'disk' => 'local',
        'folder' => 'uploads',
        'path' => '/storage/app/uploads',
      ),
      'media' => 
      array (
        'disk' => 'local',
        'folder' => 'media',
        'path' => '/storage/app/media',
      ),
      'resources' => 
      array (
        'disk' => 'local',
        'folder' => 'resources',
        'path' => '/storage/app/resources',
      ),
    ),
    'enable_csrf_protection' => true,
    'convert_line_endings' => false,
    'restrict_base_dir' => true,
    'unencrypt_cookies' => 
    array (
    ),
    'auto_mirror_public' => false,
    'auto_rollback_plugins' => false,
  ),
  '*::backend' => 
  array (
    'uri' => '/backend',
    'skin' => 'Backend\\Skins\\Standard',
    'brand' => 
    array (
      'enabled' => false,
      'app_name' => 'October CMS',
      'tagline' => 'Getting Back to Basics',
      'menu_mode' => 'icons',
      'favicon_path' => '~/app/assets/images/logo.png',
      'logo_path' => '~/app/assets/images/logo.png',
      'stylesheet_path' => '~/app/assets/less/styles.less',
      'login_background_type' => 'color',
      'login_background_color' => '#fef6eb',
      'login_background_wallpaper_size' => 'auto',
      'login_image_type' => 'autumn_images',
      'login_custom_image' => '~/app/assets/images/loginimage.png',
    ),
    'force_secure' => false,
    'force_remember' => true,
    'force_single_session' => false,
    'password_policy' => 
    array (
      'min_length' => 4,
      'require_uppercase' => false,
      'require_lowercase' => false,
      'require_number' => false,
      'require_nonalpha' => false,
    ),
    'timezone' => 'UTC',
  ),
  '*::view' => 
  array (
    'paths' => 
    array (
    ),
    'compiled' => false,
  ),
  '*::logging' => 
  array (
    'default' => 'single',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/home/desarrollo/Documents/Dev/navicu.com/storage/logs/system.log',
        'level' => 'debug',
        'permission' => NULL,
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/home/desarrollo/Documents/Dev/navicu.com/storage/logs/system.log',
        'level' => 'debug',
        'days' => 14,
        'permission' => NULL,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'October CMS Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  '*::tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
  '*::database' => 
  array (
    'fetch' => 8,
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'producción',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'producción',
        'username' => 'mroot',
        'password' => '1234',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => 'InnoDB',
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'producción',
        'username' => 'mroot',
        'password' => '1234',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'producción',
        'username' => 'mroot',
        'password' => '1234',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'october_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  '*::filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/home/desarrollo/Documents/Dev/navicu.com/storage/app',
        'url' => '/storage/app',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => 'your-key',
        'secret' => 'your-secret',
        'region' => 'your-region',
        'bucket' => 'your-bucket',
      ),
      'rackspace' => 
      array (
        'driver' => 'rackspace',
        'username' => 'your-username',
        'key' => 'your-key',
        'container' => 'your-container',
        'endpoint' => 'https://identity.api.rackspacecloud.com/v2.0/',
        'region' => 'IAD',
      ),
    ),
  ),
  'rainlab.debugbar::config' => 
  array (
    'enabled' => NULL,
    'allow_public_access' => false,
    'store_all_requests' => false,
    'except' => 
    array (
      0 => 'telescope*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => '/home/desarrollo/Documents/Dev/navicu.com/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => false,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'timeline' => false,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => true,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
  ),
  '*::debugbar' => 
  array (
    'enabled' => NULL,
    'except' => 
    array (
      0 => 'telescope*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => '/home/desarrollo/Documents/Dev/navicu.com/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'editor' => 'phpstorm',
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => false,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'timeline' => false,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => true,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
    'theme' => 'auto',
    'debug_backtrace_limit' => 50,
    'allow_public_access' => false,
    'store_all_requests' => false,
  ),
);
