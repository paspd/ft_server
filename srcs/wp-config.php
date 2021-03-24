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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'ldauga' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '-nQI%B0(R-j%k6;UzlCXVJg-,K%HvBG|Bf->+%m ]?}~,20%>A=~*=;Y)!9[.36%');
define('SECURE_AUTH_KEY',  'G(Y0Jp]4!P -6Z:<D]NAa3`#:|dHQx>&]uPR-p#{R>8wsaZgDI#3~8XIg &6O/P+');
define('LOGGED_IN_KEY',    '`6,RQ_scs=Uw;%!!uouY|QV,qv b/]sCo/H/c_P]t]ZyQjW?)iNn|>F;#]b&e%V6');
define('NONCE_KEY',        'Tr_Ar7Q86=E%Cd;dPU2TyIPi!kw6yX3E?.+3hiao@uy|j1e/Eq;B#:&^CNE!j[+?');
define('AUTH_SALT',        '+Ze-qf^EMtfC|d),0(5[iNYPR3#^u5Foi=ZRs4|E}V-xY3L9o:-3,6+g];D*!^!h');
define('SECURE_AUTH_SALT', '?`HFU+]M*-TW{iv+PgErMI^$75ERod{3GXj0ef2+;%wi*Vl0dce=-{N-}@,kzO&s');
define('LOGGED_IN_SALT',   'L#eUx}>bAZ[S_JkZP|mfFd!zyF^Q~%)7^%uST:&^5L51[u60xpH@q(I`}ZI#_t1O');
define('NONCE_SALT',       '4k,USfjprTpE-LN1=P+$eY_SL+0COf|)+3y0q|n?HLGOq+T/eAmYA*4%cLM{rOTL');

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
