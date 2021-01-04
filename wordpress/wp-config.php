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
define( 'AUTH_KEY',         '`(gr+g0&|<QP8{3+nTl~dF_?iQ;gE]zj:rUca}c*[Irqdl*Xck4+j~-9[53MZ:?a' );
define( 'SECURE_AUTH_KEY',  'Nql5=s#43-!3iG;+K8fv>LbZYu>N%mcX(zPZy[x&vE_U[gOZ:4|>+Fo@-Fgr(>U3' );
define( 'LOGGED_IN_KEY',    'B2.a^%9@RGTJ<F^n/nYfMBJu_LbP~yr!dzS%F-@^T`n/hMBXB UcCXJJ%/TXwQ.V' );
define( 'NONCE_KEY',        'FAjUxk/[xMa4Ct}ln?0>OVy}e23{Pq,]lj^n)8T^PB_DCOv/h$CH29T Hq{NA!A ' );
define( 'AUTH_SALT',        'oIW9CsA9(v:;`O=2ei9U50]}/r,VF[+WMI9>=/{N|<][{7v;cpt`xWZi*V-GF),S' );
define( 'SECURE_AUTH_SALT', '22/yba;s0[<+3qA8DQT!w[jdzbR4;~axEDbbaa[HV5JSSvQ[/ :%o,0 F%zEV)pu' );
define( 'LOGGED_IN_SALT',   'jm<RaG%kr((tmi}IAEBazK1cGAGWm9GvyMs`(z<[glw+?tnh~w7{@~`6bY[U/d<q' );
define( 'NONCE_SALT',       '#1DqsV`EA!R9}!Hwq<GLQ^T2g2O?nEUFi/t<o3]hCsn!|W(UEIJ9;L8L%9mH}rpd' );

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
