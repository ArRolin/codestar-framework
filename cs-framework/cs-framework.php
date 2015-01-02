<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * ----------------------------------------------------------------------------------------------------
 *
 * Codestar Framework
 * A Lightweight and easy-to-use WordPress Options Framework
 *
 * Plugin Name: Codestar Framework
 * Plugin URI: http://codestarframework.com/
 * Author: Codestar
 * Author URI: http://codestarlive.com/
 * Version: 1.0.0
 * Description: A Lightweight and easy-to-use WordPress Options Framework
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: cs-framework
 *
 * ----------------------------------------------------------------------------------------------------
 *
 * Copyright 2015 Codestar <info@codestarlive.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * ----------------------------------------------------------------------------------------------------
 *
 */
if( ! function_exists( 'cs_framework_init' ) && ! class_exists( 'CSFramework' ) ) {
  function cs_framework_init() {

    // ------------------------------------------------------------------------------------------------
    require_once dirname( __FILE__ ) .'/cs-framework-path.php';
    $get_path = cs_get_path_locate();
    // ------------------------------------------------------------------------------------------------

    // constants
    defined( 'CS_VERSION' )           or  define( 'CS_VERSION',           '1.0.0' );
    defined( 'CS_USING_AS_THEME' )    or  define( 'CS_USING_AS_THEME',    $get_path['as_theme'] );
    defined( 'CS_BASENAME' )          or  define( 'CS_BASENAME',          $get_path['basename'] );
    defined( 'CS_DIR' )               or  define( 'CS_DIR',               $get_path['dir'] );
    defined( 'CS_URI' )               or  define( 'CS_URI',               $get_path['uri'] );
    defined( 'CS_TEXTDOMAIN' )        or  define( 'CS_TEXTDOMAIN',        'cs-framework' );
    defined( 'CS_OPTION' )            or  define( 'CS_OPTION',            '_cs_options' );
    defined( 'CS_METABOX' )           or  define( 'CS_METABOX',           '_cs_meta_options' );
    defined( 'CS_CUSTOMIZE' )         or  define( 'CS_CUSTOMIZE',         '_cs_customize_options' );

    // active modules
    defined( 'CS_ACTIVE_FRAMEWORK' )  or  define( 'CS_ACTIVE_FRAMEWORK',  true );
    defined( 'CS_ACTIVE_METABOX'   )  or  define( 'CS_ACTIVE_METABOX',    true );
    defined( 'CS_ACTIVE_SHORTCODE' )  or  define( 'CS_ACTIVE_SHORTCODE',  true );
    defined( 'CS_ACTIVE_CUSTOMIZE' )  or  define( 'CS_ACTIVE_CUSTOMIZE',  true );

    // helpers
    cs_locate_template ( CS_BASENAME .'/functions/helpers.php'   );
    cs_locate_template ( CS_BASENAME .'/functions/actions.php'   );
    cs_locate_template ( CS_BASENAME .'/functions/enqueue.php'   );
    cs_locate_template ( CS_BASENAME .'/functions/sanitize.php'  );
    cs_locate_template ( CS_BASENAME .'/functions/validate.php'  );

    // classes
    cs_locate_template ( CS_BASENAME .'/classes/abstract.class.php'   );
    cs_locate_template ( CS_BASENAME .'/classes/options.class.php'    );
    cs_locate_template ( CS_BASENAME .'/classes/framework.class.php'  );
    cs_locate_template ( CS_BASENAME .'/classes/metabox.class.php'    );
    cs_locate_template ( CS_BASENAME .'/classes/shortcode.class.php'  );
    cs_locate_template ( CS_BASENAME .'/classes/customize.class.php'  );

    // configs
    cs_locate_template ( CS_BASENAME .'/config/framework.config.php'  );
    cs_locate_template ( CS_BASENAME .'/config/metabox.config.php'    );
    cs_locate_template ( CS_BASENAME .'/config/shortcode.config.php'  );
    cs_locate_template ( CS_BASENAME .'/config/customize.config.php'  );

    // load textdomain
    load_textdomain( CS_TEXTDOMAIN, CS_DIR . '/languages/'. cs_get_locale() .'.mo' );

  }
  add_action( 'init', 'cs_framework_init', 10 );
}