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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'rdamasceno');

/** MySQL database password */
define('DB_PASSWORD', '*Rafael1992*');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R`6A58C3/TnyC&g+zz9FxX6!:+lvs|HhqDC?Yfe)|u6<3W.9/9ZR5A6y?<:P?Z]@');
define('SECURE_AUTH_KEY',  'o9ax:`lvquqLpa4M:KMC=UAcd2Js;J1Tti>>fY.ZGO4?rRu=^n(>]*f$TgM`9a!/');
define('LOGGED_IN_KEY',    'eJ|(a6N`H=XUUtfmO1+flp!@hdh8}(mKB=*~{0?H;&/SKzR{Z^p(?%H^.ej<H+%,');
define('NONCE_KEY',        'jD)C@`d&ucfL[F5]SKs<#oXL-vIjj-@CCgp=-Q{O23-@PZ#8&mfdQ[iVmLJ^N{ts');
define('AUTH_SALT',        ')y@|<EY*YpM16t%^&:jg;>/D{m#%JvJ5t{}@gnWd%*I}HY3pK^GrzVRSwkZ&-/y1');
define('SECURE_AUTH_SALT', 'd5J1I:XkQI1kjJ)N&Gh)YFJ%O *MnRs*lr)|c]^v29dmu*XR5sA%EnRHv ;{l=0+');
define('LOGGED_IN_SALT',   '%e8gytd:Ap=84Km$LR+S0qSSZ2nREr=4{lkM.we3v{20%9l{8*~5KW8|:0<6]}OM');
define('NONCE_SALT',       '!0iIq1G923v~m?_QHI[s.@uZ|b[.T, nwE1?LXtS~jd$)tE,eo5Y#X0; #?kG)Tv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
