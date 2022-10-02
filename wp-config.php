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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         ';KzI0dj0;rVIg?E1>sgY&5Ulm1}KE(,vu0Or^H(CY2kg[$yYSI%_&J;6,qUinD1O' );
define( 'SECURE_AUTH_KEY',  '/;[J}i)aq2]1%WWvL+x8k^4;Iu#Qyl+F|nUi;aH&8zV8iK,%T[7i@j?C/bA*<kWI' );
define( 'LOGGED_IN_KEY',    '2RVC9&GJh{^>^hcO79ft1R?wCD}v-iK$qiX-g5!6p7DwPL4SiS *Crs`X%`~!|g*' );
define( 'NONCE_KEY',        'k~IpI06)P@_ia;aC}(bON.H6TcE_vp4&L7B2pw+6Muu*i/ai$=BQcw1)0?R4!CvR' );
define( 'AUTH_SALT',        'x|eE6}A;^[FqS<,OYFR@Bk=k[Z}3)3j-10,$W(i~g` xhf%sY0/1Z*2N!|akdUv.' );
define( 'SECURE_AUTH_SALT', '%S$v-kne(6C}7fH4kFIvd>r_7p9ZWYiq:W`.C?0t2|@II8v2V,3Y5qhvuVj-EUdu' );
define( 'LOGGED_IN_SALT',   '~B:duJWbFLj%<UY_V)`aPXQgCFBzJ..cP+8^-L2M<C7UxR($^G{Pue|MKM}[g7^H' );
define( 'NONCE_SALT',       'E[!A[Q@~caTbVK*$0=uB)NY/VxYb#22b{kI./m9^9y-Elwluql3@`<qhLLvBi[uj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpp_';

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
