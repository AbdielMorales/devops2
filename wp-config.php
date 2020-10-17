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
define( 'DB_NAME', 'db_devops' );

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
define( 'AUTH_KEY',         's)UlldHj<^?1H&MuIg^Tl`hBk^<[xpkuZ$7`VDB.F?r0 +>L_[e0y74n+!fD9G`K' );
define( 'SECURE_AUTH_KEY',  'Rx1PZY]Xr>?/AI/IY(.=<lf@g_-~e0Ck/4G!c:7APpjjE[!n%&o.(}dYog&?m7}j' );
define( 'LOGGED_IN_KEY',    '1;ELZ1Kd|JHqtr_Z,bd]veLfnIkvP|r:H[hUJ.7ts9][8=wh%t[^Pf#O75}Df@3s' );
define( 'NONCE_KEY',        '8%vg,Jmet` ??(|.8Csuv%:WMWPdW &v5,|on5o/u12,$qK3}zv]y!C5fDxv17DI' );
define( 'AUTH_SALT',        'G4Kko,l&%Y(P;AOLZX/(U_}w=lb@[90Vj>(xeRPtq^ij@.Ry;(+v2A[!^TekIdhO' );
define( 'SECURE_AUTH_SALT', 'F!<I$sF_|Q2{WLwkL@J^k4!a^9AkIoRv[tWsDU|NpQSlSy<pF%k&w[~bH3d)F@Ca' );
define( 'LOGGED_IN_SALT',   'zYNNtXE6~eg:{P=@;uvQxahd2s1$XO,3?Tt.{@uYBeB7a%7gF9XtGgY}*kM09`Hy' );
define( 'NONCE_SALT',       'wca.3?,6Q_o_m3N8Wd^ymfT;uC4KpTB@9e@4 _[4Vx TI&9F&%<<K.Zv$+.}3St`' );

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
