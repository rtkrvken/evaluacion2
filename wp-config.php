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
define( 'DB_NAME', 'company' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/g{@Smor^nmwlVGX0_h6Z%:wt`++^/xsIh$@&C{|OQG~%r|l)@~au$%5d)__OnJU' );
define( 'SECURE_AUTH_KEY',  '& &w>TzR`+CC buPhVa95B/s]~b]1L=XYcfx3s<7+.3>Ma-Xf6d@@G!&hg0C.YTO' );
define( 'LOGGED_IN_KEY',    'X;uI#]h:li]yr7NPZb/&0Y]+iIUJ!z:pI(N-54[%[0_>lr$cd<r%@zBF<R_%5zrT' );
define( 'NONCE_KEY',        '-Y#sr=B2:}w=1j;#9](?GmuO^P;X4dF^5,2;rm9qg+K0/~(s*Zl&hF_2gYPFN=^n' );
define( 'AUTH_SALT',        '7`6:V8Lbj5YRC0$0BA Jt4:1xBqJX?k5;k?!pb] *9B[<aN>vooWu.X+4TtIY4M$' );
define( 'SECURE_AUTH_SALT', 'EW&ZRV-+B^:01@*YVtAx0%q^*%}7P#fQWSosms{z@r#I^WHZTqFVbn]CEEelK>XB' );
define( 'LOGGED_IN_SALT',   't#I$s;:9]A..{?d_:Q1ysl3(*ZXZLy;lz&j=vg[?ssX?Z$  8Y}h2oSR NSK]LNE' );
define( 'NONCE_SALT',       '40#`tF=Zp;sI&fY8RJWWLg7yArwF>(1@23*TUQOnOLQ[:sMy6<2APuP<vi:cYVX^' );

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
