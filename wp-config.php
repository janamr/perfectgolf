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
define('DB_NAME', 'pgg-db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'RE3u`lnMsl2P=CM/Me.^97n,_fi1<a<50 ^hnQ^c_Up8mX@LAvhc*|@aI}UQyBm$');
define('SECURE_AUTH_KEY',  ',T|&k4@.xS{FOakYfRM0*p0K*u2BEu^WbI6~S#K/zRM}we<lE;eZ(iuP~)|i{4fj');
define('LOGGED_IN_KEY',    'tUKX()II>qMvvk^<S4h43j#TV&P*l:OkIicAb9srp jV:rYbsi&yzC5;rpKRyK%^');
define('NONCE_KEY',        '~Fn2I<7O[{4.78LtT%EGm2>e-$vsH|G/c]+BL-qYz1<D.:l@3kmQhj])X>n_&Q2s');
define('AUTH_SALT',        '&[c(jw4IBW_[(SJ/6l%ezt`Sr#i0fSfQW9YS;2Y^0,pEQe8SKcax<wWd7VwoFmSt');
define('SECURE_AUTH_SALT', 't(sSB1Sj8 OGm?G(rCSO$UKHaf}L$!=w_4+SlBHITwLFKss ?23o5>qwaDa:Cn8y');
define('LOGGED_IN_SALT',   '8Ts>n%Z${fyHfedc``y!^%Hmhy`4wERCF~I>6onb&v5u6%g@MV2``g~f1CtTogQI');
define('NONCE_SALT',       'I^%JF7-|QaenuW^W[GJLO@-d<#Gqs)qg[(BUtvbprs$Pdxx`Z/pb1IvYjQ=W%`xP');

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
