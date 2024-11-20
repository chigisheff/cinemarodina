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
define('DB_NAME', 'ktcmuguk_wpshelf');

/** MySQL database username */
define('DB_USER', 'ktcmuguk_wpshelf');

/** MySQL database password */
define('DB_PASSWORD', 'M86PEo[S@9');

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
define('AUTH_KEY',         'epbcufgivehi2eujwy5eig8dvewv5abngemjamjjh0fjrkr4hqfcvunxkcwujsi2');
define('SECURE_AUTH_KEY',  'cclvxqokosfhf4vwmjl8lijo13y2nc4pv0a76nbdoljdtujik6nj6evb4sgoxgnu');
define('LOGGED_IN_KEY',    'enlaegou0xwmhl77n7slwh57lzme0ki0tseewyg87leavcib10665ykma73y1qzm');
define('NONCE_KEY',        'ypt93ml6tc578brlekdscqbmjqxytzwdoado7xfemlozn0tiv2lvcxjv0n3wxjle');
define('AUTH_SALT',        'avhmfz6cdtx9frw3xo1hthfmhqylhqxcr0acdo1tsqwelgno8bh14venfwsjqvkj');
define('SECURE_AUTH_SALT', 'gdabt0aba6c0xz0oqwliyofmbwehtgzbmhcqfzjbllicugink6bx1swrgja7oaua');
define('LOGGED_IN_SALT',   'qbtzzfpvbqinehhcofy0njssllzcnbqaqw4wjpchxbijztyusju4hm6ntt6yhar4');
define('NONCE_SALT',       'okrdfhadtef344qdzo8xfwjhw7599jpeyztezcpdflzjucxtrpyi6ei16kqcdjte');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mh_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'ru_RU');

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
