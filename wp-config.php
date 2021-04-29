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
define( 'DB_NAME', 'prueba' );

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
define( 'AUTH_KEY',         'ZCsA@k%Y,qc*4:@f|= {=UuP!Zn-3:w~W7FEchwy$+M&a>(Quuk}?vK %~F, A$B' );
define( 'SECURE_AUTH_KEY',  '?8!+4FUO0c2wH^rBb+ Ss::nihFAwqv;l[wC:}F_PGEM(&0=aO@6l8 T)zz}Ey5h' );
define( 'LOGGED_IN_KEY',    '6YvE#W@_gAi^FxVJxh-@3-)^}pT-MG^rR#-wFCC=yRV;z(n?)>x(d?p67`wH-&]?' );
define( 'NONCE_KEY',        'XZB0KEk?M$zindXqglHmw#rVrxs>?q%E=sz KClgVY+/[YR/8<zaqE!zqkeiLFAa' );
define( 'AUTH_SALT',        ';yX)|Qum]]oB5(:sXf2&/#6h6Y0rLDI!4})d6b$:c3xY{;MBfU#}#4krL~iWL]Bl' );
define( 'SECURE_AUTH_SALT', 'BESs$[i!t>!554Cz6y,v4rC=;Vu@/sV#TZ!wh$>D+zECjwSl<tT:qzp9n77losW4' );
define( 'LOGGED_IN_SALT',   'CF2)<Uu$NC6^:p!AieBhiz`=yz]-5|vE)WSRITT``;x$&@Ie]]9;uCRZTXm}`Hpd' );
define( 'NONCE_SALT',       'hr+#sJY?k7/snU(>}%$xhGwwn%B^#c(CgKJCRWacTb{3r-h_&=NG% }m]Fsvo6`-' );

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
