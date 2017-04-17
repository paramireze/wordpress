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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'username');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         ':=SJl.)z{?dBo~XZA@Rfe?1:9fJ<*-6xDckPj>pQ2O<bEb-Qw)Sd*fikvx0p<@qp');
define('SECURE_AUTH_KEY',  '^00#O_=34ulb!Pb+pUwO7!N[HL`S2iP?2b+e04t-K-48tests([ 2C<02DjkBAE^');
define('LOGGED_IN_KEY',    '!&&es%V0vloK/w;`WasI(1KWGz?j?>aRue@]Lk#0>xPf[a@Aev+iaye7jq I6P2(');
define('NONCE_KEY',        '7o/SL:LCNZnik]#0~51?)v-MP`=O.&3w<-pT?;F+DNdF*c{atj05se5NzZBYE!P1');
define('AUTH_SALT',        '?+4[6]}jZF Ys6CPD9w<t~29N)ItNWV00EU[1uS&$0b3a6L?*R#]EyO&pE.PvFOW');
define('SECURE_AUTH_SALT', 'b!2>oz>Rnc$[h{!i&&./`J@&#yl-i`VG+rp+M@~s[MSB5{EZdWhx,7#Li<w{hfO<');
define('LOGGED_IN_SALT',   ':8fZ> )e94yHSL{LIJDY`LW1fr.e1X4.|6@!,@G]4Fbt&)z3QL~[<eHUjr%% e$Y');
define('NONCE_SALT',       'By|=PKx<eR.jw}Rxna]>T*IXV 5coa+Ox<_0]g6`!I/KpFU2l1TidqyQo!30Ij2K');

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
