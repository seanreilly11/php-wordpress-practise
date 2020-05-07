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
define( 'DB_NAME', 'wp-custom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '!^~1a_UyU9aLn_rSn!RO@yaeEH?Y.R`ez(?IEDiD24CS$Bp)JpqrV4LluxUQ^=98' );
define( 'SECURE_AUTH_KEY',  '&ZZ3iqDl0>UrZ$I%zx%K>3+h[75pwNBHq2EI9p}t0>hX4^B`ck^#$JZYs6(23LS;' );
define( 'LOGGED_IN_KEY',    'zbm]U.oGWcmzCRL8`,)iKO:r6nuazCsCr3:`}k-[G`(i&9w^w*ZTt@4*jak$Z[nx' );
define( 'NONCE_KEY',        'E@PYdzY:r!)~iCSBA:P!@}14W v{|x4!a}+J<Ur/I)y7oP;}B9D)6e7QvIj^}_ Z' );
define( 'AUTH_SALT',        ' {(oK.}&fagORzVWTSf;-Pac2nRL$0d!jcW#f3TSNyKLkn_|2X&a4m6>zeS,SA}2' );
define( 'SECURE_AUTH_SALT', '+c8#xF:)??y[aOQHsbe]BZX> RPq/.wx@2IIDQW&D-.<PD8~o^l_Z)L*KW4X[9A4' );
define( 'LOGGED_IN_SALT',   'e%YoR8w_PxsD=b$}xB$_GuvZr5h{[eh48(*782z*o*!o5J+w9L;1ZuIVh83L<;nx' );
define( 'NONCE_SALT',       '5EiQk07qc-E*DmsdG|{rBje{W!-S =;gzDr=s:Mx`H875=$!q-GeX(Hs3<xH5hA+' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
