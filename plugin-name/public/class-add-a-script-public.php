<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       
 * @since      1.0.0
 *
 * @package    Add_A_Script
 * @subpackage Add_A_Script/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Add_A_Script
 * @subpackage Add_A_Script/public
 * @author     Joe
 */
class Add_A_Script_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $add_a_script    The ID of this plugin.
	 */
	private $add_a_script;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $add_a_script       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $add_a_script, $version ) {

		$this->add_a_script = $add_a_script;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Add_A_Script_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Add_A_Script_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->add_a_script, plugin_dir_url( __FILE__ ) . 'css/plugin-name-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Add_A_Script_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Add_A_Script_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->add_a_script, plugin_dir_url( __FILE__ ) . 'js/plugin-name-public.js', array( 'jquery' ), $this->version, false );

	}

}
