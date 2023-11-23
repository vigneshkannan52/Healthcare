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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'healthcare_db' );

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
define( 'AUTH_KEY',         ';^O3AXBqWn?*]1lG)-/k:2%:!QF|Hay>{AJM$3;RTG?q;cb=%EzLJ+8}`9IZvZ*C' );
define( 'SECURE_AUTH_KEY',  '|6)BiM%aq$@8`rbn{y.oz@ L~9[QvTvy]x+Eu}Kc_[UHj<<TF|l*JB#(>T#x-GD^' );
define( 'LOGGED_IN_KEY',    'XUpa*jQjZ?.6(w_>vI5Ra9Xt>)e85L-:W.gGdw+K@-{hNR=,[Aw]bl-YoJ#}Ldr&' );
define( 'NONCE_KEY',        'TubZ6zXyX#g?3|R%N{K|w}l2L<UE)vffQ)O6Ext`[D/P1oC$,b=9|2&pSb;3h4E6' );
define( 'AUTH_SALT',        '`BHgsv%0LnB/]:sD/>Od=N5!N#wRQSL0zuBP0[V7{*@pQc{jsBapsXuQk&G4vJ@T' );
define( 'SECURE_AUTH_SALT', 'AU6y}#y`N:cb,C4KGjKg[142ID@#U%m>a>)JoqnaiRd|nSV5O!&HKFx,hI:Mp&@i' );
define( 'LOGGED_IN_SALT',   ':H/t[S0NF9>/vv(5>o`|b0H_pShb-MlL8o+6C(.195s,11W doZvIc?RB)?{y;OT' );
define( 'NONCE_SALT',       'uhA/gRECC95O+!-smAC!{7:4NNIT<p{Tl;)O^/1#n|M~3GZ0v+9lRNf8&%eu`xjG' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
