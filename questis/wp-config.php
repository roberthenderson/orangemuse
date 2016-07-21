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

define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', 0777 );
define( 'FS_CHMOD_FILE', 0777 );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'orang025_questis');

/** MySQL database username */
define('DB_USER', 'orang025_questis');

/** MySQL database password */
define('DB_PASSWORD', '&Ophins13');

/** MySQL hostname */
define('DB_HOST', 'orang025.mysql.guardedhost.com');

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
define('AUTH_KEY',         ']X+9e_X/x^n:%:=y=LQaGiaC~b*y.wm]C~Jq; U:I[YcN3j&k8W{Aw|1*92Zty:a');
define('SECURE_AUTH_KEY',  'R+Jm(FVtFL@.][u`Zumb=Ud>fG@*+3CLHGq|,Vi`l&|d#W_MNO6kM^jHp3]6+nr!');
define('LOGGED_IN_KEY',    'ZUi#dPm-9-zj Q/tv74~{:schtX3lgmd|[8HXgF(y)(palcF}k@z=r#X:s1Ba5bK');
define('NONCE_KEY',        '--#:-Pt!CNcLzUM|Map|A$F]ty%13dg~8FukTXH|uysK8hw6 Q}n+FOgwEygA> }');
define('AUTH_SALT',        ']cdJ{7)&-;~76GJP$+X54C}gt=-&C-uJ,]]Z+S9&P+czeK>XIilAm`*_,0UX:N1R');
define('SECURE_AUTH_SALT', '=>(t+%Z-.@37<(QKje8LT+S[#-MES[eVZMvuwW/n8tD}#5Jw1ks+pTW[xRs;!Lwu');
define('LOGGED_IN_SALT',   'M*)_@+ZO[tds4%d=8By@cwF<+k|KT*(42%FixOolMGv.*?L}Ky&,$*)h=Uqw:!@>');
define('NONCE_SALT',       'L5{7x^SHo8cO-LT=@+:eBxcy:Uy/it+r=^wNP?kSVN;3BaurD{e|3+W<)Hk7v~.#');

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
