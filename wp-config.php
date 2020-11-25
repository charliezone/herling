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
define( 'DB_NAME', 'herling' );

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
define( 'AUTH_KEY',         '|v-GMT>L,/Vy(iE}/VD1C+]CZ8j&Y|-`)]S9T]}BWGJUws`C>E)KXF-]LkT)HJ)E' );
define( 'SECURE_AUTH_KEY',  'E5f2 @4;d!~bj49]w8]6c%1Vmo_i{b;Xxdi*JbAG#xOX=Z$}~WEk@,5,svgmBB)%' );
define( 'LOGGED_IN_KEY',    'r8*7;}f*m`Yqe<z_S5rs)yuo91ti+Pt)LX2S ^x?4-{wpskrYTnkT)0,LsR=t<7f' );
define( 'NONCE_KEY',        'HX*-GrQHmit]@Mhi(|CLE!0!*<h-.-^i@00jY%j3K%R_fTew>&F&&~lAXuCq*9D@' );
define( 'AUTH_SALT',        't3WK20b#00<lz/R5[~:{GV3C>6g21g(>+EbG-OO^)G-D#pWD0qTP~{M&NLot:XD%' );
define( 'SECURE_AUTH_SALT', '2;S8YxX=3k}e&cy=Rpd^[Rrcm ?moOzF(J}nPlj(#t+{lDrVET^b*3OwRnTtj.ma' );
define( 'LOGGED_IN_SALT',   '>a!fHhqj+#SrGzQ;s#K0V)c(=76@6)/dc![)GXVhsNJdlFI2y+e?jWYhE!8*54H,' );
define( 'NONCE_SALT',       'lK(cIB,<g0B( /BUhH~LcXu#_wH^;Jv%gDUdn=QQ,!J )cYnB.qJ5]o3~C{P;gdC' );

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
