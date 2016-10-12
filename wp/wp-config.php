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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '2:p;05IoSpW#~+4kaYgF@)Z%E~rDeBV^sS[Drs}ItO[B!6LE]dh!WL6yTN+UUezc');
define('SECURE_AUTH_KEY',  'XHL+|42o|T^z>7pBL&-1-Q^!p{@$*ZsFP+LY<aSt6>~lAe@zTKh2B<=SM>hvq a%');
define('LOGGED_IN_KEY',    'GDGkYy#8V>NZtXQTFjp>Yvc,r35`>Fbb}L>iNH7# Tc0?$%dfz.mt5<<%.[*xA/J');
define('NONCE_KEY',        'A&-pI0fT#< ^CCY2-DXw<OT3PeyO}T:%yF5nd%bLbi0mxSW!*It-*t}8@XLvO73>');
define('AUTH_SALT',        'd4C$iIfojGR|7rKLB1=~Au:@FuIwpByFH0#f_`f7?8<,tZNR]W#XMm)LdD?8;>k#');
define('SECURE_AUTH_SALT', 'Wc83x|&U}=@<H!][=PWwMazHpLJS6sP#D%Rgn_JOe*f`;msO:`%|(7{hXR[W2[$|');
define('LOGGED_IN_SALT',   'TIlEa=u>)Y/|vl;w5(eLkx=9BRAW85b1;&]w(K{< =O^(B}$k*WWe#B14@R9flx@');
define('NONCE_SALT',       '3M}0I( 1}Ak/$[e!O#Wyt=!Auok;!VEy-N[:||qYE_y;)JZ-kygrGxZ n$T. H.?');

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
