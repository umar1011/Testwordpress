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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'P1yBm1?iD7*;ku6/}=AvX)HR.mh-Z5GY0qQvWXWQfiS%D-P;x]ABtD=V`Jd%*8,Q' );
define( 'SECURE_AUTH_KEY',  '2dOsQ8FMRj^`FK-sC6yFx)pkl`5hm@THb`k`:HT$a;zP^G 6% +3BOb[;4 2oL57' );
define( 'LOGGED_IN_KEY',    '.1:|9WTR?Wnb:W2Mc&z@sg#cnv#;/LN?hY[Hz$w:#GTnKE(u0-je]h?o&*B4)n_u' );
define( 'NONCE_KEY',        'bxeWn#J!Qv$tSwU_F/mbZCAQ<<#6c1~QDggI{x1|6*WxN>t6X64/gPuL?@ 6Dz^^' );
define( 'AUTH_SALT',        ')&R)enE%UC7(%@j&1 I6hf/Lx&j)MsG{?JZxAB&]9RnE{il,OSDPG,80xrn9YHhk' );
define( 'SECURE_AUTH_SALT', 'dv.G,h=o$$}I7o% X[=Ji8),HSmvLY|cuh%i+_Qh,UmQ]=VNzW1KL&|Q#|| 79Li' );
define( 'LOGGED_IN_SALT',   '*CVHrn`aUt|>?6*ow^);+TzE=uj#`xR.EXk8u@=$By }W|nS0V#Wf~gITqZ*+J}=' );
define( 'NONCE_SALT',       'ogc*:TVB#dMJ.pmWQB$<Z_^}.Vm>k>U4Wx2T!,qt,7/eWCihyEk?<+?uR.A05$<W' );

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
