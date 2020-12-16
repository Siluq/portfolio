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
define( 'DB_NAME', 'u534268_offschool' );

/** MySQL database username */
define( 'DB_USER', 'u534268_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Admin123' );

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
define( 'AUTH_KEY',         'AonJ[u6X+Nx)5I`bY#h4I~5[4a#/5*O4R1Bp -YJ+,mUlxLMWNz4lR.gNm62}S,x' );
define( 'SECURE_AUTH_KEY',  'GR5)i7@Sj<WC3ItU.vr8i48bj WSvR8 kA7F2Kkmfu.I] /VL}6m,SlQCwV3_|0X' );
define( 'LOGGED_IN_KEY',    '4nme#XFA-?LxK6bWo~dwNgq(@mI@)V5y<jYg)cv7)YJKreXM~BR2U/+::3Mjf<kF' );
define( 'NONCE_KEY',        '[u=7uo?(Rd;^}@Jd2$E}=BwU]E+i9GLI}Z,J}tgOJwfo6eMCxP(QBzz]hBGvU^~=' );
define( 'AUTH_SALT',        '53x*Co Qj0uJkpC`GnnzX|`s5@(o2g6P0J5GT;#rJ>nX8Q_>Tui;W2mI`1e7r)``' );
define( 'SECURE_AUTH_SALT', '8P]jir(lCJ@`1Vb_M1/!|:s~Ih0w?kX!u>YAzC4aqkjgpDj0P0m%LDx/y=J{^00>' );
define( 'LOGGED_IN_SALT',   '|<{8!htoEj}N[QzRL4;X]kf^b%+,:s!!@<WQKO~$i5PpiVsER96t}+7QYWZ(I;rB' );
define( 'NONCE_SALT',       'bT|#!bC~}# ?lt4P%BdaOBVE_V,YuXoKPv{$q~-}C<]v.(h5^l`XD52B0F{Ty({-' );

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
