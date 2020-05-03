<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FoJ]v%xL _!or8},: 0(:}k~| h{!<d(X9_)_>ujM:b;$hNsk--|<K.1Lj9]-SlV' );
define( 'SECURE_AUTH_KEY',  'j:yQN==e8c@07Pd<oBWWy?xV.X}gqX<RNbw(meWlj<b}8,oV^C#8-gbLb7558z`t' );
define( 'LOGGED_IN_KEY',    'el^76p,WRX|yz62^m%E-c$|=6kFP<^IC3op/j7lvq^m;Qtf.SL(Cube|1qJD*.v}' );
define( 'NONCE_KEY',        'Zu!7N+s|p*a6ZW4Dx9f4W,9@SCL^^[t~M+B|MiwgY woIQ4u3,wL+opq~QL5bE2w' );
define( 'AUTH_SALT',        'ev0kfLB;#/.6EI ](bl]Qh5%=SSO{ p}NWe@CXP^{.O}X2EuyLCfyD=JM{ ?mt.)' );
define( 'SECURE_AUTH_SALT', 'A)kxS3`.4+7zte2$#bU4U^sr^jo;p]0uJM~nlc$6<^^=p>X@&Bt:T3xMc5NIK&2P' );
define( 'LOGGED_IN_SALT',   'HS>0nz[w#tei]RfOm2V5KMoNrhNKo_C:fvd%rQRAt.x]~Badn,Io;c1__;tol7_k' );
define( 'NONCE_SALT',       '!O8 xu8$&w^y.riL&gVE)&/%,X;o`5GC gF#A*-P&^b)f#NtA%h8Y9NXj..@w[W]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
