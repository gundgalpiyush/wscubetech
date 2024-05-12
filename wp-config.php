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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wscubetech' );

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
define( 'AUTH_KEY',         'Rr!M8NoooD-372b];Xg%VWwAp!:0(2a?s1NEh#Gwbjd!{ag+s,fg*)_J2vdkcuZ2' );
define( 'SECURE_AUTH_KEY',  'PbB&_[!D V!!;8b`sY@{W}d%8xYD!s=u(8z;|CQV+dh;~b,l24R*l~i];)tzx(bY' );
define( 'LOGGED_IN_KEY',    ':{7]{_?d;pL8E{LGfUG,k`EEYDCkdIVOVuG]7N.<t>dxTl!d4Qo_hR;ARGG7i$Xb' );
define( 'NONCE_KEY',        '5ngQN{/Np(ngmbS@{nHRP_+ +@>`.*B~sceeRd/X+&wfar?FN2o[eY*LgByE]:nK' );
define( 'AUTH_SALT',        'oN,D|&Kr9tnw!>qwV;?9j}a`R>t/;Vp6Z>b{EN]R%.S7jnT.ew8.E@tS7G]Y2M5E' );
define( 'SECURE_AUTH_SALT', 'a}1iQ:EU;p%.Is~Vg6PFXF$0Csfu7#u(nq<0x#G)>fcUN),v!3OikC a2IM{uW,@' );
define( 'LOGGED_IN_SALT',   'MLzjNwZf.bzf23G+XZKFv</5jo[Jt#PThkey#6p!R,}~3wC@Dja#LI4);I@$5[^n' );
define( 'NONCE_SALT',       '_VV$~j=TD^wBWW(m2end~lNu^*%^1zKNAl nSK{T$jh,zix5p3^F:Gi=!vCqH2X2' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
