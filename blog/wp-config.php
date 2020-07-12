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
define('DB_NAME', 'wpress');

/** MySQL database username */
define('DB_USER', 'wpress');

/** MySQL database password */
define('DB_PASSWORD', 'sandman13377331');

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
define('AUTH_KEY',         'mmnK2hz$l^g&UUvV4&]~0&68nt7.r`zY;z9M99$v,Uu(H-X^c.Cm2T?QBLNN#TWJ');
define('SECURE_AUTH_KEY',  ':vF!PlZL&KjA.VFe:F:!v5<jW15{j1mu~GH.`{xp %%pd!fGB((+:Xb?OVqgkJuy');
define('LOGGED_IN_KEY',    '(q,%YFPyo4K}]g]H#V16Tfqex.I(}6a_tN?EhB7RPYu6%DUDh*wQ@wLz2DAEZS*=');
define('NONCE_KEY',        ':w8TZTkaX*+-3_MzWLFQDO| Z^/)}]g?4?P4U7j9D0u3Aj>pXHe|}bhmBL9%yUp`');
define('AUTH_SALT',        '9D8@,xNwO#uAiqu|F!*ie)p-4/rwb!c0.|qRYkF>.Q[iI5?mQUGUly<Gl4W?-Z0,');
define('SECURE_AUTH_SALT', '.ycn{Q/ o#l,8w;5zR{QIL4pHWH7Tb~bzZ`b~mzMC~/yQ938}`8G9Q{$`[|u0>tT');
define('LOGGED_IN_SALT',   '8M!wis4$0^M(sN~Qfck__LJoc@&zu_;@W?eMYzn+~sNeb/VAL=Q=9/,Xg+N=*,&r');
define('NONCE_SALT',       ';{eho2~SP|^x(E#gi;Y2xIhdbZ[0:U,7/.:40 _U+K$P]K;o3T2T%R4j=#_fvL~n');

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
