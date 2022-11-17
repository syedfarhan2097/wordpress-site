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
define( 'DB_NAME', 'word 1' );

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
define( 'AUTH_KEY',         'ISl0<oM~p}~RQ<Q^ -oBO`j6S,{05#V#&x}8)Zi,Wi%_C[^{8:]&2%<r[R0)Xi^B' );
define( 'SECURE_AUTH_KEY',  '#l)h3,dU-xu>ljHc9s~j ykTlz{,7SpY)J@pC#qOio{(o^~3k)?]jlD!uqyRd*`|' );
define( 'LOGGED_IN_KEY',    '.u}Y};a<Ms:mB `| <,{0Y77l0?gu>Wd8~y;Z|ColA;=lcNsg`G2]KUl}W<}w%Va' );
define( 'NONCE_KEY',        'yL|FxnPInhY_dnz  o:8x@(cM~Bt[0gSq,Aws~H(n(R=)OjUkq|{G+nb?;M84_|V' );
define( 'AUTH_SALT',        '>iY~0BY8[(b++N`=gHv<~%F<=d^lG<NjyM:$3h6Weh8f]|I@H3We*OQPw`#]_py6' );
define( 'SECURE_AUTH_SALT', '%D)$I5pl&Vx^.E(J &nt+1aww=LtP@[-Y2%MgsW2?UYfi$gjpP|f*aJGVUQ9<#Oa' );
define( 'LOGGED_IN_SALT',   'FH9OtfG^Y!^6B2mks6H3p X&0uH5RMypC,^R?x*)7bxU<(:MXotc@T0N$Ndk+}b?' );
define( 'NONCE_SALT',       'qR$0A6)#KzC~VOb+Pa4q~ sS5#^.DTRPe.@:f63<$Pg,s%?< N(&V&9o/@:{y~4K' );

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
