<?php
/**
 *
 * WordPress plugin that adds drag-and-drop surfaces to various screens (for key default and custom types)
 *
 * @author                  Gilad Ehven
 * @copyright               2018 Gilad Ehven (Ehventerprise LLC)
 * @license                 GNU General Public License 2.0+
 * @link                    https://github.com/GiladEhven/wp-drag-and-dropper
 * @package                 WpDragAndDropper
 * @since                   0.1.0
 *
 * @wordpress-plugin
 *
 * Plugin Name:             WP Drag and Dropper
 *
 * Author:                  Gilad Ehven
 * Author URI:              http://gilad-ehven.com
 * Contributors:            Mihal Ehven (Ehventerprise LLC)
 * Description:             This plugin adds drag-and-drop surfaces to various screens (for key default and custom types).
 * Domain Path:             /languages
 * License:                 GNU General Public License 2.0+
 * License URI:             http://www.gnu.org/licenses/gpl-2.0.txt
 * Network:                 False
 * Plugin URI:              https://github.com/GiladEhven/wp-drag-and-dropper
 * Privacy Policy:          https://gilad-ehven.com/privacy/
 * Terms of Use:            https://gilad-ehven.com/terms/
 * Text Domain:             wp-drag-and-dropper
 * Version:                 0.1.0
 *
 */

namespace WpDragAndDropper;

if ( ! defined( 'ABSPATH' ) ) exit( "Nothing to see here. Sorry. Try the home page." );

$autoload_file = __DIR__ . '/vendor/autoload.php'; if ( file_exists( $autoload_file ) ) { require_once( $autoload_file );

	// ---------- COMPOSER OK; PROCEED ----------------------------------------------------------------------------------------------------------------- //



		// ------ START TEMP BLOCK ------------------------------------------------------------- //
		$whoops_error_page = new \Whoops\Handler\PrettyPageHandler();
		$whoops_error_page->setEditor( 'sublime' );

		$whoops_app = new \Whoops\Run;
		$whoops_app->pushHandler( $whoops_error_page );
		$whoops_app->register();
		// ------ END TEMP BLOCK --------------------------------------------------------------- //



		add_action( 'loop_start', function() {
			d( 'test' );
			d($_SERVER);
		});

	//	func_num_argss();











	// ---------- COMPOSER BROKEN OR MISSING; DON'T TOUCH PUBLIC SITE; WARN USER/WEBMASTER IN ADMIN ---------------------------------------------------- //

} else {

	add_action( 'admin_notices', function() {

		$plugin_data = get_plugin_data( __FILE__ );
		$plugin_name = $plugin_data['Name'];

		?>
		<div class="notice notice-error">
			<p><?php _e( 'The <em>' . $plugin_name . '</em> plugin appears to be damaged or malfunctioning. Contact your webmaster for assistance immediately.', 'do-not-commit' ); ?></p>
		</div>
		<?php
	} );

}
