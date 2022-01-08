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
define( 'DB_NAME', 'atudweb' );

/** MySQL database username */
define( 'DB_USER', 'atudweb' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'n96bL5mNdMsPsK#q)]#_}E:60K @uFsdSiiH=x0i%%09kx5N=:}O=DT@~/^0d|-$' );
define( 'SECURE_AUTH_KEY',  '7hT69OhErlrsFNAS Sa)B@nCbA7~yy.qukcDFq}*r 6N([{3d SRi.u`(>?2SFM@' );
define( 'LOGGED_IN_KEY',    'Krqx._@$<5[|+^Mxk{>tP4ZF452-Svwx5d-^RLpF#(z_}s{,;JaDm$n}l]y;EwPn' );
define( 'NONCE_KEY',        'GAr0IXl!f~j@a88XVc@FjY$K}FV9HJ=MS)5F )~*8}5GO[@#|N#DBqdJ3VrS&saA' );
define( 'AUTH_SALT',        'nU<+C()gJQv%x3e]B]| `.LyY3#4T1W)J+SAb(}$g#j5nha3_Cs2HjQ}TgwqkvAk' );
define( 'SECURE_AUTH_SALT', 'Zyp!<L39h}N9q}K?j~L40_%R_;vJ/oy8d]9].;zmLzuz3jMT`<`Y_g)<.5/d-+u(' );
define( 'LOGGED_IN_SALT',   'td9&>O[%u0,Bc;JRyzJ7>,J^Tr_grS?/F .B0(>$-0Q5a[Gsri$6gVkd&Ay$Yd~?' );
define( 'NONCE_SALT',       'f`cq[<hrj!MYz5y1O#xMsxT umQh25[6OZaA;_uS{N+i[,mcm/N2-eQEe t0wkEo' );

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
