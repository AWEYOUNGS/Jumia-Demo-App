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
define( 'DB_NAME', 'myapp' );

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
define( 'AUTH_KEY',         '~|g&7PQ&r?F?e)R<?mX>}L$h{%@2y{K}X|;g!:^xWubZzN;UOP2FBAFb$=`226Cg' );
define( 'SECURE_AUTH_KEY',  'kyW<_Ez]8?Da RBGvm@45x6[xGT/)]u^UQ>g8zTwOOzUo>([6K/E:iW!]b2!R|O^' );
define( 'LOGGED_IN_KEY',    '**@8E]azf)093&En5R8zE8KMB[~DJI C&wJ7z%q{ktq!~wGU`}R^|M+3n~v`-cH9' );
define( 'NONCE_KEY',        'X&S5KQR9IR.ZM]wWJ!YkE_m;5e+H`-N8@.~0`Gh&zSIGA;kbsuof&a}p?Jg/*Q1^' );
define( 'AUTH_SALT',        '=D57D=kw:?_].fI3Lxe=))GOi!>7Bx~!lP[y[r,eib:h)0M]YezvaZk>hOvYM[u.' );
define( 'SECURE_AUTH_SALT', 'KT=K$=op:i&xX%Ua:U8<=%uM0Lpf)6NGvkys)Kf*x)*B;NK$58#!kW/+^+^~?b~K' );
define( 'LOGGED_IN_SALT',   'nBjQ2t{v)&x)D:(E%Q(xi&/lCj-rwHmV--A|)iM0z[@t#5KG.iA8Q2RBk!L,!7I,' );
define( 'NONCE_SALT',       'pO?yi4$NDea~YUlru%7O5ADwVo*+Ifnar[hjnVF{P mT5(;$!tT9rM+fw.SPYr5?' );

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
