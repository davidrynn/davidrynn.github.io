<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home2/ab2242/public_html/davidrynn.com/travel/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('MMAFF', 'hostgator' ); //Added by QuickInstall

define('DB_NAME', 'ab2242_wrdp1');

/** MySQL database username */
define('DB_USER', 'ab2242_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', 'oOejPdaE8aMg3L');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'OSRJePPoXa=AGwM>I5cF97GP^Z;=vmPiz3h)x#58<(?LB@<?gBOPs|;/nd6H>A$#-6JKH40Yq<<g');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '3TS)a!kVw:;$xq5DB9Ze!h@b4UR)#-<Clrr^5V-Pf\`pK*?7W=R0dt2SHR:lq?20#?4l2HxK;');
define('NONCE_KEY',        'DZ/7Ydyxo/8*~Wn\`9v$=H$|F|_7n^4BkJ|XJ0G*rFgfDieRBR</pTfjQbU1QqkAy:?@5G9VW');
define('AUTH_SALT',        '5*FQ_URbZrpOm_M_5NxTV7nmOX;-c=5X=pS0<?EXki9e-ttK:o1T3pnJRf_fi\`opJj?m?yC');
define('SECURE_AUTH_SALT', 'y4:S0fQm|Rs4vV(XTWw*UhPzEZ-~V7kSvWE_do8SXE5P4i_4)m*DxuA(YIqv)z5sy4;');
define('LOGGED_IN_SALT',   'zZE0WyzKR1_x!~|c;sJajt~P2(qkVW3V1m~U;Jkdi(o48KB_YhxNcmnh-X7Z2(b2X');
define('NONCE_SALT',       'go9LT~t25)dePY=QSu</S\`;~y/_J\`XOMC7k2MzvBN???f8_)rJ)DVp@W@Q9TpBlL5wbNv1dcp*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
