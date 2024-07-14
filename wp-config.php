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
define( 'DB_NAME', 'ken2' );

/** Database username */
define( 'DB_USER', 'kenneth2' );

/** Database password */
define( 'DB_PASSWORD', 'password8484' );

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
define( 'AUTH_KEY',         'oH^pOh8|6+zOtPmJEe%-I #D0b#6.V5M-[.ce9]C+$P+2p}vEKcP ,st>`]oca?S' );
define( 'SECURE_AUTH_KEY',  'u$1GY~ YimqEjBoH=$;psb(8Q=Wg]:ah70(O5f;}Z&E(fJ5y)3b519=p5Y$rz+ZP' );
define( 'LOGGED_IN_KEY',    'FCgvoGaVFf7X/<ka4TbSR!`HppHp>73(u8)MeqqZDyUl w1{d[bJm);V%vEzlte(' );
define( 'NONCE_KEY',        'R$vZ@e0B]Wj`;l}Yc6:WMBJ]|Mx(uJ<ljfV.K)M.*i{jC9e^%C9PPLB50s&,$&Or' );
define( 'AUTH_SALT',        'Ykb p_w2(_h[D/s+@mgsyKHx/m+CW?!cG/|zK:Nl}eKvMM;;y-jx2:|OC-Q-R4:M' );
define( 'SECURE_AUTH_SALT', 'ZqOyy[(-q?qIR!Vp402q]PlCZJ WSk=,/Id5mW Iv_y(V#TSUGKK7.f8E#TmGI`P' );
define( 'LOGGED_IN_SALT',   '>cs+y#8URZ(<FR}<dPn3o:($MK7Uc1],)(KCB`>wf&6HouMG1|)u>7)OM^`_0a;j' );
define( 'NONCE_SALT',       'K<X3<fp_e}QQm<DAPXLrrK6E$9:@00lL1:1%S#K)?a!{-d* z$z,?gvrwxpxxR%/' );

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
