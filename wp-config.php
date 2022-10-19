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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'prajwal-codepipeline-db.cnbwakbdzeez.us-east-2.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );
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
define( 'AUTH_KEY',         'Tsu:TSfC4+^&v|C}mQT)`yp3xj(i]^%MCBQXa.oktUKR-akuTot*6{~!7O<xx*g:' );
define( 'SECURE_AUTH_KEY',  '97[4WO&l&bIqadodz(iD#+4H dOu)sUQJ)e5|dY-+*FDv|b5)wv7R:{|sY4lvpz5' );
define( 'LOGGED_IN_KEY',    '!l=xG;rE;pAaADJy,,UzyOwq-lV,|mYp4rV{3#80cZ%B3+}g-}%dL+;56=BPj>BE' );
define( 'NONCE_KEY',        'Pi.{4TQTMUg)p+cF8OO|R}45:bTlg!4tf#ry5^H?aId{_X`$-a<$6X^h#>41{Jj/' );
define( 'AUTH_SALT',        'U0v;i#Lxdd&hu+UHu+U@TD9/TMqS/PB8FmDB$g9eVXnoW(xai:wRYJi&})}fpl#;' );
define( 'SECURE_AUTH_SALT', 'C@}NXW3P 6D=7miv3 Zhr_`ljHc8W)GAhR <[uRc$,g~q4-awx}pl033a]KhW`jK' );
define( 'LOGGED_IN_SALT',   ';bghu:5|irm.tyvPL(HiUq3+P91P4K@+!^>Zdk;+K{]oQ;^C#CbT#vROEQSlHP+A' );
define( 'NONCE_SALT',       '-GjO5b.c{Rre}f#PTc>Zn1}~sdqH89G>w3Jq@Upt+JBjcjwat|S5L+Pg-z8(p+Pf' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
