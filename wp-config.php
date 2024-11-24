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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'karlysweet' );

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
define( 'AUTH_KEY',         '6o]1He(y~*h*v`ZFR8$oq-gz]6tVfFoz K%gMb[0ye4pW5S3hKxXWY*JM{}Od9CZ' );
define( 'SECURE_AUTH_KEY',  '-5?2+9xm9:3@cJlTqm]:K2o?er6f]X{>CoIorFt:Q?&7g3AMC-T/e&UT=^Rgq~dk' );
define( 'LOGGED_IN_KEY',    '&olPag_liZAy<9glqM`J%jK@6HG^6G/ Fm(}o{I>4PJO=I`)B!Re>F<5oVspnc4h' );
define( 'NONCE_KEY',        '&Z/a9Lbl0w1xSdbN>NAqvi@AYpRxHQ]D2_1KeClrR6,)DCB>&W9Ft->%(2&KKP99' );
define( 'AUTH_SALT',        'oE&Yth#m{PL**KEqj:1g!tFge1h9kg49>a ?~&+zT=f(bi]q22i?De[)tWh7G={@' );
define( 'SECURE_AUTH_SALT', 'tcRl|b9(G1=kz>OXduItGg%x*|D4J$DOwx0g)KkY13K=ig49!Qk<cU#((*mE:SVe' );
define( 'LOGGED_IN_SALT',   '!r^zu~F,rXTS0yl#MluvirC&w&]Q|c3%{ZQE^DvGRO4Pb,cX~^uBOAYO/-b(6x5p' );
define( 'NONCE_SALT',       'i3zV2RXt&wN8OI3fF6*xMh&:2*Ia /TwF9({fIHv$f~1[o@sB~<`#.B5v8tX A2/' );

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
