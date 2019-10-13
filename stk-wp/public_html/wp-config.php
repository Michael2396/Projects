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
define( 'DB_NAME', 'team_mma' );

/** MySQL database username */
define( 'DB_USER', 'team' );

/** MySQL database password */
define( 'DB_PASSWORD', 'team' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z^Z82q`<;~(6Y(8oGGt;jjs8mSh/l@&GBq7_p=qKI[ckm_d-%54!h@:GqW=!P4tn' );
define( 'SECURE_AUTH_KEY',  'L`EDV@^!{L3gnN;o3izNF>yh)4S[t?Z5@dW; X`.8GI!G#(=N1?-%LK+U70Vn5K}' );
define( 'LOGGED_IN_KEY',    'V(k?d0pNy:/@+iVt2B$kEp6My.y@L!8>:p(K<},K?m9vT6mb=&F.[i[*DGZRY~%/' );
define( 'NONCE_KEY',        '=i? !gYnw&9[Ga;2h=esk#,Mf0b@EX#til<sEiqSb#f2`#s0rq.6G<*bT[RPQLm~' );
define( 'AUTH_SALT',        '*^RzdheLea5e+.5&_2ANl$pw(WX!mE7/],XfgD=#H]Gs[wt?2fwx g&)e~.23az,' );
define( 'SECURE_AUTH_SALT', 've12PtLJRpzZ$J%?UvDBjC$4s9ucg~QDUcoOUN[)O!RFh[Z;/d||D.M) h2Z>m`?' );
define( 'LOGGED_IN_SALT',   'jak__3uQ(l!)}5efL76.tns;P%J7]7Uq1]T4)7HClMz/(`J|PGmn%$xP0!;6#qN0' );
define( 'NONCE_SALT',       'X`9aE;;wbfp&5Z@+gq7DMON3Swe=J%B`ouyj9P]B9l8U}HwR/[ww#=e(AV,5lIT}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

define('WP_HOME','http://team.stk-wp.codevery.work');
define('WP_SITEURL','http://team.stk-wp.codevery.work');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
