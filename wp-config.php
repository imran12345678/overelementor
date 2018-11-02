<<<<<<< HEAD
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
define('DB_NAME', 'elimentor_edit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'd;E}*WJd@&!k?0 A~E<VZ^qAA&v44FnV6Mu-vuYlp~yee)F00>Cm0Jki6e(}VR*n');
define('SECURE_AUTH_KEY',  'dBu,qop6oy6ex37sz#Ckv=NbG_>Ho,)2)2-Sea!zdn~f[|?LSj4ij@b64/yxhEYZ');
define('LOGGED_IN_KEY',    'Ox-n?s]gB9m51r*S7m1JX9, S`/blBM xnXRRE;&%j7)0D9)AA7$jf3/1PE?xk|S');
define('NONCE_KEY',        'vq@ >r+46$y}q~F{NW]}p!JI4dV^rG4=C| >Y_*[9eVU<7NZQhAL@@3o0Sb26v|m');
define('AUTH_SALT',        'y2HY,}uc[ncM0WbxPQsfd:P|V_q4&OCq9Kb58q0Lr%j|(2e=].&MZnfgT^a-oVDY');
define('SECURE_AUTH_SALT', '.]mVsYI^;z~bdr/4$mDhDFF1OoxI!]@iHaNuhdVcY/p *}hN_PmlgE7E%YMAVX/=');
define('LOGGED_IN_SALT',   '>+RexBjdR,L=Rs;DOB`t)xvoW^1rF:F}6lESQ5|!WHOp,DQ&R[/3d ?;t+$k.L5w');
define('NONCE_SALT',       ':yv9U`Lwg]CJ@Zl=jYL(BExtH:|Zt8K(;4nHw[|tl~`(+JqN.Ns_8ZJ^jk9(;p>y');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
=======
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
define('DB_NAME', 'elimentor_edit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'd;E}*WJd@&!k?0 A~E<VZ^qAA&v44FnV6Mu-vuYlp~yee)F00>Cm0Jki6e(}VR*n');
define('SECURE_AUTH_KEY',  'dBu,qop6oy6ex37sz#Ckv=NbG_>Ho,)2)2-Sea!zdn~f[|?LSj4ij@b64/yxhEYZ');
define('LOGGED_IN_KEY',    'Ox-n?s]gB9m51r*S7m1JX9, S`/blBM xnXRRE;&%j7)0D9)AA7$jf3/1PE?xk|S');
define('NONCE_KEY',        'vq@ >r+46$y}q~F{NW]}p!JI4dV^rG4=C| >Y_*[9eVU<7NZQhAL@@3o0Sb26v|m');
define('AUTH_SALT',        'y2HY,}uc[ncM0WbxPQsfd:P|V_q4&OCq9Kb58q0Lr%j|(2e=].&MZnfgT^a-oVDY');
define('SECURE_AUTH_SALT', '.]mVsYI^;z~bdr/4$mDhDFF1OoxI!]@iHaNuhdVcY/p *}hN_PmlgE7E%YMAVX/=');
define('LOGGED_IN_SALT',   '>+RexBjdR,L=Rs;DOB`t)xvoW^1rF:F}6lESQ5|!WHOp,DQ&R[/3d ?;t+$k.L5w');
define('NONCE_SALT',       ':yv9U`Lwg]CJ@Zl=jYL(BExtH:|Zt8K(;4nHw[|tl~`(+JqN.Ns_8ZJ^jk9(;p>y');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
>>>>>>> 0fbca2694df5528203179756521ce69fe6026839
