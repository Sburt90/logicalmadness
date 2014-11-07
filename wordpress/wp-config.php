<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'project3');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'O*0pD#cUfo<AfclP>8t.&N @g5V|3{]M!A$>@aS>uk,F-JPCY~vm|-O2|$,/mXcp');
define('SECURE_AUTH_KEY',  '=:__D271-!gk=1}2;|F7-Mik875|NfIHq+7dnGLq4MY^o}))9b56.+fu%_0;RgVH');
define('LOGGED_IN_KEY',    'vsVf%Folh=[#6|f_Ax3s0$te*>@|=o-T:hy+N{sB+u$BPqoLmE80Oe*;Ml}kfLpQ');
define('NONCE_KEY',        '6/ZoL8XTO~<PvB|2]?Kqw(Fsvv?EeNDN2H%k;$rh}##YS++j%fW-L!!A|^e6mk.O');
define('AUTH_SALT',        'C7FvW.|<4K<?(3YDDW0kp6#f?H?vP7[xA1Z}-2?YNXX,x[=(GwI|M[j`a,Y$^qA7');
define('SECURE_AUTH_SALT', '2l$~SS T{N41{.hl[v.f1w6}L_g&<C7^@yipt8PMn|-}48pTNvB7Fh+}(]s=IY;;');
define('LOGGED_IN_SALT',   'B$!w|lC%!Qj4C@4p|}@7q*dQ,0vjR#YK{o!Mqx<u.Cs99E|Q@ETu{9.|7$SlWLxm');
define('NONCE_SALT',       'gEq)&hGf@qa6c+X~y9?oA7YJXo@5 gE6d$pTCq|s^;m~]vu+o:X_)}+v3gA!ak0@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
