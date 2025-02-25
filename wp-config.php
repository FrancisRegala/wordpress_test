<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testing' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3i%}_{KCoEJf6R_F5@<v(f?8y86Caz.Xra`{y7*?$T]{D5oz+U2pw;t=,}0e%M-w' );
define( 'SECURE_AUTH_KEY',  'H7cPsK7D{[|-IptDe5afX)!!*O  5&W3IqB]=He4@5(h>_uwy@$65O=oKvE4D[Ec' );
define( 'LOGGED_IN_KEY',    'gJ:mv/0aUg&yc={,Pl_l6`_eIwv9BIhDsBF6#`{Sgp-$[a:;TB!>IDu=I-1HS]UE' );
define( 'NONCE_KEY',        'jU=b|V+XF{wI.;-G]Sj,1A9`zA)26+g$YDE0AS>&<QXW6Yt,tj*X<au/AyZ]VFj.' );
define( 'AUTH_SALT',        'h`%Vo!=9mar|,9tU8[9YEwkzFZ1h5/YuiCuhpzVR-dww?Pz(Duuk?p=w#5`nvv-*' );
define( 'SECURE_AUTH_SALT', '[i20Tt^[`~U;kNTMqwD8uqoayx[.k:[E8Q0#RXQ0S_hYUCG>o9E.n@LdRys;A(yZ' );
define( 'LOGGED_IN_SALT',   'XM{pi(:<^(7W._OCe$Q0ki~5NXguCQzLth/=$>KN#w(G)Fh}Htcq=E]f4;ut<[hE' );
define( 'NONCE_SALT',       'f#$m@z@M:.g0!4R*hQb%*rNE*}~`Bb2sn3#kF:xv%5$lpn/J<n7z{$>c/.%xElL8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
