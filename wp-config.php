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
define( 'DB_NAME', 'tech' );

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
define( 'AUTH_KEY',         'mhYKMJM@UiTdKs,4N%:.(vTP%KP{~z^]KzZ}96!yxgQZ70uiaYt!q@_(;?DUm|}0' );
define( 'SECURE_AUTH_KEY',  'G4N,yApLsA[|xj_jq^-HO0}I5X*W5`h__&|.-^{]jz.YEp(cga8<h.nEgn{+LLrX' );
define( 'LOGGED_IN_KEY',    ';YuZD 04k1,S~*UUVO:g$of,w&!AG$|5tXEv jbAjw61xX!;9,GhC0Wy7wBlA{^1' );
define( 'NONCE_KEY',        'w;*-w 8Pq]J7Du=4=}Ix~FFfxo%NH$#D5CE#cQ??-wlC!GT7FBykwv5}Rq(d4e1>' );
define( 'AUTH_SALT',        'B~nskV{xS|1AI$G.yL~qjjhHWL+f6ylOP9]wxi|C|b{=/*_}7Nr!R9!FkHsL*Uae' );
define( 'SECURE_AUTH_SALT', 'o%+*mq{>cYvjHEZzT$uWV{K&otrcGkAjtZak=I`{m8y>?9&%[hJGs~xd^,@`h7t`' );
define( 'LOGGED_IN_SALT',   '5/Hpprym0`j`6u4Y}&Zki!E3H|#(P^ChE3%Vp6f[fK^0XZ<}!xDfNF03Hq[/wkG[' );
define( 'NONCE_SALT',       'd/p}yW@c)mWl_,ci_@xKk}3J<Z&bj;dht+9h;2z?(Au-%q$I,1lC:H+j:7s>SThb' );

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
