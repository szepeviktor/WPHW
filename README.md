# WPHW

WordPress the hard way.

### For WordPress websites

- for any messy/unsecure/veryslow code
- for anti-pattern WordPress codes, like not using an API, e.g. Settings, Filesystem

### For handmade websites

- uncontrollable (no way to prevent) output to frontend
- no `define()` to disable css, js enqueuing

### Performance factors

- unnecessary `autoload=yes` options
- many options instead of one array
- same DB query in a loop
- lack of caching or usage of transients of repeated stuff, see https://profiles.wordpress.org/voceplatforms/
- PHP class autoload
- conditional `add_action();` and `add_filter();`

#### Execution, require cases

- on AJAX calls
- on wp-cron runs, on wp-cron from Linux cron (shell)
- on the dashboard for users with the necessary capability, like accessing the plugin's functions
- on the dashboard for users without the necessary capability
- on the frontend for users with the necessary capability, e.g. required for admin bar
- on the frontend for users without the necessary capability
- on the public frontend (not logged in) frontpage/home/page/single/archive/404 etc.
- various WP-CLI runs

### Admin performance factors

- https://www.barrykooij.com/increase-wordpress-plugin-performance/
- unneccessary CSS or JavaScript inclusion on admin pages
- unneccessary code parsing (`require;`) and execution on admin pages

### Code styling

- encoding, indent, line ends
- WordPress Coding Standards

#### TODO

- create theme boilerplate (with no running code)
- create plugin boilerplate (with no running code)
- create [widget boilerplate](https://github.com/tommcfarlin/WordPress-Widget-Boilerplate)
- list a critera for different type of plugins (e.g. slider)
- https://wp-dreams.com/articles/2014/04/responsible-wordpress-plugin-development-more-compatibility-less-support-tickets/
