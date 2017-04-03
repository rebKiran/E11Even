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
define('WP_HOME','http://e11evenevents.com');
define('WP_SITEURL','http://e11evenevents.com');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'eleven');

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
define('AUTH_KEY',         'y0Fxr9!6hyW#PpGb<>lSGeejbysFy[PMCKB~KmCj+Ck(vWoA?KxaGr= xo,[Vk%S');
define('SECURE_AUTH_KEY',  ')Q>axaM4U,j/Kg)tuueURr8?8*(x]N@FH_g7~6L:VFFO%~%o8_Nb==ol&zW[mS1r');
define('LOGGED_IN_KEY',    'X#=:HT.7>[a%f>>,A7e.yOEJFPBCdSUdkOfcR@Y2Xu_#qLDGA%dhi.x?xcuwUbA=');
define('NONCE_KEY',        '9OUN7E_eS[O3lP>.1r [4{ peS8A/#9i89R:1U5>4 }y(Ig8$BanGQ4ppzB[,?cb');
define('AUTH_SALT',        'G6MosZ<W{hy0_NGJp`emA_%c isE6*$WECKyv7X>ZRGLBAC{x}GVn,Mg+)xJ:./?');
define('SECURE_AUTH_SALT', '0OI|i$ukw TQnq3rC0cygaG%3-eK~JrRr~H:V*JuKDXb}:x$l,T/nnmF$+3Nfi&u');
define('LOGGED_IN_SALT',   'XBt`HI/Qn<(&=43(6KZumqt] c*&:i@NGK^l!E:f%&O 1dilgn3qx2JddkX}5&(&');
define('NONCE_SALT',       '=2ho)VzY0}HD4QhADtTKuGsfxm[z%>PZE-~aG{DNRer5Sc?G6p=,oi2zH<8IE6(4');

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
