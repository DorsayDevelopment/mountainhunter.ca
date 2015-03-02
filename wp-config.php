<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mtnhunter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '~/GSC#uDrM+gWdk%[/o,0q`+ckUG9#j)//nuX~*gqFY6Vy COg|zgy$<+~pte(mk');
define('SECURE_AUTH_KEY',  'OFv]q8dE#p@iFXle3uy]R`|f(y66&Eq1MYxLw-dT3KD;+szdD!p;r{GqR}9Ya8CC');
define('LOGGED_IN_KEY',    '>HdMQWB)hEz>lg}pMM@T>%g+P0?G!<lS-]^kGK.60~S~,<8.xfmjEZf QUs<?HBj');
define('NONCE_KEY',        '-nabz3NFd-DB^rs.puQ^X5>u`UVJZ)]S;)$j]%@x}a+%{kt]9q1h%oDtO0:deLN|');
define('AUTH_SALT',        '${*^x@N3mHM=22n+j[dI,%+5KJv;UKNi$]&=dVJA,6o(z,lZz}|QBE@Lu_sW~azp');
define('SECURE_AUTH_SALT', 'h,j$&Gq>H!kM2-u_`5^9~6*Fzh17!5v_>hd~1o8j-w<v@g:d@Zv2d=}qx<+`[~d(');
define('LOGGED_IN_SALT',   'I!^6I|bt%Rj%Z7oUpc6zuo[fAkO|WDBHzstY<9VkUW1@!D=1B=Hza&?nMu`|)n[@');
define('NONCE_SALT',       'L-O _@b4R-z-cO1~Ry!GsnD(ohmW:^fkmi>ZKO+|+yBeZm7u1Q<<l<2HWr]N:n2A');

/**#@-*/

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
