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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u133792816_YXBCX' );

/** Database username */
define( 'DB_USER', 'u133792816_jpkim' );

/** Database password */
define( 'DB_PASSWORD', 'XZmcRnKcDj' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'QULI{Wity[d@uUw]rXb(;7D0h`%gg5$CW*Gc~; cBGq2qIX#@VSN_};4[5L>, iU' );
define( 'SECURE_AUTH_KEY',   '24sL*ODpgM$qS?dw/X00]=2e(ph8@cexBb4@;(H,:p]%7yS{kK/KTS#y3Q%pP{hl' );
define( 'LOGGED_IN_KEY',     '(_F`m!]v9kdlVQo,@iwY8aIXBXzxZp[baCIG~(-D6<SU|@<V=g:/yuWoqP<^au65' );
define( 'NONCE_KEY',         'Vd)p>2/#7.hxVLyR1ir|$gV8kt5!yD7fxf(;9:]*ADPBd=.>f0!@#tuoi`)Of-xg' );
define( 'AUTH_SALT',         'V {dFnW=3M1!Fl-$q_N:zg&f1pd3FZS;^X)-Mvr0$&b<Q>[vcX-}m/Jnox.AJ?N@' );
define( 'SECURE_AUTH_SALT',  '{-j>-uK9IbGqU^ ?.+8OoVci_AYA57Np/ZgUZ31XBGg__l>*zyEgNtMi`K9F9A|H' );
define( 'LOGGED_IN_SALT',    'mrOQ!qQ^IuA&/>*o2HGq]uUT^a&_wsB0<O;Vs5W3_hEj/~h&pmToepWK>1Yb3#89' );
define( 'NONCE_SALT',        'nk~urbsS$d5?[NWIy.xMX`hOE6R3ncKfWvsGoA<Jw%;+7R5m{jIb8 _a[(GA|nA3' );
define( 'WP_CACHE_KEY_SALT', 'sEQA-s[GS!WZQ(yGLMRgZaQ5YnA^[a_Q?_cnEC;/$u `Re..>c-rV@Z,}()FC49t' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
