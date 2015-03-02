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
define('DB_NAME', 'louise2015');

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
define('AUTH_KEY',         '~?*g>dnO8T9hV=TR7byz7|h-0Qj]Z*mskhO-9-i2p[J5_<c4lWJxm#*@F{3#+PUI');
define('SECURE_AUTH_KEY',  'hLYV<!lC<v4*dFt?I-phhp$5ia2C^?TprXSj555&*!LCn}~ys`WWmV`d*I_4&5su');
define('LOGGED_IN_KEY',    '-,R[C_w.yqq-e=VNq~x3V1+6do+o!sa`Xx~ZlWa!S`7+7dr+^i:SH^d%}|Ar]C.|');
define('NONCE_KEY',        'D> [:V@2b-[+rn]-U7+2j*s[C<<a|7>dTF?j,;`&Ad_T-CMId]]<2pnmf*Lrv#{B');
define('AUTH_SALT',        'V^cbDv!zjA^=T=x-i[Gv~)+{pV %%5DEmpBb==fdhf{$ItICHPFM/=[fqo?Hh&U@');
define('SECURE_AUTH_SALT', 'D]&W=-APF-p1/B.l=i_;S:c d9&>i$Us-vD#z|d2@JU8P|H:z%mU;Tp7~$tnjv~N');
define('LOGGED_IN_SALT',   'L0(^:K]@cDC,Q+#^qC60<I?@PwZl|`*f7gwI=:aZm ( VqAv)M/QSWc[pOV)`hlO');
define('NONCE_SALT',       '8gKv=kCe7Z.cMdwGKq|} ,mwc$zY+|]87~Ez)3ZN{VNV]#ns=L2>G6<C?o?fO-DD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
