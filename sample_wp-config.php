<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
define('WP_HOME', s file to "wp-config.php" and fill in the values.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@={iczn|<JN(6L!mo5vY]+eEbKM kSDNRW(o/41:i@$?!{pd-rsA/>X~,01jJLu ');
define('SECURE_AUTH_KEY',  'UM3@.tZHt$li ye,bp.|Qqx|@xNH64I)-FXXKG-;Q|v}aFr,L)5NgI[?mM;81-wW');
define('LOGGED_IN_KEY',    '5=;b_Z|7peB;f}~n(,:cF;UnhPSt+QYx6$FU-ph|E9Lt--*l NTpwVLT#_)-leo!');
define('NONCE_KEY',        'oHi)g@QH}1$}be6_+,]|w-T8-=GX:oWW^My6 P>$q;)qUZ-Z22z@t_89<.xSo^EE');
define('AUTH_SALT',        'FpSJ36%[p|:uK>WHx!Q1z2OG5s21}-1_K?mJW?2#tqbb~I)UW1T|[=p57n1? idV');
define('SECURE_AUTH_SALT', 'D6c#ey*nN65b3D_1_+^Rg-+.M.6iZI]-x*)Jb3J(xH,fLXf+GnBL--9ceTCMppX|');
define('LOGGED_IN_SALT',   '6W|.{n5|nK*cO}=qiF?j4&+&^CkR4Y=81Yg9`n,AGl)O!y;uJ|!7y~zG5kt+F6RY');
define('NONCE_SALT',       '|h,:4d`sS$HCt>8HE@M&Z0<#pBI!Ft$Yh%3NGo78ZoIHzHBP[-jzm0a]0)4=+9$4');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('WP_SITEURL', 'http://calderadev.ngrok.io');
define('WP_HOME', 'http://calderadev.ngrok.io');

/*That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';