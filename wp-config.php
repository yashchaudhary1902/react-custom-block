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
define( 'DB_NAME', 'react_block' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@123' );

/** Database hostname */
define( 'DB_HOST', 'db:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_HOME', 'http://localhost:8080' );
define( 'WP_SITEURL', 'http://localhost:8080' );

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
define( 'AUTH_KEY',         'Z|{q5jhx]4M;/D}`dbmKvi(-Z^4f[)0k%o~A#?E(`]of&BM-1LIFfD]x0SULNlD?' );
define( 'SECURE_AUTH_KEY',  'O^wBl*cb>l7)F!EOc{e]=#J6SX,|UeTw0]-!jPSsB8M;[Zm]m?I,Zo;$]dv6#2%E' );
define( 'LOGGED_IN_KEY',    'IGK/t.&(h]lAg6GQ<2q//%vI3z]75RWi;Cbw6.dHWo-=>TSDwCC?X# ILs^&I?J.' );
define( 'NONCE_KEY',        'DJ{g|Js3`.8^k`&1RYpSoj%au.#v*3^8SwTyTJ`,M3u4-(4]D1pQs,<6EY !Azuv' );
define( 'AUTH_SALT',        'gexi.~SqRP/gJu9>+s-@b7!N$E@02k1W;Q8|^dkQ+=/(gUVB#q+V4wS,HcQCtnq=' );
define( 'SECURE_AUTH_SALT', 'd2-hY7M0xe-k4Wy$ok_+9Tl#G%4]RaOwmB{?(^/[I5`9O+fsb$psWNWh|B,mD4ig' );
define( 'LOGGED_IN_SALT',   '@o^7OPX@G<bQ#(4G%1R=^.2F$_?A`U~|,+Gk%kAV)N<HoIuvi!6$y`=2rOz4@`gm' );
define( 'NONCE_SALT',       '>`eh2r};Yj?[Z ,T A$l=Aw9sYli)z|x<eYo0){C6+g:3]AA|F9-1kRbpIc#&dk3' );

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
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
