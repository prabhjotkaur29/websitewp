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
define( 'DB_NAME', 'websitewp' );

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
define( 'AUTH_KEY',         'X|)WILc6.)0joJRfq[smTdWBY}vmgTSkHrH0(5<=PZ[qE_9}o{*htov[8$pv{v7(' );
define( 'SECURE_AUTH_KEY',  'Pkq!c7cwW9sfytFHS;RZ! fI)}5X+Ugb3R97B~_uGlI%{!z-V+dfpn&3b0xl7>Ql' );
define( 'LOGGED_IN_KEY',    ' (W.,.zjJW/0Re?UuD j[nmx6t4e[95R^qA|=}F4@.NDzjWoG? WL4Xv:>QA8AE$' );
define( 'NONCE_KEY',        'ENP%CG4*WxC7{-i2WU81J. v}V-~vBF(F?kVvx+vn+-ejVy)=(:Co=sqkuJHkHlA' );
define( 'AUTH_SALT',        ';,`SL(jh}ep3~KW%,0_ .#@CUG?#D9=znFFkt?]}FMI$<)_? ~M)Am9@8)81*ab$' );
define( 'SECURE_AUTH_SALT', 'l1^u,oy/g$sCX58=zeXrDhFL !@H;~0mwX`Bx#hfu> (yfC!gqlqddGW/ZF8@L/+' );
define( 'LOGGED_IN_SALT',   't)cdR$hbXzg)EApL#Qo0TIjn$p(#+dn+@Xx9p65A[xM%;2(7)lhc9p2N4`+Ffc_>' );
define( 'NONCE_SALT',       'b{N}kqb{@pKWTKcl8uaiP*-LH=bIw:&;ZSIsn8R]4=N?Q7qWr[Q?7X+M0/%}h%Y(' );

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
