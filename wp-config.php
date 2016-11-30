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
define('DB_NAME', 'livemastDBt1z1f');

/** MySQL database username */
define('DB_USER', 'livemastDBt1z1f');

/** MySQL database password */
define('DB_PASSWORD', 'fq13969fin');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'gFcN}@F03,z0vjUkoZN}J8C0!4>z@r[ocNRK5-os[~pOw-kZ8ZKOC!1#]-p+paeSw');
define('SECURE_AUTH_KEY',  'yf<y$mbnbMQEJ3>}$7@ncg>yYMjncM}C04|z|vkoY!gQFJkU4,~!shGhRVK[NCG0|');
define('LOGGED_IN_KEY',    'fcNQB0B0!,v7$ncf^rQFJZN8@8[:!g|zkoczYNRBV4|-~8[oZ!|wkJkVZN:_x-lal');
define('NONCE_KEY',        'q{$rbufTXMjI7A{F0vj^,zjJrbfQFQF3>}@rcg!sRFJncB0NRF0v|-@od-ZNRCkJ');
define('AUTH_SALT',        ']{+*q,jUIMnY7{QI<y3.<$brcQUJgF3,>M7{r}$^rfkVJNBZ8>@!F4zn,vznNC14|');
define('SECURE_AUTH_SALT', '0kwloGdhVG|K8C:!8~swh-aK9DeO;~GK5[p]-~tdiSHL9W6]+*H2xl_#+lLEI2<m<');
define('LOGGED_IN_SALT',   'VplW5dORG|G15[o~pehStSH25aO:_9D+*9]pauyiXITI26{E;*ux2.iTM7<y$3>yj');
define('NONCE_SALT',       'Bv}^rvgzZJ8CdC:!FJ8@o[zkoZS1_w-1#wV~!shRdRCG59;~_t;~eSW-pODadSD_6');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
