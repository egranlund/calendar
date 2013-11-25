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
define('DB_NAME', 'calendar');

/** MySQL database username */
define('DB_USER', 'staging');

/** MySQL database password */
define('DB_PASSWORD', 'vQJzZAu9MLRqRAGT');

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
define('AUTH_KEY',         '|BH w/&cYF4(Exd_1vM}Z)a~g,.+dCZvPl+ZVIeM#[Z=Bh$:YM3z7KEH9F.QP]6n');
define('SECURE_AUTH_KEY',  '|:Tg#&Lcm}.pL_#ecy]-|P.FwW7%=4|@*BXib#62bM-6KwonY}W_BHt7DyB+ ->G');
define('LOGGED_IN_KEY',    '#>T|Q=6+4<I+BIMVYHXZ$oDB/5aePd:v6>dRbl{$^y|r2O{Xgl.?W5!C#& Mo#}h');
define('NONCE_KEY',        'p8`g^YY_qe}The9^_or%sDnkv|YccxV_6{LoY=Ss]7K.+t4vPy!pcl bam1H_01#');
define('AUTH_SALT',        '||j3vIgK8?>FUB!?A}XO+OCP.Xc0]VBpjs0<T]VCxP(}C.e1(Qj$B-f-1PCEPc0}');
define('SECURE_AUTH_SALT', '/(0+&I1GNJ aJ`@w`=YyW-,aA3-g=+Ok?rj7gE1q_I*KbZ@Iut9JY{JyYk|igia)');
define('LOGGED_IN_SALT',   'N?|-LV@)Of<6LR/;}4gQin{+8A5+um|Xaycb]x!9j$BwyrF2b`Z+~EQM-oTGl-;T');
define('NONCE_SALT',       ')bw)IY-jXN|,0s}^s X#Ne+~R[N|sc+qXEQvu!K[=gA9eg4g9ql-ij&4^;.oX2+]');

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
