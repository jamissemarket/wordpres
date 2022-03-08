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
define( 'DB_NAME', 'jamisse' );

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
define( 'AUTH_KEY',         'fLM7nI4Y0rNDl9@hO0}NUy|xFZf9-SCz/`M^$l@0!I!ZjAcr<k?]4ISFePwd)I1M' );
define( 'SECURE_AUTH_KEY',  '~(_`eb!m<I^HCKmhR!/a)l^k+~/)fnDq?]*Jop;fCjB|*Y4``w{Y-P-U88S)9y]n' );
define( 'LOGGED_IN_KEY',    'yC1AW@gBP@)E`e1XU6(({/]?Gw*~/%p@D$}8Uy-mLV*1FIr*G:/+G52?s6A4h*3`' );
define( 'NONCE_KEY',        '4N??TdV9AxCe,auGrrm)39a]{1i4riZE$hVybHa2KE{1q`)G|r?~pizH|dEE4B@u' );
define( 'AUTH_SALT',        'qv{E`{=>&%C$#}~N*<dIKQ_68^^ `m&{+WR*(|]Q9|##!-{Gx_m6$Z^S() _:9>a' );
define( 'SECURE_AUTH_SALT', 'Pg0ky].[|8tF5TVpsM5^7jb06r|Z$5*y~5x7$L(Pp;^=[RbqH%qbCX@pog99#B9K' );
define( 'LOGGED_IN_SALT',   'XW*?xnt:*^LmtVtBCAa>JLpuap(GRB@x8$8JqK&Mx)>#A^uK/z-O~V,p51gS@e6P' );
define( 'NONCE_SALT',       '&,kVFmPB-0G7Ko@a2jni&>}d` X&JLLUfLts%=Rkx7Po5DRHq#mo9a8ji:BD]Faz' );

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
