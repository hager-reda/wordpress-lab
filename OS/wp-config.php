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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'itidb' );

/** MySQL database username */
define( 'DB_USER', 'hager' );

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
define( 'AUTH_KEY',         'z}Cw.IGcNmtctp=_!|18s,@NG5@KJ_&~T@m/#&9uv,5DJR~Si4N.sySSF_h2tHI[' );
define( 'SECURE_AUTH_KEY',  'NR/xP<hIu)lcRAO[zc|Uy{6K7+r%|U(Mw/3Bv-mE(GHv`D_ bt~<8H4>z;gI3b~T' );
define( 'LOGGED_IN_KEY',    ']m!~r^D|:)I6_4[HBktB?1V,_y!vFEIf:s(EN:v#>9Wze`6IU;e?M`EG_G;[{id.' );
define( 'NONCE_KEY',        'B_7X_JD}M04.mufuPoMCDL3,qH,?yA5>[#,^:!( jeZ7i) Y7yu3XFv0p%8G$6q2' );
define( 'AUTH_SALT',        'gsU5lbmRUxc|r8M<,Z)gi`IdD):aOG~%Y.`h/Qp<;oM[NZ!6Zqwyf~z?DV,UKlJK' );
define( 'SECURE_AUTH_SALT', '|~gnHh]`6r:su0`119WXx8VE{m-!{ZmA%2PzMCpwvwg.s]zpIlF*|JTkO,w9aB|K' );
define( 'LOGGED_IN_SALT',   'zOOh.mpMg s%4[b17HZN I,+W?Z0[JHl1UjY4Naipu2:0P|mG&}@<rl.nHLP&vS+' );
define( 'NONCE_SALT',       'Uj][*%?Tjr$PN<%i0QRX,k0QXTE`dV@9lVD5P$3:tr@kFRM)#;.[=e]VP3!`d7R%' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
