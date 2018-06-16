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
define('DB_NAME', 'rgrvisual');

/** MySQL database username */
define('DB_USER', 'rgrvisual');

/** MySQL database password */
define('DB_PASSWORD', 'wJfWr2oKD_|7g');

/** MySQL hostname */
define('DB_HOST', 'mysql427.umbler.com:41890');

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
define('AUTH_KEY',         'h~Uy6!;Es4={#]6GSm:`OzrnuI+w&2Z]0YnGV>/29QA.SV9Yp0vl5U<iENjm=2ww');
define('SECURE_AUTH_KEY',  '(S7`YS9ZoK_mhiTwFi5nuRWu4FxEdI4T8)5?dVq,cBKU ^,(gqw0$[)T+2=KmV0@');
define('LOGGED_IN_KEY',    '!*.aN9O%4pSeqY!5~f#,um|0@z?!` FpJm-HE<mo6%+sJrlmM`@HVKH*zdajX{+r');
define('NONCE_KEY',        '6AFDiubFZ~s4]<.IDLoq&M8VJUX12r227<n:F3y7M;1)@eK(Tkx%WIu&tbti|e+{');
define('AUTH_SALT',        'gGC6@J(F6%SqC$<sl#(PtD+)i5T/I{w08QJ[DCJK}Dgf9XU{LjyHy3u7-;U,<b-@');
define('SECURE_AUTH_SALT', 'h$|5o6:1trkxN3QV&KBVw@6J$rRnfMEZQ fy>A>raiWwKHb |Km257)a#1?UMb6g');
define('LOGGED_IN_SALT',   '96:~[dq)gW+gkEd,PW03]hK-*f[>mYq^Cj;~fOxZ1q9.^L6:flAe!_rVtF4cnjCV');
define('NONCE_SALT',       '!|oWh}sAM:+<Ym*KKW t![>u%1!.m4PZsl9=>a7W[Ht&3$Mr7x pK2Psko?y5*.e');

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


