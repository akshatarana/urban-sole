<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'urbansole' );

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
define( 'AUTH_KEY',         ',NEDEq!5=>/lYd2n79VER1eq)u_#a%X/W^f?8%4z;ASIV:Or#gad$G:<o8uc!.}<' );
define( 'SECURE_AUTH_KEY',  'lu$k8en6n|m`o,Bpgj$!k9w;Q5>e@LOY.F6@cx<3qyckP`cn)CK5jRs{RTZ3jO[O' );
define( 'LOGGED_IN_KEY',    'ktNA>9%1/h3NjVt4|N@T]#>ALFzxBj2It)UenMC89f7*1j@{9RQiZ!U&xc]46g[ ' );
define( 'NONCE_KEY',        '7oI6+;G%>@MFsblR{89f~I/o`{zQ3{MwVQP&[Dz=0]bbYX89u|K?1jY+%Iej9o-I' );
define( 'AUTH_SALT',        'hyFtL<#}b*Y>j]Bz--QE?iK/}DUuds<aYm&T.]I!HApo$VET1|OA=nCMN$V,I~/|' );
define( 'SECURE_AUTH_SALT', 'I<aJi_rv&Of5`]`kf:/oqJ`k>&-<6+,l^KRM,43koIANgHR DWDD*G-0*G@V30Zh' );
define( 'LOGGED_IN_SALT',   '/2<e9NmK: {ux1t0=nd;=*H8N_iQ0[1s)fZ>!!ws+hWVP+4Q-_h5~BUG9z~,^s-q' );
define( 'NONCE_SALT',       't1Xk2[r/s$yuo9BxW]+a|FwezdmKfM#`@&n$$zbph[ S{P!lz;Q;{u%$+f6LUEtQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
