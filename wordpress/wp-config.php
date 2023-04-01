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
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         'rY1a</(qj1oj4||I$zbv.r.Pfc~>K_E9tQ[kXr-sW|Nlp}w3jSD8?#YC{Y%GuAmn' );
define( 'SECURE_AUTH_KEY',  'r_dbW>q2WyIGVX=x~)ml1/+r0kN(.OwE4J]3.C>~GGdU>14k!o;%s%#Knn9Td//=' );
define( 'LOGGED_IN_KEY',    'NpN,B=*3E}#*fs!Qid|5&P=ZJm_Z}Y<AnU^oH63^%^?Bjs6t`5?:[ydOxJGu<f L' );
define( 'NONCE_KEY',        'G8?=,EmMuE=/ocg4D{*`v_{m#{]W^FBivJ5pFW@m7|z}WDVL1I%.*XC<l#<mxq*P' );
define( 'AUTH_SALT',        'wK~|`CxO(Kk?R_?(~[;`MY47:&b qZ~15(*FtTuvQ]u]cA29iL:.$F<3!j4,mu1v' );
define( 'SECURE_AUTH_SALT', 'F_AjU^S`YIUTp8jS2=2~F[ba5]$`o8!%_./a/kC2Mtk7p]X=}1tJ=n@[XWEA1c)I' );
define( 'LOGGED_IN_SALT',   'lkzEtWv0qHTWt=k3@~V>]X*^T!8GEEkf}8yK8COucv))_4&.9Z*q7]~{20j *XAw' );
define( 'NONCE_SALT',       'tTj=Fv3#u|F `UI}hUtbt$MkY-=zY{1jn>^3in=dDb@+Twa*v#J0Rthw0B+Nj;[H' );

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
