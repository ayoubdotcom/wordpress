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
define('DB_NAME', 'Ventilation_Alize');

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
define('AUTH_KEY',         'Cktr/g7i*in$lFI*P90~n|)D 1:h}%Y)3;@9J|PxTGN)<!bD!v^@)J3Ma*r&7qfi');
define('SECURE_AUTH_KEY',  'K`x73#BW|&tYbrHaJC,6v8LoJAk7>tXB-Z6IuLoD,}gJ#}pJm.Ce%@y|cjk0sP@e');
define('LOGGED_IN_KEY',    '~3^-a$>xl{ka4c0lpGeF2?uj@8kJAUx}d52L6y*YL59gAh(Bzqrg63L&3(!|<5:=');
define('NONCE_KEY',        '8T?3mUOXh|#Ta`rs.UwNEf[coY<72P8Z$}JI~Ao^(izi /?7*mcxe3RK#`Uel-7c');
define('AUTH_SALT',        'TMEvwS^@u@7I(g(XwTg67j(q2ZoH&GJ.lk|%L%4N?D/7UO6#X#M`V#D<(-nHjkFT');
define('SECURE_AUTH_SALT', ',Nf|0nCTWJ*,XrKE?YEF)aQgH8 & Jw![ZX<=^jJkO<^:V`,^<&fo&Ks%wJH9cky');
define('LOGGED_IN_SALT',   'xrgFcdoGO=$u{4Fl1Wqe#3p=%8{(Vee7$;DEQ~nq]d_#eviRnek0<h&MuK?_8nU_');
define('NONCE_SALT',       'k~oq7U35,3=#S/Kg;o%l(FSl_J$/,36z6Z6#6fVS +b-AsZI%Gm6jCkC-Ar4SZz/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'alize_';

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
