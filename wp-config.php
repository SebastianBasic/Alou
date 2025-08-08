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
define( 'DB_NAME', 'alou' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'E*>)8&R~wa{)OPXX+].l57w!@/(L5?+bCt*OHYN<(%$5F`*I-VsmM``2JxKO0an]' );
define( 'SECURE_AUTH_KEY',  'JD0q./D7m:u3Y14 gfQf$k`$`RAr=2m[0k`qThGRKB-hucFR4gy(C?s#Gqa,ZK}H' );
define( 'LOGGED_IN_KEY',    'I4-Gm4^P3F5L:[Y{i_{0A;`Z&~@&5[SwnUm$zgY~r8~;d#h0{Ps[gyAbMEH^7Y+O' );
define( 'NONCE_KEY',        '>*I&cLV@J&Q#_-R%)8i! D1uo[(G;G4*L*km<Rp $X;J:rT)_o,~Cx,^4tZB}/N$' );
define( 'AUTH_SALT',        'Yox>?Mf6{VTzXcDq=4tCdW:bS)R~:&|MZ}c#K2e-(nci3_bW_,:G#XraDfFd##A4' );
define( 'SECURE_AUTH_SALT', 'TeIbBBPpr{BY:UI~/WPyoAqwLQMR4H(2:T22_[[5I_,XN41I1A@m6V5q(e!|A_R{' );
define( 'LOGGED_IN_SALT',   'Fh*}wqYXk~kBM8+:$WYPkC^^Qlk1p889da)yL4fi[YOH O%A-i:42DC74gg_-<yj' );
define( 'NONCE_SALT',       '}o9aU4mtIy0lN]{yV|rEl^ac?7#!e&}GL$QSlxKm6iv(`Paa/R31O!_phJ]P 4]/' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
