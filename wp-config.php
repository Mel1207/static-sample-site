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
define( 'DB_NAME', 'sample_db' );

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
define( 'AUTH_KEY',         'AWfSXBGUt{;L2#8o_IXT;Q7QZ,Kd@ur1pI)l@>cP_8[l;y%]iimqQQx-qv=Nz;t@' );
define( 'SECURE_AUTH_KEY',  'FVO(ngA-^<p>{3c@Do>$w_) cy[a:T[J#RfB;gf^OcGxqHJmUq$ttU1DO`m,U~`3' );
define( 'LOGGED_IN_KEY',    '@h&6t54|WWJ!Lq)rSuDJ5pN&4XmT%Qx0Cw UPl8}wvF.r* /OD2pfRFze*2z6t1s' );
define( 'NONCE_KEY',        'Pit!~fd:&$u4RiFW}oUAo)X,~;Yv#{nK#j}@Wl4/.3v#k!p58Z.R>;=i(RYO6neX' );
define( 'AUTH_SALT',        'Ks ]R^,%yZ3Xcczt_r_LXkBr5_3#;nbd p&jp59x)E-stJ#WTP`%R1Ie;Au{S=93' );
define( 'SECURE_AUTH_SALT', 'vjiHLdB$0,YmzN;=+:Sn{b8(q1?]/>B!ytED^DoFS2a5/>pbJ+4+Gb>a&e8R9S}|' );
define( 'LOGGED_IN_SALT',   'nW!*>#`sDMjP}&X6h#gm`Vy(:lc<zn>{NcF?@[/;.;U,Hlsk`#y*<g|fTiKrrl{b' );
define( 'NONCE_SALT',       'J*a1S7II?);8EK7^xxue/KX7w92!Q|+,9L7 0Dr*~c#h?Vrm!kf:U;(!e<dA4[Bu' );

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
