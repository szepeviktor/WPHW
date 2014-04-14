WPHW
====

WordPress the hard way

###for WordPress
- any messy/unsecure/veryslow code
- any non WordPress-way code (like not using an API, e.g. Settings, Filesystem)

###for handmade websites

- uncontrollable (there is nothing to prevent) output to frontend
- no `define()` to disable css, js enqueuing

###performance factors

- unnecessary autoload=yes options
- many options instead of one array
- same db query in a loop
- lack of caching/usage of transients of repeated stuff, see: http://profiles.wordpress.org/voceplatforms/
- PHP class autoload
- conditional `add_action(); add_filter();` 

####execution/reqiure cases

- on AJAX calls
- on wp-cron runs, on wp-cron from cron (shell)
- on the dashboard for users with the necessary capability (like accessing the plugin's functions)
- on the dashboard for users without the necessary capability
- on the frontend for users with the necessary capability (e.g. required for admin bar)
- on the frontend for users without the necessary capability
- on the public frontend (not logged in) frontpage/home/page/single/archive/404 etc.

###admin performance factors

- http://www.barrykooij.com/increase-wordpress-plugin-performance/
- unneccessary cs or js inclusion on all admin pages
- unneccessary code parsing (`require()`) and execution on every admin page

###Code styling
- encoding, indent, line ends
- WordPress Coding Standards

####TODO

- crete a dummy theme (with no running code)
- list a critera for different type of plugins (e.g. slider)
