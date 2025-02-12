<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/http/wordpress/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'gymfitness' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'maiki' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!Axx2*Y~XQTDhsB22UJscxth@yndj.#=@6(iTpzd5tS)Ixs|`.#H-~aL&pO?19)<' );
define( 'SECURE_AUTH_KEY',  '`gJ4#tqx~>TON?N/>uWP8h(:;_/pL<uXffmMu07F8v5a)jEVk!{xw5.6>-DcyGM$' );
define( 'LOGGED_IN_KEY',    'k[0HJD=G2hx4L=d>upsLb-4eC5mDJdE-J!,dd6TVi2kai,-`uIVj>Z2~5g&3Lepg' );
define( 'NONCE_KEY',        '2qX95eS/6w:$!hn7$hhTid$?V cyRTJcfWSj4g*A~5C6i/5Vau$F#xBi0.pci`-d' );
define( 'AUTH_SALT',        'E+L:JvnL2Van?|-A|_n{;Q9}c]H/MvaT>uGjfr72qA;*BG<U_Ip0*GE<(oK^/tuo' );
define( 'SECURE_AUTH_SALT', '%1sCPi7pni9jd29f!=Yv6{*pq62soG8u5(61#F;;fxGmJ-#Z{tm3>BgpR z0udY5' );
define( 'LOGGED_IN_SALT',   'L.WGOfty~=ntE$KO8FwR@fA~~QBHgSixV;iBdKD3!o[?nm?h(bFa2RRn%/`QsUf?' );
define( 'NONCE_SALT',       'W2eA1IMqws-(]ppsv4$P#2>={BL5l(,rT#0sAKHaJo)p5~NVt&n9-fTJ?H#w-a0H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
define('FS_METHOD', 'direct');

$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
