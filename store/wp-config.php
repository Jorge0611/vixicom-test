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
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         'IIHola,9<TD720UsW:l[*s{-C4DapRK7mI.Bp%P6o ^r1j}[~f0lBA*CIAw`Bv))' );
define( 'SECURE_AUTH_KEY',  ',GS@i$qO@GEu%1ixjQohRx Zi ,Y/E 1*d{sTPc>)923&dW|eb*,,1)X:x*[uvh@' );
define( 'LOGGED_IN_KEY',    '2_{_(j6X7=1`B*nnDs-X]%wG9=]hR(Hbvp#A~oW+<}[Id;r* Sgh4WW6D.3@3tGq' );
define( 'NONCE_KEY',        '3TgCPk~:LC<+nFY?wHN12tuDm^q{#NOO0b0NL=UY5k<zm%P6E!]f+afbNhw<$FaX' );
define( 'AUTH_SALT',        'Rmt/&1}?ZV<QSLUlbYG{%#ph! xL-&I:1WA)EtEF45 OKTrG4W< 5Nx.8q-5Ouy/' );
define( 'SECURE_AUTH_SALT', 'wK-5F?=OXFA(sRsv =(2.)c@dar}0?c6[deE*4cR%@i.S^DbBZnuOI4XWQ3;.M$r' );
define( 'LOGGED_IN_SALT',   '*Y(yq*pek*h$V)1+ls ?wF5Rnn 6@H#lfC@-)wrOG:E0m+^wyU#nn`dKhf3!*wx|' );
define( 'NONCE_SALT',       '`fyR0(.Jb?,pPM<.b^*dP,jGQI`ofYF>c:~Z~T|vl)y7W,8_$cs6VvJhXTn!M4[q' );

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
