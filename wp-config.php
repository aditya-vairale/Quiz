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
define('DB_NAME', 'MCQ');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '~h(^fV/U%*.RckGldso|-$h*vBS-+QMwN*]w ^%S-wb?=X;lbX D:OchD0%~$=;P');
define('SECURE_AUTH_KEY',  ',KGoIQ,|vfDmZBF=uDlYN`5hv3eM^Qo_k3eC`9,X;Tm:PSeN|X5Kd+w].+b+%#^V');
define('LOGGED_IN_KEY',    'n`ZP2*::+~GHvJP8LI9s(]Kz0m!S&lt.Oc =+^~3<{+SCZ:fa!`l${4w(E[H<:Q^');
define('NONCE_KEY',        '5KBbzV4}MaI43K+%$OJ4G[(*&qds| mIxx;^04L~R9r|[nT=!Iw<Td}y3w(3Xyz5');
define('AUTH_SALT',        'A#Z?Y90.ZU(c(uB+|MEU~c4Yh#?[|XO/>w#>f.3aiP|a+Ay|f.Z<bA)$}lT+fBuW');
define('SECURE_AUTH_SALT', '4vBW>&;bYw9X&04-~IEIE8oTFsI-x2L5ef{:CjWr-c+~S-@s4-J+ X)6mci-+aO?');
define('LOGGED_IN_SALT',   '%7lzF5I.*7o1MAV94)}{1jhfzl;|1Zp#xkk/eQV,G8|-&OB9E+4B$uF;I)*3TZ@^');
define('NONCE_SALT',       ':c<@8] &+2W:MGBjXj_XPA6i+NatazFeiH$.P;11vLHim&es?<E(2/p.Ms9bpF=u');

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
