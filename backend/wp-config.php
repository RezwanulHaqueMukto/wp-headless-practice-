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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'headlessone' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '}|Wz)B(7X5H&R>`.:w;m;o1jI=[h.a1@!BCyQ(/YrF|oN^z<hC5;sUiOF<FR-zAt' );
define( 'SECURE_AUTH_KEY',  '2~d*}]*RXeE0_=<,6&OAZkhx{$MnmmK]UcHrp3R{Po.s=USMiH5H>GRki_>cg|{{' );
define( 'LOGGED_IN_KEY',    '$3Ssv^wWL0@%vsWU:|=eh2!hSvH~@4z/OQ>pvry^M9)7S(/+G 3KYOJ-?(C@81+S' );
define( 'NONCE_KEY',        '?x7d]}!L@Dql0?&rzXr|3$LMLC 9;AB@{?b|&q9wPpcTl0<6;N*mTSTv0h}0g@AA' );
define( 'AUTH_SALT',        '`12;w?ItoPY .O8/PRUQUQa+MI,V&CkA%&[l(=lt&.H`Wbjy><T{i }S}Cr|.SJp' );
define( 'SECURE_AUTH_SALT', 'GZia=<cY`, C=~;M^qT!4>* ydaFkw E+.ktwT,`w^n@5.G KMah:1hti+gc+uk|' );
define( 'LOGGED_IN_SALT',   '@uWmN#6ZMk^Gxs908Fzj8PP<9xsP ouAp3=CzmX6%j]XSOV/`p5*0Ow@@Xn&=_?-' );
define( 'NONCE_SALT',       'n6c:,BI[4vI]}vs3G*_(S-><X+{((rAevlHY]nL@--eXLcJXU)OXLk(3;i]+RG31' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
