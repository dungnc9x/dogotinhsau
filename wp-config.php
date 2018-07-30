<?php
define('WP_CACHE', true);
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
define('DB_NAME', 'dogotinh_dogo');

/** MySQL database username */
define('DB_USER', 'dogotinh_dungnc');

/** MySQL database password */
define('DB_PASSWORD', 'jklhui598503');

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
define('AUTH_KEY',         '- D&d/h.6^/+Qk)ldXG:&+DW0`HI5N`-tAWd})(Yhpvt`PD*lV)sXfvi4]}-wKV]');
define('SECURE_AUTH_KEY',  'dUBHCM`pC8&/T1,CGe8Bn*f+jvk^_I4Fx}_i&*gdPA7H,i](_)[=^|pUps<L%G2}');
define('LOGGED_IN_KEY',    ':|jcAH<K[TJ)PWCE5bt P;L]0Z]{8vg]3`2lX:?3pOVQ6k+yH3UM9J4ZqH$7N@`H');
define('NONCE_KEY',        'c5 {}BS[.Diu6IF~}Twg(zcQ$l]XXg Kx1I{5;7M_C%Ur~=I$(8%d#j58&%bD9& ');
define('AUTH_SALT',        'U&Pg8af*Bn:$J`MBdmdEqd*FUjilg0!jVR:_u Db:Wd)A|1QS918IZwGqR_H&aN=');
define('SECURE_AUTH_SALT', 'bF.`U*NcKfVLoG`EXHT EVlj-f6W!iZ3:{QPbnJb->64g%;^1NM(!hn:$x|vdB=f');
define('LOGGED_IN_SALT',   '7&_cbKzqL{-sz~DM-v-?1$&y=f#jB[v.,k.]luxk;gu(_vka>8T+]^qCT}FbC#zj');
define('NONCE_SALT',       '$_=F!Qv q)z.Lss5jj gytvZ|aBNdr0JWD),7*Oh.*{K,6b+CcOWyD?R*s3}nmyV');

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

define('WP_HOME','https://dogotinhsau.com');
define('WP_SITEURL','https://dogotinhsau.com');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
