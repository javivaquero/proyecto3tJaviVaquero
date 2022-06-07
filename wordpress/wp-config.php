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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'Q`M@chMT>;]#fd(@f-1Jwv&}mw=N{EHbg(mN[ .;zU%NjqA{<_C!|`f*I,aZ/@j7' );
define( 'SECURE_AUTH_KEY',  'kPTlNr&M6BrJ7acnwRv*G.lVcV*Ooi^GVH[uvs^`|jV.WD*Nj8qZfO{lZrDAu9>&' );
define( 'LOGGED_IN_KEY',    'BmZ^p4[)/u/7shG |Z{Ow>cz5?Q^{8]1nhkLi}=L]G]&@*n5U[z=c>;R3}ejInsG' );
define( 'NONCE_KEY',        '5Sl/?s `9-`yig^8o4fAV6QWm#KO)vO{&]w&VdL]y%A8+>Rd/DV|UdmR4%ShQHeU' );
define( 'AUTH_SALT',        ']4Ow3Ob1qt~3+}Nw4O#2!t.8u%co9icmR2ODF!,N*ImE8OAem;u>`ViEdYgs8Cdp' );
define( 'SECURE_AUTH_SALT', '#|Ff|[U-({RX(Qdn_u+^IjC7KN^?jRP<v~UWS:[tXlgbS D01F6pYiv.qf@r]sh{' );
define( 'LOGGED_IN_SALT',   '_1KEp6:U{$}Zjq@8vG=(8Q+Mng56Gy-dHt]!Q+6`A{6~JMxp73.EP7_ckB2?TqI3' );
define( 'NONCE_SALT',       'ej/7]/n%%Sa1>;8BF]>CFW14p:bLI^W<gdB#VbwBDsK!k@ +wk(gE*`dgC5Whjez' );

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
