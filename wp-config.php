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
define('DB_NAME', 'capstone');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'kS)U0vi<.Cg3ygXfVwTz~Qsio8xx_53U=a(}4^A l,uF=.Pv1x~KFx9b]+Rxr2PP');
define('SECURE_AUTH_KEY',  '<4,D8;eS+-T>n8M7,|ipK8X>4]l%P4`rATN;vu9tX|p{+lAL0*MXK4IQ-J},1Z~U');
define('LOGGED_IN_KEY',    'a=0uob@=:X=6rTIx,,M:EQ]GQ;*2v>eJa[Y8{`r8d_?yQ:0l%dx|:0ibz>2=`Qqa');
define('NONCE_KEY',        '/0`UROC1{DD1~Cku0>jjAnb-l/ Z3R(Dv410KqFE~ #}yY7#c*+&7cG?>/.ZGuU[');
define('AUTH_SALT',        ');Yau=#anye(:C-_^)K4=d_qgXQBZA7Nh3}pBej1{K]pbon&1F?m49$d_]c) &Zs');
define('SECURE_AUTH_SALT', ']1Z~[M(vu0k-,t?D,OgFFB0/tj0763a1M#NF-9[do?llKqt O&m;kliv3Cz<O.{,');
define('LOGGED_IN_SALT',   'k%gFimN2P$32R(>^o^fw8.Oi_4B}+s,.`f:wt2Ho(k4D[6J:bCEF)M,}^^4>tCu;');
define('NONCE_SALT',       'v_Do>DpJ^Ch,RH{1Bk4S vQ?PCc3G|(.X4GO/=PP>$&vZMljovY)FR.^bWx{(2o3');

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
