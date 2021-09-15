<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arttriumph' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'MP)1u#,#!P$~f#XG~l+&+Td9MJy{~Y+!@:|PR/.!BvNK>m[xB3|fj0}D/vxRDcvR' );
define( 'SECURE_AUTH_KEY',  'rNQbCTXPOjl),U(_2C!Axp%c4:sU{i[Fvx]*Tv[q>wkR +y|l%r0tG03j#{j#m0o' );
define( 'LOGGED_IN_KEY',    'J9JvVME*^h~)nL][g55Wk,z<<}(~i{;5D}oiDkR|4`i_M.)zcK!JQq%T5z({YCiR' );
define( 'NONCE_KEY',        '|)]_I9oX@BHv*sukXh$j5i+xwcR#N8LtemmRMC8.kYmQI>[5tpYj:0Um21rDAjz~' );
define( 'AUTH_SALT',        '[vK7>c_1vA)u_sf)M!ycp.~QuYA#UuY$io/&,HJ~+5sKh25wn]7@&%1) @W^:&?w' );
define( 'SECURE_AUTH_SALT', 'vLmx`Dn%TdNh,kk}rQWIjRW(q.uz|/<g2Qj&JebTyK1s]KG1xHO?$ol8XbK-h1Sr' );
define( 'LOGGED_IN_SALT',   '_MEQBl(0m0 Gu,l6 _qEDA[6FJfa#dK~fwhlD/%Lr=vN3wEY$TmKbT_?;G0rf/cM' );
define( 'NONCE_SALT',       'Tk882M(DwSRQov(=giVK w/%8D3j:0{h/)2**pp-spLLSvaEfmPTG|~qUp1N}mq2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
