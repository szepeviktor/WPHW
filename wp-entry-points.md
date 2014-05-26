## WordPress Entry Points (wp-load.php occurrences in 3.9.1)

1. frontend: wp-blog-header.php:12
1. admin GET request: wp-admin/admin.php:30
1. AJAX call: wp-admin/admin-ajax.php:20
1. admin POST request: wp-admin/admin-post.php:15
1. admin upload: wp-admin/async-upload.php:16
1. WordPress cron webserver/CLI: wp-cron.php:26
1. XML-RPC protocol: xmlrpc.php:29

### Frontend low priority

1. wp-login.php:12
1. wp-signup.php:4
1. wp-activate.php:12
1. wp-mail.php:11
1. wp-comments-post.php:16
1. wp-trackback.php:12

### Exclude from profiling

- wp-links-opml.php:15
- wp-includes/ms-files.php:12
- wp-includes/js/tinymce/wp-mce-help.php:9
- wp-admin/install.php:36
- wp-admin/install-helper.php:39
- wp-admin/upgrade.php:18
- wp-admin/maint/repair.php:10
- wp-admin/moderation.php:10
