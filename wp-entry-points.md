## WordPress Entry Points (wp-load.php occurrences)

1. frontend: wp-blog-header.php:12
1. admin GET request: wp-admin/admin.php:30
1. admin POST request: wp-admin/admin-post.php:15
1. admin upload: wp-admin/async-upload.php:16
1. AJAX call: wp-admin/admin-ajax.php:20
1. WordPress cron webserver/CLI: wp-cron.php:26
1. XML-RPC protocol: xmlrpc.php:29

### Frontend low priority

1. wp-comments-post.php:16
1. wp-trackback.php:12

### Dashboard low priority

1. wp-login.php:12
1. wp-signup.php:4
1. wp-activate.php:12
1. wp-mail.php:11

### Exclude from profiling

1. wp-links-opml.php:15
1. wp-includes/ms-files.php:12
1. wp-includes/js/tinymce/wp-mce-help.php:9
1. wp-admin/install.php:36
1. wp-admin/install-helper.php:39
1. wp-admin/upgrade.php:18
1. wp-admin/maint/repair.php:10
1. wp-admin/moderation.php:10

Total: **21 entry points** as of version 3.9.1
