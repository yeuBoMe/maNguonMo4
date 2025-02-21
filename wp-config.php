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
define( 'DB_NAME', 'bai2' );

/** Database username */
define( 'DB_USER', 'bai2' );

/** Database password */
define( 'DB_PASSWORD', 'csalien2k4' );

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
define( 'AUTH_KEY',         '%?l^Km]s;Zw1{/gEv@JxiUVWvGH-&e&yq+?uZ1~:V)j/uKePtP}8nDK^U2[Cz)K!' );
define( 'SECURE_AUTH_KEY',  'Dm.~th4R<y;ES5Q&*G}V5TizpRPkN1!L|*{1jji1>h82L`LOvOz/UK_>{uL[0V%;' );
define( 'LOGGED_IN_KEY',    'y>ilDK0G8-%!)f}gebM*;m~$Q #ocFZrYQdq@!T)?HZ(b#_gDqN+*{VGt<<}UQE]' );
define( 'NONCE_KEY',        'My@Pw{KfzI2P:~h=ER_*1D?{w,ti(X17Rr@^Kt5YS^`A7LR&?7j|!xw]Zl9ym?Va' );
define( 'AUTH_SALT',        '@qJplEYJ9z#Y?R6wY;3bI%V&lt$nPgfqFLaL W+61IB8p6pLQF#U-wDN|~^5S@k&' );
define( 'SECURE_AUTH_SALT', 'Oxi2-Gu7TvU<RnpA?^u,||558LEc324aa9MCXY2)|4g]bj nr]la 8y~RRh7yu3W' );
define( 'LOGGED_IN_SALT',   'phg.K rP)2_:?s7Pq5TbGp/-WCrIs]ZD5nQt_5@Kq:Jmjvo-`($<9wz uZcHg__)' );
define( 'NONCE_SALT',       'un9f_;{_6?S2v}sXl[kV5Jb1_rI0g-XOBP*:=YXc15|/{^DZZ`c).~*i-(N CqK*' );

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
$table_prefix = 'bai2_';

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
