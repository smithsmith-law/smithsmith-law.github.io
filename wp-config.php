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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/dh_2t43m8/smithsmith-law.com/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'smithsmith_law_com');

/** MySQL database username */
define('DB_USER', 'smithsmithlawcom');

/** MySQL database password */
define('DB_PASSWORD', '*K8fw4H*');

/** MySQL hostname */
define('DB_HOST', 'mysql.smithsmith-law.com');

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
define('AUTH_KEY',         '6dI+GpyVj+NauaF9`04%q0h1B^BbTcZF$hoz;`E"6GPn!A)+Yo$gqv:IM48;ICW2');
define('SECURE_AUTH_KEY',  '8)_hJ8NRCvAjYCk(?o*@DG5%8YE/$4|;oI0KRW%D:spzwZs^EMleW9z0GRTUXT/I');
define('LOGGED_IN_KEY',    'YHia)SgP4Xq?HfDht;iunsoj#JHo_k4ZvMMD;4&aYsNny6xE~25XYxSNq$$tAYv:');
define('NONCE_KEY',        'NNcDej#a|ydgCslkRknlhc`1:t~UF3N_w0fG@Pu!m;WlzV!Xc_1RMwXxH/@#Pcak');
define('AUTH_SALT',        'u($;1W2M7$(3%GM$*|ZT9SO7JBEPhJWJMY5;F&f2*3*`K)7mem3Iu8NJce;j*ha8');
define('SECURE_AUTH_SALT', 'EQi;!PlYGA1q8#(?6$k~a%a@#_R$)PxJw*|5Zb5;~XzQiW0^M6+ICs/7vAX3nE?9');
define('LOGGED_IN_SALT',   'kP*5sO@oHYDxJe"*1gDC*NuRa%Jps7_#gk)^C#`2ENZ/cOv2k)V;"%(1!h3_h~OL');
define('NONCE_SALT',       '#Ki@n/a9eBvM%I|KsdK!#oFuOx`$4atg:z+t&TRzJagrjqhV17GQpik8b$@Whm&6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_qn98s4_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (isset($_SERVER['HTTP_HOST']) && preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

