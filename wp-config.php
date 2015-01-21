<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aceco');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '}p-S-|ByF2l!_-ODd9Q^T6-/FL?T;Mlgi+VtNoD2>RG8#cBW5JrCHCs4Co!r2{j*');
define('SECURE_AUTH_KEY',  'kJr}QIV<fZmo=NVl?sw/*:b({+`^a)/s_:SU?{UZC-g}un_zlvzn)HJ-t.gfZH7A');
define('LOGGED_IN_KEY',    '!f!}C{kgOU$|N_Vp6nXsO|:-3 tKoQ-t$M|)hB$SZF< @>0[<=n<=b-:-F738W-+');
define('NONCE_KEY',        '.vVs]cQTNQoPo`djDwTiF@p=,)OdhcKRMG.2UAZaM[#Lz r7[/%fFl=QydY!~~dz');
define('AUTH_SALT',        'n-|I8zdw@xirKaSmDg$YEn#Pz+g_euSzP%qZ9`[//PRH+0s6lP6$YUrh-^e9y%9%');
define('SECURE_AUTH_SALT', 'q=B{=m;=*oc8Xs}de4Te$I?qsXTFvOamt D)E.4|is8Z,`])Dn8~j~Sk KPr{RL+');
define('LOGGED_IN_SALT',   'tGzRa+4_@Lxl&EV!)qfl<8b#( )}cJ6gckb+r:z1OIsB/}~=0ugk{mZ%|.+@0q4j');
define('NONCE_SALT',       'X+JpDuJvX!ch0N6*2B59@|vZ!:r;(x-c|((<Z1l^-HdY1|q{f~&[6pNyISF8er+j');

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
