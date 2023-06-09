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
define( 'DB_NAME', 'jackpet' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'M}(yc79++KX!w`!9`|5X+A(X^ow[>{qti{=j^+^mvrc5hagXd}nUxVyxi],Ll|Ov');
define('SECURE_AUTH_KEY',  'JzhGZ$-RPZIhQkUj:ag%#)wTQD*z%~| t5XG7Qgt0>M7+ZC50=>OOEeVkdt(jrJq');
define('LOGGED_IN_KEY',    '3IoHq8uotVFyoXa&UZr&:YE:Y1mfFHY6&O<a4!/oL^w~e8t8~u!Po[vj/0U]? X+');
define('NONCE_KEY',        'WbjRwIEbk@-j/;(pL{vS5]x/S-aOx7;6n{e*w|@td>>Df{C3Cnb9IpTU-N#5|-r<');
define('AUTH_SALT',        ']<eTXBh*=P)=E@_U7)s/R+Wjt{!5?Ai9{pwx/A]tnZxy,Xf sc+jkb% )tKG#XAO');
define('SECURE_AUTH_SALT', 'iw=K3Ax-0,h$ntH~tzHF1Hbx30@^s|lOSe,8<ZOf!z?3!vvo;#$(fwH*cP^];d y');
define('LOGGED_IN_SALT',   'E<syhrtY-+1E9%#<bLE%9`J4SL Go`?SqJRa^GE+ni93nqt7VJ<X7xahPqNtP>5,');
define('NONCE_SALT',       'vyg|Ep+j={_|id*&Md0@o1(4.l !2I7.eryl.HEFw`pcX|-f*+4<oN nj_^0bq!7');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jackpet_';

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
