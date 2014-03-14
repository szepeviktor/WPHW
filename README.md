WPHW
====

WordPress the hard way

###for WordPress
- any messy/unsecure/veryslow code
- any non WordPress-way code (like not using an API, e.g. Settings, Filesystem)

###for handmade websites

- uncontrollable output to frontend
- no `define()` to disable css, js enqueuing


###performance factors

- unnecessary autoload=yes options
- many options instead of one array
- same db query in a loop
- lack of caching/usage of transients of repeated stuff, see: http://profiles.wordpress.org/voceplatforms/
- unneccessary parsing (`require()`) and execution of admin code on the frontend

###admin performance factors

- http://www.barrykooij.com/increase-wordpress-plugin-performance/
- unneccessary cs or js inclusion on all admin pages
- unneccessary code parsing (`require()`) and execution on every admin page

###Code styling
- encoding, indent, line ends
- WordPress Coding Standards

####TODO

- crete a dummy theme (with no running code)
- write a Debug Bar plugin: select * from wp_options where autoload='yes';
