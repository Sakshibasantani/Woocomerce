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
define( 'DB_NAME', 'shopping' );

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
define( 'AUTH_KEY',         'k-e>[`89075u<RBE&6pRr-<&K*v]z50#Ts`idM4w]xr^5@ujl59`^^zyt(o}:D1&' );
define( 'SECURE_AUTH_KEY',  '}V$ M*@.yD W.&;bWLl])yi/];y]N?^0.r2C[d.29#!wvKhD7R{##?tW,uo6XyE`' );
define( 'LOGGED_IN_KEY',    '7LR9=LX(9GD>q/nos 6BKi%sj)t`}Fi+Ru`03Q>Ce3:y_dO/=DS(d`!jrOB1g:sw' );
define( 'NONCE_KEY',        'i<2;<Bj%oH~]Cl1Rjz$x}$b`<V J]qCUG;p9BJ<)2;M?{iX8gO8-4x/#4U;q$~zL' );
define( 'AUTH_SALT',        '5Qvy.8Xa:NQ~?]I6H}{et`ynQ.z+Fh[1}_1)Hw%:fQ@{wHoNg>~&,i`K8fhf`@ly' );
define( 'SECURE_AUTH_SALT', '_Dk=!4=I(:?,$:p->-qJN&.WJK[w9#cPJkDn4g9V--,b_c pX>BcKj5I1:8v( @;' );
define( 'LOGGED_IN_SALT',   'Q 1}fdM4}^-cL-ke$6?>z11e1vYi`bz>Cz@*TZ=to?,{bm(B~*[{4PnYcfp_FM/7' );
define( 'NONCE_SALT',       '7pP otw>#+xYb%C}uZ1p{Z;[9(L/uG0g]v?s<Is6PQJH N)1!Og&^ioAu2jxXM!y' );

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

define('WP_ALLOW_REPAIR', true);
