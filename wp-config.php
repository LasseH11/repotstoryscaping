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

define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'repotstoryscaping' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'j$iEf,r(wqpum8>7yy|A6SNz>0dG)mw/y|g%B6#4ms|>{k!(QPTVW+fKPlViQ#Wk');
define('SECURE_AUTH_KEY',  'Zk;m1MbTmxWo&1Vh[XOY=dLw(0d- b_EO52bG$9eL}usqU%,nl&;-fEh#-`#m/JB');
define('LOGGED_IN_KEY',    'vN?athR0&cMNO1X*U2,Om;Ep{WUykx1;6~YOOgY;(_W6)-kttN%#n@PxYv1<!?xW');
define('NONCE_KEY',        'x^Vl/g.;>v$wyKSNh(%wTG%?v5@Z~8^fY7-80a!G+S70u:y#7c)6{c=IWmyS44v&');
define('AUTH_SALT',        '3pp%2 j ;fd_#kd9|)78Zh,}-HT@N_i-Tlm;g$T`V{zrIBd47t(UO]%6uHg|Du8p');
define('SECURE_AUTH_SALT', 'Wuh^UzX0rBtq6V_s4}~lDL*r-Ga!|PsfHO#d@1^-~~[^ACS-DO8HW@-4`/K@-Jsr');
define('LOGGED_IN_SALT',   'qs~Kj+wMgMeSv6~>tT,/?o@cISz*Vw@|0 wkx0<o~ZQ=T=1UHNy5xZ&G}%Cc%~ux');
define('NONCE_SALT',       'M0+$2Vl-g&,5B9H@|WL+2dk:,KD-ZD,YVWVg:0p2GS,*}14i-=lm||lUKn/u|id<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wprepot_';

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
