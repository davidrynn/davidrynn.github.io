<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home2/ab2242/public_html/davidrynn.com/coderBlog/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
/** The name of the database for WordPress */
define('DB_NAME', 'ab2242_wrdp5');

/** MySQL database username */
//define('DB_USER', 'ab2242_wrdp5');
define('DB_USER', 'ab2242_davidrynn');
/**MySQL database password */
define('DB_PASSWORD', 'secret');
//define('DB_USER', 'ab2242_wrdp5');
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
define('AUTH_KEY',         '|yT@v<2ruvx-y7Ixm)YLp2uh24k8|BQ2l2oUW^sj<^;eJM=!XzU?@~JeLf@=aQ6z;Gx9\`Fx');
define('SECURE_AUTH_KEY',  ':unDMaa6x-K3bkId9JchuwnTcyqDz!~18awzMlW(a^^gxtE)T!!\`u-Rd*1gJjD47WjmRdR=p\`_p');
define('LOGGED_IN_KEY',    'gzzRn(zv!<pH^VgV$;Z4=(EOS5l7n0h6LCoV;T0SGob~0yF:00MTuk>gxjQOqf?');
define('NONCE_KEY',        '0|EPVVFMsN)t0s?RL>pMNRAdEuT5P^yn2H<BaZ9rMd7_mIklBW(z9Hr2bM)tm#=VDpy');
define('AUTH_SALT',        'r>bCOgGr^Y*v$7pQMIL?5d2a0<f_PMCH*|0):Xw\`AiJ7rt$V\`:IwADp<~b/37@nfb$:*sOs:E#');
define('SECURE_AUTH_SALT', 't<M?ECH\`3;O86\`e21HzZ\`1G#JLHH*sE#1lf/uUI#-4Ur2<$Z)PeKOTlXL#L8q)a0X@Apcpq#xW');
define('LOGGED_IN_SALT',   'jA>gdZO*eanj^(R5JHZu3$#62taFmEp$\`Kawm4sFCV?<(dt=M:kOYVljho795DYMmBa7ykoT-(8WPz$D');
define('NONCE_SALT',       'jKpMS2wS_c7EI->ic334*OBK:?2ah$M?FNTwej/r?9xuY!7K42pH^AHhV^|FyTV5r^NM5t0mjC~p7#GxF');


/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
