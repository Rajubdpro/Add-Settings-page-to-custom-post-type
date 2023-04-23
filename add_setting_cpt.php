<?php
/**
 * 
 */
class add_setting_cpt
{
	    private static $instance = null;

    /**
     * Make instance of the admin class.
     */
    public static function get_instance()
    {
        if (!self::$instance)
            self::$instance = new self();
        return self::$instance;
    }

	function int(){
		  // Register setting sub menu
        add_action('admin_menu', array(&$this, 'register_setting_menu'));
	}
	
    /**
     * Register submenu
     * @return void
     */
    public function register_setting_menu()
    {
        add_submenu_page(
            'edit.php?post_type=awp-slider',
            'Settings',
            'Settings',
            'manage_options',
            'Setting-page',
            [$this, 'setting_page_callback']
        );
    }

    /**
     * Render submenu
     * @return void
     */
    public function setting_page_callback()
    {
?>
        <div class="wrap ">
            <div class="card">
                <h1><?php _e('  How to use awp-slider ', 'awp-slider'); ?></h1>
                <h3>This is Shortcode = [AWP-SLIDER]</h3>
                <h4><?php _e('AWP-SLIDER', 'awp-slider'); ?></h4>
                <ul>
                    <li> 1. First install AWP-SLIDER Plugin </li>
                    <br>
                    <li> 2. Active this plugin</li>
                    <br>
                    <li> 3. Add This [AWP-SLIDER] Shortcode in your custom post or your pages</li>
                    <br>
                    <li> 4. Click to add new and create a new item</li>
                    <br>
                    <li> 5. Then Publish your item</li>
                    <br>
                    <li> 6. Finaly Run your website</li>
                    <br>
                </ul>
            </div>
        </div>
    <?php
    }


}

 add_setting_cpt::get_instance()->init()

?>