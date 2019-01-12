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
define('DB_NAME', 'serve_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Q6M1F.[5{h%g.~D*7y~a?&gY*-)WeK4+$.Dy/an_Ca4P3b#7!J%ykP.E).3=COXE');
define('SECURE_AUTH_KEY',  '= C0D@l N8%e*/>P`?x>2hdPv2.dbOvkFTWQe<~:QLb2{!3](CMC([@}XR*V>gf/');
define('LOGGED_IN_KEY',    'ma;f4H(hXv}.^rc3,hhS-EHc[qqsgY=hfM@b/@!a%l(j|p,iiaGh;J!:CY25bJ?2');
define('NONCE_KEY',        'y-z+CD{HiFpW}LrgaF~6h=>qsFzNOP;w#%C<rraq&D5%$Nqp$)wk{7%qNmBXa<iu');
define('AUTH_SALT',        '42tMgi%{]#PG%R`vD*X9XE=uEye+t xJ^+ZJ[3?h;L^MW0}_;1&;u#_j7SOI1-a9');
define('SECURE_AUTH_SALT', 'wtoK2{10_^ rUjO>)_5%xgkd,+-ha,PrL=)V_`U1/D!a=#2eWRFPMN znP(56+/m');
define('LOGGED_IN_SALT',   'ww({HZKuXp>q_WW*>H?wW)l_O;|Q5}dM4OUiv#Sz|MQM?Ev4+%,x!fj:{Q5w))z_');
define('NONCE_SALT',       'A_`Rca<%@Q>W<i<xjzD=}}sN{a~:l<XW}f!.JmB==#J>Xr1SosH:lC3qK+}%eeVc');

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
