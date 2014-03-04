WPHW
====

WordPress the hard way

###for handmade websites

- uncontrollable output to frontend
- no `define()` to disable css, js enqueuing


###performance factors

- unneccessary autoload options
- many options instead one array
- same db query in a loop
- lack of caching/usage of transients of repeated stuff, see: http://profiles.wordpress.org/voceplatforms/
- unneccessary parsing (`require()`) and execution of admin code on the frontend
- unneccessary code parsing (`require()`) and execution on every admin page
