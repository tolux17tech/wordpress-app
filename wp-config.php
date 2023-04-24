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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'stackadmin' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

/** Database hostname */
define( 'DB_HOST', 'wordpressdb.ckz5bm1yvaoc.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

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
define('AUTH_KEY',         '`,db|es]kC.N$Os0lofn}SN8$@vqknM0d|R>Z+eqS;ok|<_V+]4--^Fp0r}Iz7.P');
define('SECURE_AUTH_KEY',  '>~N[BB#)NV`*a&Jy))KQcKr#gkN+_nEq<%A5DU-F(IYea:}J0%%$9ev9O?*[[!|K');
define('LOGGED_IN_KEY',    ' M|g|(fN11_>M7P1+PtVatAxE%[Yn-)GoG}<YH-t2P~GdBN@N>E_=#+>vRVQl6Lu');
define('NONCE_KEY',        ';*@:ZJ7{VIh scj4LR -Yi+@sJc]Rw3kzg]&J`KGwe&:;jln[M63KD5DX*_y,Z`J');
define('AUTH_SALT',        ']S[B|AIMSblBf=>Yr(z-3X3@8!|l5Uxg,k .>F2{DC2>9d/0BVMO$|z{-`%b%~Ir');
define('SECURE_AUTH_SALT', 'nS$vkcRyBGz-+/qoid>D&BUq0%iyvc)>C-HrgfE_2se~l|&E,Gn`X|I=,N@k8hNr');
define('LOGGED_IN_SALT',   'aSY)7$UN$qzO;f|T%;;.kH|x&T=XDQTLy9Pxb>>G_]tQU#A-WOK91M!{->+aIT2-');
define('NONCE_SALT',       'N5tkLp[XwfX5n93Fr)}}JZbUktC]^;j{,~Abr|-Psa;WOG+Q0*AYaLvmcs(EKbD(');
