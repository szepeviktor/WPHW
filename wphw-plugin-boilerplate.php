   /*
    * This example will work at least on WordPress 2.6.3, 
    * but maybe on older versions too.
    */
   add_action( 'admin_init', 'my_plugin_admin_init' );
   add_action( 'admin_menu', 'my_plugin_admin_menu' );
   
   function my_plugin_admin_init() {
       /* Register our stylesheet. */
       wp_register_style( 'myPluginStylesheet', plugins_url('stylesheet.css', __FILE__) );
   }
   
   function my_plugin_admin_menu() {
       /* Register our plugin page */
       $page = add_submenu_page( 'edit.php', 
                                 __( 'My Plugin', 'myPlugin' ), 
                                 __( 'My Plugin', 'myPlugin' ),
                                 'administrator',
                                 __FILE__, 
                                 'my_plugin_manage_menu' );
  
       /* Using registered $page handle to hook stylesheet loading */
       add_action( 'admin_print_styles-' . $page, 'my_plugin_admin_styles' );
   }
   
   function my_plugin_admin_styles() {
       /*
        * It will be called only on your plugin admin page, enqueue our stylesheet here
        */
       wp_enqueue_style( 'myPluginStylesheet' );
   }
   
   function my_plugin_manage_menu() {
       /* Output our admin page */
   }
