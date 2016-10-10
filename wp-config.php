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
define('DB_NAME', 'mgs-blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

define('WP_HOME','http://192.168.15.7:8888/mgs-blog');
define('WP_SITEURL','http://192.168.15.7:8888/mgs-blog');

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
define('AUTH_KEY',         'PPArVxiIHcm`f5.7-T>(c#DYp>9}A|sz.Vq}$+FJF.dPvcSmmwDBf}c1kfc&O-?U');
define('SECURE_AUTH_KEY',  'vM(B/13wE+J}jzr o0Ks&aKo*/Z PYN oTh+Y>8+-uWrmtI7]: C?4*+:qW[mW01');
define('LOGGED_IN_KEY',    'ma+BGkG;V)Rqa`<]xuIh~9H6@%dkz=)i;}78-KpIZ<qaw{/ueO4I-IAfP^bk.QrO');
define('NONCE_KEY',        'IrI|K.7@2AINm>25E>w@n!! !K(VoL45@l2AhpZvzzEj7m<2wO<=FW<TlGQg$?Gj');
define('AUTH_SALT',        'dZPZyb7zj0-0lkw7{|@$)(a7tOGsJe+sD?iAcx%jyqHy>Ox_S{+RGa<^?c|jZ:Q0');
define('SECURE_AUTH_SALT', 'M1YV-dlfI/oE-b6!6z)sXQj_Hvj9AYMaA_UQ|ZT5S7GB+h-I1(pPA{V_2K?puBud');
define('LOGGED_IN_SALT',   '_HfytTyDZF2k-.7yF pD`4UiT<&Ps[6=S##T(|QZ/AH2FeY?Phn/o,.g}BZAsd&V');
define('NONCE_SALT',       '%I8s7=x_>FVxI,hqd,yTqe-|- ;*$QIS;=M%r4kyZ{GFa/t^bYSzw!l(r{Y 9/@&');

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
