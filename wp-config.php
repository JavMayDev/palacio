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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'palacio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'h%w(>I|c5JxQYO=&;o#RZF}|K|ah*:`EC{n[a)>[@]6VN8]iwuBLaR[P^q6{wHVn' );
define( 'SECURE_AUTH_KEY',  'E!_=,r`2|s0BGOQp5uFB|tyt]i-oc!wjGYg|{bO&(LVm}fNA=.vk:n`.7(cH!$?M' );
define( 'LOGGED_IN_KEY',    '*h_{xwSXvYBD_8>+%es)[A7b-0>9Saa-$ fbOMXg2W5FRR_/E2PhiZ9 77/i/%i=' );
define( 'NONCE_KEY',        '/^2X9u~2M!.@]}zhZ=r]oTHTaKDa$(%SD?KWqB6mD;?+K<EF(%b`>p9ThL#Im?mN' );
define( 'AUTH_SALT',        'Qo3gkB8Vm0X,*8Py<?;6&rK{ZKEm}6?r$bxp,$sW_aeJGpg=68skzk)eG7O~-!z+' );
define( 'SECURE_AUTH_SALT', '%a,mYUDG}( ^8Qop!dkNp;#Bvi`B$;/*sr!1qlZ7Oh=sVYg;g0o k`5Pcflk*8:b' );
define( 'LOGGED_IN_SALT',   'VJ7u)~ ]}t9SgtFptH#B8y8* u}-$e;t).F.H,^{#$R~M&9=KBG2Nus+k%xi>iJR' );
define( 'NONCE_SALT',       'F`~[>*Q xl`(Ihka`?[i!;[H;b7 g,eSEHD EBqlgaA}XQCyr<|44CkDc^T:?<=N' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
