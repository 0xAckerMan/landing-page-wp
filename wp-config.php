<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landing' );

/** Database username */
define( 'DB_USER', 'team1' );

/** Database password */
define( 'DB_PASSWORD', 'team1' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X?z1>5< M]c<X++oUz Go)*kf0F!q/$>laQS>tW(#.Ds6.cnTq{V Bh!Fem-{QVe' );
define( 'SECURE_AUTH_KEY',  'p5.]cBau)OIVq?jK?c.&!O27Hz%47pz6WJx_?(gu!M*JRSwT{IM6r:x?b(SLc#Y@' );
define( 'LOGGED_IN_KEY',    'zZ.#$r[V]e$K6fM9Jvn?1+vWosN8Inu5zQx<^+>ZQy@^,dki<V3s!a/4$?Z2^RZI' );
define( 'NONCE_KEY',        'F`pBcg:c?=P,v]gkiJC{IlnWV1.{lY|(bYBMljHKs[zO`Sk+^wzy{X|ZY#(p#5v2' );
define( 'AUTH_SALT',        '?G59$glCT,$Q TSG$WU4-F199rv8M>K[@GQ$`zfdF=KM2+.mm^Q(9nqY1~4ZKtx0' );
define( 'SECURE_AUTH_SALT', '9xVaWg]K|&1uz4rwyOQLae33N{Z}6)l!-6RaAkS]sVbqEH,vgk-$1j&#$^{1Kn@ ' );
define( 'LOGGED_IN_SALT',   'LiZvzl]<Y#Q8=ErO-gB%.b<?+a~+3~L?GHYETzxtaTs5,Pk%GO1xXVObxn5dC,:<' );
define( 'NONCE_SALT',       '2f,?<Xb*AKrbc3#O~`ThejZ:$yPQ31B!h1U?2o;op}i#Xh-7TWWZ?^|`7.R`Av6p' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

