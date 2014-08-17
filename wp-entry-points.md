## WordPress Entry Points (wp-load.php occurrences)

1. frontend: wp-blog-header.php:12 `!is_admin()`
1. admin GET request: wp-admin/admin.php:30 `is_admin()`
1. admin POST request: wp-admin/admin-post.php:15 `is_admin()`
1. admin upload: wp-admin/async-upload.php:16 `@$_SERVER['SCRIPT_FILENAME'] === ABSPATH . 'wp-admin/async-upload.php'`
1. AJAX call: wp-admin/admin-ajax.php:20 `defined('DOING_AJAX') && DOING_AJAX`
1. WordPress cron webserver/CLI: wp-cron.php:26 `defined('DOING_CRON') && DOING_CRON` `php_sapi_name() === 'cli'`
1. XML-RPC protocol: xmlrpc.php:29 `defined('XMLRPC_REQUEST') && XMLRPC_REQUEST`

### Frontend low priority

1. wp-comments-post.php:16 `@$_SERVER['SCRIPT_FILENAME'] === ABSPATH . 'wp-comments-post.php'`
1. wp-trackback.php:12 `1 === get_query_var('tb')`

### Dashboard low priority

1. wp-login.php:12
1. wp-signup.php:4
1. wp-mail.php:11

### Only during core installation and upgrade

1. wp-admin/install.php:36 `defined('WP_INSTALLING') && WP_INSTALLING`
1. wp-admin/upgrade.php:18 `defined('WP_INSTALLING') && WP_INSTALLING`
1. wp-activate.php:12 `defined('WP_INSTALLING') && WP_INSTALLING`
1. wp-admin/maint/repair.php:10 `defined('WP_REPAIRING') && WP_REPAIRING`

### Exclude from profiling

1. wp-links-opml.php:15
1. wp-includes/ms-files.php:12
1. wp-includes/js/tinymce/wp-mce-help.php:9
1. wp-admin/install-helper.php:39
1. wp-admin/moderation.php:10

Total: **21 entry points** as of version 3.9.1

See [WP trac #28364](https://core.trac.wordpress.org/ticket/28364)
