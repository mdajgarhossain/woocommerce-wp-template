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
define( 'DB_NAME', 'ecommerce_db' );

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
define( 'AUTH_KEY',         '#h|Sbd*=@LE QDH>,>-Cu4[~p9P&(^% t2#+huzg(Fo;TpO]L7aUUErqaF~()>M$' );
define( 'SECURE_AUTH_KEY',  '6AiV9YRz7]tm4fF591x&R)Umh2rmbBCQA2RP5Jm5)#RHkJgM~sAD2C+Iibs9,]4v' );
define( 'LOGGED_IN_KEY',    'cZ)/=ONgLqY~i-s_j+UuFu47`K/P7hpR#:Vot_,O_k,dkjWC&1?vA5~@dVrI$9xm' );
define( 'NONCE_KEY',        'Hsw/)SrOZNs%|*D!4v$~WqL2d:6}A#EZ/oa<8)>#9m)r.JP)MBctEH*7{`fpj)[{' );
define( 'AUTH_SALT',        'h1@}oL+O&0t]>:%j/yP;`|2:uRno16I.usZVfVWF%f?Xg]WOM#$/j41(#3))nMIq' );
define( 'SECURE_AUTH_SALT', 's#s17T4R<CUkB9b6)6uGF ^atUkvLw^JsD/x`O`}d+:^Wgoeb3^f<#IgYk=G(e]Q' );
define( 'LOGGED_IN_SALT',   'kKOL,Lp]YpnR$XROh>.eeT,t5uz.Rju_`8U$bO0NBtm#:wC1<A&xR5@`SD*N[p]5' );
define( 'NONCE_SALT',       '-lXyciiwf(LN$ T j9pc_4V=a!^yS==!2Z(YR[@z8=~0LxKU!uA+SQ!A%M/LXhoB' );

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
