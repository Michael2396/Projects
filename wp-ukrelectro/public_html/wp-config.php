<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'team_ukrelectro' );

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
define( 'AUTH_KEY',         'W<&:26/N1Vy1.jHJR)7nQQeU*&+?zwi)T@&mW0_;/q%c7X_Nzd5TS2F]s!QrB[92' );
define( 'SECURE_AUTH_KEY',  'Si% $$L-GIn,J&*.Ne5sJ{aLwfXt@@WW0AgjCf|Q5sy%k/;XJKyg|jr9w20daAP=' );
define( 'LOGGED_IN_KEY',    'ZYE<Q<zeZ;*!N8D[g1rkU8|i/QYZXv#m]Z:nBQrib6<l!<Nih/nO4K7q$uzl z7;' );
define( 'NONCE_KEY',        '1=< /yYqU-}M]UOe?Y=SO<RV16J`=DW79XWk?OH,nQ0| VkO9fY-8^1,*qgmet8G' );
define( 'AUTH_SALT',        '5RR !?I{o8:6$G)-*cmZF$DR]rdjRF3lS!^wS=kOunj6{-^%J2g<S;&PH@X~]G#B' );
define( 'SECURE_AUTH_SALT', 'fTs-E-xs(5=3L]1viJt*qHsY=iV$D ^ecUxM/qx(h4qXBE2/wH}&79@[9wv@@6)p' );
define( 'LOGGED_IN_SALT',   'MLE?,wT22~ac]Js:>RY@Q7EHHK@]~@+ 9FI3Jj[|Je_TUK0Cf 9V]xGy;n:[Z6N7' );
define( 'NONCE_SALT',       '4R8B0PrM>X:@xk:R9 W#W__8T@`Pz&BA>c4xCU4)BUr=2-B^vP^_SWxg^++YwnkM' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
