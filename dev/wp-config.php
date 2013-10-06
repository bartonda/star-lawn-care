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
define('DB_NAME', 'starlawn_dev');

/** MySQL database username */
define('DB_USER', 'starlawn_DB');

/** MySQL database password */
define('DB_PASSWORD', 'Fa!q&M-pDGyz');

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
define('AUTH_KEY',         '1Nq&92*gP33K$7+S{_>(FM!K$!T2~X7V-Z^?!ci6[G-$k(S%F:4ZLG_[_`Bo75Hp');
define('SECURE_AUTH_KEY',  '#29F>3KSX{Y^?bDb#];F]?{m@:<WVjHXE+kR&x*+o-h*z|@xF{rb6=iB|-N=N-dW');
define('LOGGED_IN_KEY',    '&O:]%1|,ZsBJswb~cdzd=p0~c9]y2s>)Gx<QS4+]= $yxtP=3~WU[ _[|8Yy8V**');
define('NONCE_KEY',        'z~>S-3PTmJu}RBpfU0BK+u>[#,k_,hW$o.Zfe(^|KZefR0~1FyXrEit7W|ZT<,Li');
define('AUTH_SALT',        'Ndr>#xDbItX&;|fMIe;$KdRw-`!Va| 4pDgsuzX)|Kn3D_]H>2*;94^W~)M7:Fdr');
define('SECURE_AUTH_SALT', 'Ha6Cr`Ii}r^N}vS5(=a7+!-&{@b+8BxEd=b|hIAP%1>jsOPl/%)pg.,Jf[I16GmE');
define('LOGGED_IN_SALT',   ':oWU/WIO>DO+Ai)ja?<Ar>e:q}6o#cADWp9BE+^I2F`,A!S?Z0+q]Qr,Hp,mX9na');
define('NONCE_SALT',       'Kzr.1a!Wj-C+O[76Fop-dZsVqJop|z-$( aM7?2-eEY}dL1#O|&u;Y7_I&r&5{`O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
